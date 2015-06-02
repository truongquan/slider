<?php namespace QuanDT\Slider;

use App\Http\Controllers\Controller;

class SliderImagesController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        return view('slider::index');
    }

    public function form($id = null)
    {
        
    }
}