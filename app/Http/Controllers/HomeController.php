<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Boost;

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
        $url = $request->root();

        $meta = $page->meta;
        $customFields = $page->customFields;
        dd($customFields);
        // $header =
        // $top = 
        $boostSection = Boost::get(['title', 'image_name', 'text']);
        // $start = 
        // $partners =
        // $footer =
 
        return view('pages.home', compact('meta', 'url', 'boostSection'));
    }
}
