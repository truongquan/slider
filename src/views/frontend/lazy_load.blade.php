@extends(config('slider.layout_frontend'))

@section(config('slider.section_frontend'))

<style type="text/css">
    #owl-quandt .item{
      margin: 3px;
    }
    #owl-quandt .item img{
      display: block;
      width: 100%;
      height: auto;
    }
</style>
<div id="owl-quandt" class="owl-carousel">

@foreach ($slider->sliderImages as $image)
  <div class="item"><img class="lazyOwl" data-src="{!! url(config('slider.image_path').'/'.$image->image_encrypt) !!}" alt="{!! $image->caption !!}"></div>
@endforeach

</div>
<script>
$(document).ready(function() {

  $("#owl-quandt").owlCarousel({

    items : {{ $slider->items }},
    lazyLoad : {{ $slider->lazyLoad }},
    navigation : {{ $slider->navigation }}
  });

});
</script>

@stop
