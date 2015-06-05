<?php namespace QuanDT\Slider\Repositories;

use Bosnadev\Repositories\Contracts\RepositoryInterface;
use Bosnadev\Repositories\Eloquent\Repository;
use Image;

class SliderImage extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */

    function model()
    {
        return 'QuanDT\Slider\Models\SliderImage';
    }

    function saveModel($request, $id = null)
    {
        $data = $request->except('_token', 'img');

        if ($request->hasFile('img')) {
           $image = $this->uploadFile($request->file('img'));
           $data = array_merge($data, $image);
        }

        if ($id) {

            return $this->updateRich($data, $id);
        }
            
        return $this->create($data);
    }

    /**
     * @param  array  $data
     * @param  $id
     * @return mixed
     */
    public function updateRich(array $data, $id) {
        if (!($model = $this->model->find($id))) {
            return false;
        }

        $this->deleteFile($model->image_encrypt);

        return $model->fill($data)->save();
    }

    function uploadFile($file)
    {
        $original_name = $file->getClientOriginalName();
        $encrypt_name = str_random(40).'.'.$file->getClientOriginalExtension();
        $des_path = public_path(config('slider.image_path'));

        if (!is_dir($des_path)) {
            mkdir($des_path, 0777, true);
        }

        $file->move($des_path, $encrypt_name);
        $thumb_path = public_path(config('slider.thumb_path'));

        if (!is_dir($thumb_path)) {
            mkdir($thumb_path, 0777, true);    
        }

        Image::make($des_path.'/'.$encrypt_name)->resize(200, null, function ($constraint) {
            $constraint->aspectRatio();
        })->save($thumb_path.'/'.$encrypt_name);

        return ['image_original' => $original_name, 'image_encrypt' => $encrypt_name];
    }

    function deleteFile($file_name)
    {
        @unlink(public_path(config('slider.image_path').'/'.$file_name));
        @unlink(public_path(config('slider.thumb_path').'/'.$file_name));
    }

    function remove($id)
    {
        $model = $this->model->find($id);
        $this->deleteFile($model->image_encrypt);

        return $this->delete($id);
    }
}
