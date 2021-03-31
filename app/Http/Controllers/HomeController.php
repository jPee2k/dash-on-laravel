<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $page = Page::where('name', 'main page')->limit(1)->get()->first();

        $meta = $page->meta;
        $url = $request->root();

        return view('pages.home', compact('meta', 'url'));
    }
}
