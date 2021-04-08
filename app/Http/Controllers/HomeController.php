<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dash\Page;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     */
    public function index(Request $request)
    {
        $page = Page::query()->where('name', 'main page')->limit(1)->get()->first();
        $url = $request->root();

        return view('pages.home', compact('page', 'url'));
    }
}
