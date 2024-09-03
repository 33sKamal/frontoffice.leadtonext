<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Routing\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('frontoffice.pages.blogs.index');
    }
}
