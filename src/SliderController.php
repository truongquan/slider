<?php namespace QuanDT\Slider;

use App\Http\Controllers\Controller;
use QuanDT\Slider\eloquent\Slider;

class SliderController extends Controller
{
    private $slider;

    public function __construct(Slider $slider)
    {
        $this->slider = $slider;
    }

    public function index()
    {
        return \Response::json($this->slider->all());
        //return view('slider::index');
    }

    public function form($id = null)
    {
        
    }
}