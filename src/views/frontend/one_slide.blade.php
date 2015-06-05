@extends(config('slider.layout_frontend'))

@section(config('slider.section_frontend'))

<style type="text/css">
    #owl-quandt .item img{
        display: block;
        width: 100%;
        height: auto;
    }
</style>
<div id="owl-quandt" class="owl-carousel">

@foreach ($slider->sliderImages as $image)
  <div class="item"><img src="{!! url(config('slider.image_path').'/'.$image->image_encrypt) !!}" alt="{!! $image->caption !!}"></div>
@endforeach

</div>
<script>
$(document).ready(function() {

  $("#owl-quandt").owlCarousel({

      navigation : {{ $slider->navigation }}, // Show next and prev buttons
      slideSpeed : {{ $slider->slideSpeed }},
      paginationSpeed : {{ $slider->paginationSpeed }},
      singleItem: {{ $slider->singleItem }}

      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false

  });

});
</script>

@stop
