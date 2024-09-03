<?php

namespace App\Http\Controllers\TermsAndConditions;

use Illuminate\Routing\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('frontoffice.pages.terms-and-conditions.index');
    }
}
