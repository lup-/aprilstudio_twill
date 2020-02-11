@if ($isPrimary)
<a class="main-image-block col-sm-6 d-flex flex-column cell-link mb-sm-0 mb-4 {{$isEven ? 'order-last' : ''}}" href="{{ $work->getRelativeUrl() }}">
    <div class="img-cell flex-fill img-bg d-flex align-items-center justify-content-center first-img">
        <img src="{{$work->image('cover')}}" class="img-fluid">
    </div>
    <h4 class="mt-2 d-inline d-sm-none">
        {{$work->title}}
    </h4>
</a>
@else
<a class="col-sm-6 cell-link mb-sm-2 mb-4" href="{{ $work->getRelativeUrl() }}">
    <div class="img-cell img-bg d-flex align-items-center justify-content-center secondary-img">
        <img src="{{$work->image('cover')}}" class="img-fluid">
    </div>
    <h4 class="mt-2 flex-fill {{$alwaysShowTitle ? '' : 'd-sm-none'}}">
        {{$work->title}}
    </h4>
</a>
@endif
