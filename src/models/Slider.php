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
    protected $fillable = ['name', 'slug', 'sliderType', 'autoPlay', 'navigation', 'slideSpeed', 'paginationSpeed', 'singleItem', 'items', 'itemsDesktop', 'itemsDesktopSmall', 'itemsTablet', 'itemsMobile', 'itemsCustom', 'lazyLoad', 'stopOnHover', 'autoHeight', 'goToFirstSpeed'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function sliderImages()
    {
        return $this->hasMany('QuanDT\Slider\Models\SliderImage');
    }

}
