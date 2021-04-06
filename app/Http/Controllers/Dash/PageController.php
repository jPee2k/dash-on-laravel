<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Http\Requests\PageValidator;
use Illuminate\Http\Request;

class PageController extends BasicController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Page $page, Request $request)
    {
        $search = $request->get('search');
        $limit = (int)$request->get('limit') ?: 20;
        $pages = $search ? $page->query()->where('name', 'like', "%{$search}%")->paginate($limit) : $page->query()->paginate($limit);
        $limits = $this->getLimits();

        return view('dashboard.page.index', compact('pages', 'limits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page = new Page();
        $status = [
            'draft' => 'Draft',
            'publish' => 'Publish'
        ];
        $submitName = 'Create';

        return view('dashboard.page.create', compact('page', 'status', 'submitName'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PageValidator $request)
    {
        $data = $request->validated();

        $page = new Page($data);
        $page->setSlug();
        $page->uploadImage($request->file('image'));
        $page->save();

        flash('The new Page was added successfully')->success();

        return redirect()->route('pages.edit', $page->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Page $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        $status = [
            'draft' => 'Draft',
            'publish' => 'Publish'
        ];
        $submitName = 'Edit';

        return view('dashboard.page.edit', compact('page', 'status', 'submitName'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Page $page
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PageValidator $request, Page $page)
    {
        $data = $request->validated();

        $page->fill($data);
        $page->setSlug();
        $page->uploadImage($request->file('image'));
        $page->save();

        flash('The Page was updated successfully')->success();

        return redirect()->route('pages.edit', $page->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Page $page
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Page $page)
    {
        if ($page) {
            $page->removeImage();
            $page->delete();
        }

        flash('The Page was removed successfully')->success();

        return redirect()->route('pages.index');
    }
}
