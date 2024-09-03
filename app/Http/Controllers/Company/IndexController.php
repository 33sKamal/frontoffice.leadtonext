<?php

namespace App\Http\Controllers\Company;

use Illuminate\Routing\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('frontoffice.pages.company.index');
    }
}
