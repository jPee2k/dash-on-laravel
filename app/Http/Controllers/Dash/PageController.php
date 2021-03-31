<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Meta;
use App\Http\Requests\PageValidator;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::paginate(15);

        return view('dashboard.page.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page = new Page();
        $meta = new Meta();
        $status = [
            'draft' => 'Draft',
            'publish' => 'Publish'
        ];

        return view('dashboard.page.create', compact('page', 'status', 'meta'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PageValidator $request)
    {
        $data = $request->validated();

        $page = Page::create($data);
        $meta = new Meta();
        $meta->page_id = $page->id;
        $meta->fill($data);
        $meta->uploadImage($request->file('image'));
        $meta->save();

        return redirect()->route('pages.index')
            ->with('success', 'The new Page was added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        $meta = $page->meta;

        $status = [
            'draft' => 'Draft',
            'publish' => 'Publish'
        ];

        return view('dashboard.page.edit', compact('page', 'status', 'meta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(PageValidator $request, Page $page)
    {
        $data = $request->validated();
        $meta = $page->meta;

        $page->update($data);
        $meta->fill($data);
        $meta->uploadImage($request->file('image'));
        $meta->save();

        return redirect()->route('pages.index')
            ->with('success', 'The Page was updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        if ($page) {
            $page->meta->removeImage();
            $page->delete();
        }

        return redirect()->route('pages.index')
            ->with('success', 'The Page was removed successfully');
    }
}
