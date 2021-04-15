<?php

namespace App\Http\Controllers\Dash;

use App\Http\Requests\FieldValidator;
use App\Models\Dash\Field;

class FieldController extends BasicController
{
    /**
     * Store a newly created resource in storage.
     *
     * @param FieldValidator $request
     */
    public function store(FieldValidator $request)
    {
        $data = $request->validated();
        $isStore = Field::create($data);

        if ($isStore) {
            echo json_encode(['info' => 'success']);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param FieldValidator $request
     * @param Field $field
     */
    public function update(FieldValidator $request, Field $field)
    {
        $isUpdated = $field->update($request->validated());

        if ($isUpdated) {
            echo json_encode([
                'info' => 'success',
                'name' => $field->name,
                'prefix' => $field->prefix,
                'type' => $field->type,
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Field $field
     * @throws \Exception
     */
    public function destroy(Field $field)
    {
        if ($field->delete()) {
            echo json_encode(['info' => 'success']);
        }
    }
}
