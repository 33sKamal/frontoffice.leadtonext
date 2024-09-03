<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

if (! function_exists('priceFormat')) {
    function priceFormat(string $amount, ?string $currency = null): string
    {
        $amount = number_format($amount, 2);

        if ($currency) {
            return $currency.' '.$amount;
        }

        return $amount;
    }
}

if (! function_exists('itemOfMyAccount')) {
    function itemOfMyAccount($item)
    {

        if (Auth::user()->isSeller()) {
            return optional($item)['account_id'] == Auth::user()->getAccountId();
        }

        return true;
    }
}

if (! function_exists('defatlAvatar')) {
    function defatlAvatar()
    {
        return '/assets/media/avatars/blank.png';
    }
}

if (! function_exists('newUniqueId')) {
    function newUniqueId()
    {
        return strtolower((string) Str::ulid());
    }
}

if (! function_exists('getCurrencySymbol')) {
    function getCurrencySymbol()
    {
        return Auth::user()?->account?->getCurrencySymbol();
    }
}

if (! function_exists('isoDateFormat')) {
    function isoDateFormat()
    {
        return config('global.iso_date_format');
    }
}

if (! function_exists('basicDateFormat')) {
    function basicDateFormat()
    {
        return config('global.basic_date_format');
    }
}
