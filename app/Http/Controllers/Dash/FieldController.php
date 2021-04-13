<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use App\Http\Requests\FieldValidator;
use App\Models\Dash\Field;
use Illuminate\Http\Request;

class FieldController extends BasicController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FieldValidator $request)
    {
        $data = $request->validated();
        $field = Field::create($data);

        if ($field) {
            echo json_encode(['info' => 'success']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dash\Field  $field
     * @return \Illuminate\Http\Response
     */
    public function show(Field $field)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dash\Field  $field
     * @return \Illuminate\Http\Response
     */
    public function edit(Field $field)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dash\Field  $field
     * @return \Illuminate\Http\Response
     */
    public function update(FieldValidator $request, Field $field)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dash\Field  $field
     * @return \Illuminate\Http\Response
     */
    public function destroy(Field $field)
    {
        //
    }
}
