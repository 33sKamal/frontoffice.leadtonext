<?php

namespace App\Jobs;

use App\Mail\BackOffice\ResetPasswordMail;
use App\Models\PasswordResetToken\PasswordResetToken;
use App\Services\User\UserService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ResetPasswordNotificationJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(
        protected string $userId
    ) {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(
        UserService $userService
    ): void {
        $token = Str::random(100);

        $user = $userService->find($this->userId);

        $ex = PasswordResetToken::whereEmail($user->email)->exists();

        if ($ex) {
            PasswordResetToken::whereEmail($user->email)->update([
                PasswordResetToken::TOKEN_COLUMN_NAME => $token,
            ]);
        } else {
            PasswordResetToken::create([
                PasswordResetToken::TOKEN_COLUMN_NAME => $token,
                PasswordResetToken::EMAIL_COLUMN_NAME => $user->email,
            ]);
        }

        Mail::to($user->email)->send(new ResetPasswordMail($token));
    }
}
