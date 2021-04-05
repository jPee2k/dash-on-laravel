<?php


namespace App\Http\Controllers\Dash;


use App\Http\Controllers\Controller;

class BasicController extends Controller
{
    public function getLimits(): array
    {
        return [
            20,
            50,
            100
        ];
    }
}
