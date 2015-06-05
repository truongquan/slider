<?php namespace QuanDT\Slider\Criteria\SliderImage;

use Bosnadev\Repositories\Criteria\Criteria;
use Bosnadev\Repositories\Contracts\RepositoryInterface as Repository;

class BySliderId extends Criteria {

    protected $slider_id;

    public function __construct($slider_id)
    {
        $this->slider_id = $slider_id;
    }

    /**
     * @param $model
     * @param RepositoryInterface $repository
     * @return mixed
     */
    public function apply($model, Repository $repository)
    {
        $model = $model->where('slider_id', $this->slider_id);

        return $model;
    }
}