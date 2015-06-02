<?php namespace QuanDT\Slider\eloquent;

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
        return 'QuanDT\Slider\models\Slider';
    }
}
