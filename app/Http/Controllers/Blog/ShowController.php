<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Routing\Controller;

class ShowController extends Controller
{
    public function __invoke(string $item)
    {

        return view('frontoffice.pages.blogs.show', [
            'item' => $item,
        ]);
    }
}
