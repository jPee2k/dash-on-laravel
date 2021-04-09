<?php


namespace App\Http\Controllers\Dash;


use App\Http\Controllers\Controller;
use App\Services\BasicHelper;
use App\Services\ImageUploader;
use Illuminate\Support\Facades\View;

class BasicController extends Controller
{
    public $helper;
    public $imageUploader;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

        // init helper
        $this->helper = new BasicHelper();
        View::share('helper', $this->helper);

        // init image uploader
        $this->imageUploader = new ImageUploader();
        View::share('imageUploader', $this->imageUploader);
    }
}
