<?php


namespace App\Http\Controllers\Dash;


use App\Http\Controllers\Controller;

class BasicController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getLimits(): array
    {
        return [
            20,
            50,
            100
        ];
    }
}
