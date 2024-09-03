<?php

namespace App\Http\Middleware;

use App\Enums\Permission\PermissionAction;
use App\Services\Localization\LocalizationService;
use App\Services\Notification\UserNotificationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that's loaded on the first page visit.
     *
     * @see https://inertiajs.com/server-side-setup#root-template
     *
     * @var string
     */
    protected $rootView = 'backoffice.layouts.app';

    private $sharredSessionKeys = [
        'success',
        'warning',
        'error',
        'resposneData',
    ];

    /**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     *
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
        $user = Auth::user();

        $sharredData = [];
        $sharredData['user'] = $user;

        $isInitialDataLoadded = $request->hasHeader('X-Inertia') == false || (bool) $request->header('X-Inertia') !== true;

        if ($user?->isAgent()) {
            $this->rootView = 'call-center-backoffice.layouts.app';
        }

        foreach ($this->sharredSessionKeys as $sharredSessionKey) {
            if ($request->session()->has($sharredSessionKey)) {
                $sharredData[$sharredSessionKey] = $request->session()->get($sharredSessionKey);
            }
        }

        if ($user) {
            $sharredData['avatar'] = $user->avatar ? Storage::disk('client-disk')->url($user->avatar) : defatlAvatar();

        }

        // INertia laod data once
        if ($user && $isInitialDataLoadded) {

            $account = $user->account->first(['extra_data']);
            $account->langauge = $user->account['extra_data'][1];
            $sharredData['account'] = $account;

            $sharredData['countNonReadNotifications'] = App::make(UserNotificationService::class)->countNonReadNotifications($user);
            $sharredData['balance'] = $user->getBalanceByUser();
            $sharredData['profileCompleationPercentage'] = $user->getProfileCompleationPercentage();

            $sharredData['userPermissions'] = $user->getAllPermissions()->filter(fn ($permission) => Str::contains($permission, [
                PermissionAction::VIEW_ANY,
                PermissionAction::CREATE,
            ]))->pluck('name');

            $sharredData['translations'] = App::make(LocalizationService::class)->getTranslations();

        }

        $sharredData['loginWithActive'] = $user && $isInitialDataLoadded && session()->has('reserved-loggin-id');

        return array_merge(parent::share($request), $sharredData);
    }
}
