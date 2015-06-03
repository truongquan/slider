<?php namespace QuanDT\Slider\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'quandt_slider';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'navigation', 'slideSpeed', 'paginationSpeed', 'singleItem'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

}
