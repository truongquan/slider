<?php namespace QuanDT\Slider\models;

use Illuminate\Database\Eloquent\Model;

class SliderImage extends Model {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'quandt_slider_images';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['slider_id', 'image_origin', 'image_encrypt', 'caption'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

}
