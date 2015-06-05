<?php namespace QuanDT\Slider\Requests;

use App\Http\Requests\Request;

class SliderImageRequest extends Request {

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
		if (Request::has('_edit')) {
			$rules = ['caption' => 'required'];
		} else {
			$rules = [
				'img' => 'required',
				'caption' => 'required',
			];
		}
		
		return $rules;
	}

}
