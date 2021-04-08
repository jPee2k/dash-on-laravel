<?php

namespace App\Http\Controllers\Dash;

use App\Http\Requests\PageValidator;
use App\Models\Dash\Page;
use App\Models\Dash\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PageController extends BasicController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Page $page, Request $request)
    {
        $search = $request->get('s');
        $limit = (int)$request->get('limit') ?: 20;
        $pages = $search
            ? $page->pages()->search($search)->paginate($limit)->withQueryString()
            : $page->pages()->paginate($limit)->appends(['limit' => $limit]);
        $limits = $this->helper->getLimits();

        $request->flash();

        return view('dashboard.page.index', compact('pages', 'limits', 'limit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page = new Page();
        $submitName = 'Create';

        return view('dashboard.page.create', compact('page', 'submitName'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PageValidator $request
     * @param Route $route
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PageValidator $request, Route $route)
    {
        $data = $request->validated();

        $page = new Page($data);
        $page->uploadImage($request->file('image'));
        $isSavedPage = $page->save();

        if ($isSavedPage) {
            $slug = $request->has('slug') ? $request->post('slug') : Str::slug($page->name);
            $isSavedRoute = $route->setSlug($slug, 'page', $page->id);
        }

        if ($isSavedPage && $isSavedRoute) {
            flash('The new Page was added successfully')->success();
            return redirect()->route('pages.edit', $page->id);
        }

        return redirect()->back()->withErrors(['error' => 'Something went wrong']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Page $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page, Route $route)
    {
        $submitName = 'Edit';
        $slug = $route->getSlug('page', $page->id);

        return view('dashboard.page.edit', compact('page', 'submitName', 'slug'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PageValidator $request
     * @param Page $page
     * @param Route $route
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PageValidator $request, Page $page, Route $route)
    {
        $data = $request->validated();

        $page->fill($data);
        $page->uploadImage($request->file('image'));
        $isSavedPage = $page->save();

        if ($isSavedPage) {
            $route->removeSlug('page', $page->id);
            $slug = $request->has('slug') ? $request->post('slug') : Str::slug($page->name);
            $isSavedRoute = $route->setSlug($slug, 'page', $page->id);
        }

        if ($isSavedPage && $isSavedRoute) {
            flash('The Page was updated successfully')->success();
            return redirect()->route('pages.edit', $page->id);
        }

        return redirect()->back()->withErrors(['error' => 'Something went wrong']);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param Page $page
     * @param Route $route
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Page $page, Route $route)
    {
        if ($page) {
            $page->removeImage();
            $page->delete();

            $route->removeSlug('page', $page->id);
        }

        flash('The Page was removed successfully')->success();

        return redirect()->route('pages.index');
    }
}
