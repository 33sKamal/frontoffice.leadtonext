<?php

namespace App\Http\Controllers\PrivacyAndPolicy;

use Illuminate\Routing\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('frontoffice.pages.privacy-and-policy.index');
    }
}
