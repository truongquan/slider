<?php namespace QuanDT\Slider\Repositories;

use QuanDT\Slider\Repositories\SliderRepository as Repository;

class SliderImage extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */

    function model()
    {
        return 'QuanDT\Slider\models\SliderImage';
    }

    function saveModel($request, $id = null)
    {
        $data = $request->except('_token', 'img');

        if ($request->hasFile('img')) {
           $data['image_origin'] = $this->uploadFile($request->file('img'));
        }

        if ($id) {

            return $this->updateRich($data, $id);
        }
            
        return $this->create($data);
    }
}
