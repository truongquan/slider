<?php namespace QuanDT\Slider\Requests;

use App\Http\Requests\Request;

class SliderRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
				'name' => 'required',
				'slug' => 'required|alpha_dash|unique:quandt_slider',
				'sliderType' => 'required'
			];
	}

}
