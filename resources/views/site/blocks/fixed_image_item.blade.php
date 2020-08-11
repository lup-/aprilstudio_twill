@if (isset($render))
    @include('site.image_with_scales', ['work' => $block, 'role' => 'fixed_image_item', 'class' => 'img-fluid'])
@endif
