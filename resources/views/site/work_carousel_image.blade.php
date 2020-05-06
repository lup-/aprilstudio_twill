@if ($isPrimary)
<div><a href="{{ $work->getRelativeUrl() }}"><img src="{{$work->image('cover')}}" alt=""></a></div>

@else
<div><a href="{{ $work->getRelativeUrl() }}"><img src="{{$work->image('cover')}}" alt=""></a></div>

@endif