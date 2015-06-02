<?php namespace QuanDT\Slider\Repositories;

use Bosnadev\Repositories\Contracts\RepositoryInterface;
use Bosnadev\Repositories\Eloquent\Repository;

class SliderRepository extends Repository
{
    function uploadFile($file)
    {
        $image_origin = $file->getOriginalName();

        $des_path = base_path().'/public/quandt/slider/images';

        if (!is_dir($des_path)) {
            mkdir($des_path, 0777, true);
        }

        $file->move($des_path, $image_origin);

        return $image_origin;
    }
}