<?php namespace QuanDT\Slider\repositories;

use Bosnadev\Repositories\Contracts\RepositoryInterface;
use Bosnadev\Repositories\Eloquent\Repository;

class Slider extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */

    function model()
    {
        return 'QuanDT\Slider\Models\Slider';
    }

    function saveModel($request, $id = null)
    {
        $data = $request->except('_token');

        if (trim($data['slug']) === '') {
            $data['slug'] = str_slug($data['name']);
        }

        if ($id) {

            return $this->updateRich($data, $id);
        }
            
        return $this->create($data);
    }
}
