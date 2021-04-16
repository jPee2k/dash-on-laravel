<?php

namespace App\Http\Controllers\Dash;

use App\Models\Dash\Template;
use Illuminate\Http\Request;

class CustomFieldController extends BasicController
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * @param $templateId
     * @return string
     */
    public function getCustomFields($templateId): string
    {
        $template = Template::find($templateId);

        if ($template) {
            $fields = $template->fields()->get()->all();

            return $template->buildCFHTML($fields);
        }

        return redirect()->back();
    }
}
