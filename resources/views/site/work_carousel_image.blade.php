@if ($isPrimary)
<div><a href="{{ $work->getRelativeUrl() }}">
        @include('site.image_with_scales', ['work' => $work, 'role' => 'cover'])
</a></div>

@else
<div><a href="{{ $work->getRelativeUrl() }}">
        @include('site.image_with_scales', ['work' => $work, 'role' => 'cover'])
</a></div>

@endif
