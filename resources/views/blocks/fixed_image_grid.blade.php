<section class="container-fluid fixed-image-grid">
    <div class="row flex-wrap">
        @foreach ($block->children as $child)
        <div class="col-sm-4 col-grid mb-4 d-flex align-items-center justify-content-center">
            @include('blocks/fixed_image_item', ['block' => $child])
        </div>
        @endforeach
    </div>
</section>
