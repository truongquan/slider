<?php namespace QuanDT\Slider;

use App\Http\Controllers\Controller;
use QuanDT\Slider\repositories\SliderImage;
use QuanDT\Slider\repositories\Slider;
//use QuanDT\Slider


class SliderImagesController extends Controller
{

    private $slider_image;
    private $slider;

    public function __construct(SliderImage $slider_image, Slider $slider)
    {
        $this->slider_image = $slider_image;
        $this->slider = $slider;
    }

    public function index()
    {
        return view('slider::index');
    }

    public function form($id = null)
    {
        $sliders = $this->slider->lists('name', 'id');

        if ($id) {
            $slides = $this->slider_image->find($id);

            return view('slider::edit', compact('sliders', 'slides'));
        }

        return view('slider::add', compact('sliders'));
    }

    public function update($id = null)
    {

    }
}