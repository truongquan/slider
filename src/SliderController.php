<?php namespace QuanDT\Slider;

use App\Http\Controllers\Controller;
use QuanDT\Slider\repositories\Slider;
use Illuminate\Http\Request;
use QuanDT\Slider\Requests\SliderRequest;
use QuanDT\Slider\Criteria\Slider\WithSliderImage;

class SliderController extends Controller
{
    private $slider;

    public function __construct(Slider $slider)
    {
        $this->slider = $slider;
    }

    public function index()
    {
        $result = $this->slider->all();

        return view('slider::backend.sliders.index')->withResult($result);
    }

    public function getSelectType()
    {
        return view('slider::backend.sliders.selectType');
    }

    public function form(Request $request, $id = null)
    {
        if ($id) {
            $slider = $this->slider->find($id);

            return view('slider::backend.sliders.edit')->withSlider($slider);
        }

        if (!$request->has('sliderType')) {

            return redirect('slider/select-type');
        }

        return view('slider::backend.sliders.add')->with('sliderType', $request->input('sliderType'));
    }

    public function update(SliderRequest $request, $id = null)
    {
        if ($this->slider->saveModel($request, $id)) {

            return redirect('slider');
        }

        return 'Update failed';
    }

    public function display($id)
    {
        $this->slider->pushCriteria(new WithSliderImage());
        $slider = $this->slider->find($id);

        return view('slider::frontend.'.$slider->sliderType)->withSlider($slider);
    }

    public function delete($id)
    {
        $this->slider->delete($id);

        return redirect('slider');
    }
}
