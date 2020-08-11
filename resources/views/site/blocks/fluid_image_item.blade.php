<!-- <div class="img-bg-filler d-flex align-items-center justify-content-center">
    <img src="{{$block->image('fluid_image_item')}}" class="img-fluid">
</div>
-->


@if (isset($render))
@include('site.image_with_scales', ['work' => $block, 'role' => 'fluid_image_item', 'class' => 'img-fluid'])
@endif
