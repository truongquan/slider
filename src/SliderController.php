<?php namespace QuanDT\Slider;

use App\Http\Controllers\Controller;
use QuanDT\Slider\repositories\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    private $slider;

    public function __construct(Slider $slider)
    {
        $this->slider = $slider;
    }

    public function index()
    {
        $result = $this->slider_image->all();

        return view('slider::backend.sliders.index')->withResult($result);
    }

    public function selectType()
    {
        return view('slider::backend.sliders.selectType');
    }

    public function form($id = null)
    {
        if ($id) {
            $slider = $this->slider->find($id);

            return view('slider::backend.sliders.edit')->withSlider($slider);
        }

        if (!Request::has('sliderType')) {

            return redirect('slider/select-type');
        }

        return view('slider::backend.sliders.add')->withSliderType(Request::input('sliderType'));
    }

    public function update(SliderImageRequest $request, $id = null)
    {
        if ($this->slider_image->saveModel($request, $id)) {

            return redirect('slider-content');
        }

        return 'update failed!';
    }
}