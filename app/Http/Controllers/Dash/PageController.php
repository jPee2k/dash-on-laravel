<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use Illuminate\Validation\Rule;
Use App\Http\Requests\PageValidator;

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
        $status = [
            'draft' => 'Draft',
            'publish' => 'Publish'
        ];

        return view('dashboard.page.create', compact('page', 'status'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => [
                'required',
                'max:255',
                'min:3',
                'unique:pages'
            ],
            'status' => [
                Rule::in(['publish', 'draft']),
                'required'
            ],
        ]);

        $page = Page::create($data);

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
        dd($request);
        $data = $request->validate();
        $page->update($data);

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
            $page->delete();
        }

        return redirect()->route('pages.index')
            ->with('success', 'The Page was removed successfully');
    }
}
