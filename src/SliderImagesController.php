<?php namespace QuanDT\Slider;

use App\Http\Controllers\Controller;
use QuanDT\Slider\repositories\SliderImage;
use QuanDT\Slider\repositories\Slider;
use QuanDT\Slider\Requests\SliderImageRequest;
use QuanDT\Slider\Criteria\SliderImage\BySliderId;

class SliderImagesController extends Controller
{

    private $slider_image;
    private $slider;

    public function __construct(SliderImage $slider_image, Slider $slider)
    {
        $this->slider_image = $slider_image;
        $this->slider = $slider;
    }

    public function index($slider_id = null)
    {
        if ($slider_id) {
            $this->slider_image->pushCriteria(new BySliderId($slider_id));
        }
        
        $result = $this->slider_image->all();

        return view('slider::backend.sliderImages.index', compact('result', 'slider_id'));
    }

    public function form($id = null)
    {
        $sliders = $this->slider->lists('name', 'id');

        if ($id) {
            $slide = $this->slider_image->find($id);

            return view('slider::backend.sliderImages.edit', compact('sliders', 'slide'));
        }

        return view('slider::backend.sliderImages.add', compact('sliders'));
    }

    public function update(SliderImageRequest $request, $id = null)
    {
        if ($this->slider_image->saveModel($request, $id)) {

            return redirect('slider/'.$request->slider_id.'/content');
        }

        return 'update failed!';
    }

    public function delete($id)
    {
        $this->slider_image->remove($id);

        return redirect('slider-content');
    }
}
