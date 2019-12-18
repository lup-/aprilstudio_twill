<section class="container-fluid full-image-grid">
    <div class="row flex-wrap">
        @foreach ($block->children as $child)
            <div class="col-sm-6 col-lg col-grid mb-4">
                @include('blocks/fluid_image_item', ['block' => $child])
            </div>
        @endforeach
    </div>
</section>
