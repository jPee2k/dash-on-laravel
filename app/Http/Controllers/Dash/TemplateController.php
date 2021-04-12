<?php

namespace App\Http\Controllers\Dash;

use App\Models\Dash\Template;
use App\Http\Requests\TemplateValidator;
use Illuminate\Http\Request;

class TemplateController extends BasicController
{
    /**
     * Display a listing of the resource.
     *
     * @param Template $template
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Template $template, Request $request)
    {
        $search = $request->get('s');
        $limit = (int)$request->get('limit') ?: 20;
        $templates = $search
            ? $template->search($search)->orderBy('updated_at', 'DESC')->paginate($limit)->withQueryString()
            : $template->orderBy('updated_at', 'DESC')->paginate($limit)->appends(['limit' => $limit]);
        $limits = $this->helper->getLimits();

        $request->flash();

        return view('dashboard.template.index', compact('templates', 'limits', 'limit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $template = new Template();
        $submitName = 'Create';

        return view('dashboard.template.create', compact('template', 'submitName'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TemplateValidator $request)
    {
        $data = $request->validated();
        $template = Template::create($data);

        if ($template) {
            flash('The new template was added successfully')->success();
            return redirect()->route('templates.edit', $template->id);
        }

        return redirect()->back()->withErrors(['error' => 'Something went wrong']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dash\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function edit(Template $template)
    {
        $submitName = 'Edit';

        return view('dashboard.template.edit', compact('template', 'submitName'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dash\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function update(TemplateValidator $request, Template $template)
    {
        $data = $request->validated();

        if ($template->update($data)) {
            flash('The template was updated successfully')->success();
            return redirect()->route('templates.edit', $template->id);
        }

        return redirect()->back()->withErrors(['error' => 'Something went wrong']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dash\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function destroy(Template $template)
    {
        if ($template) {
            $template->delete();

            flash('The Page was removed successfully')->success();
        }

        return redirect()->route('templates.index');
    }
}
