@if ($isPrimary)

<li class="news_item grid-item grid-itemPrimaryWidth"> <a href="{{ $work->getRelativeUrl() }}">
    <img src="{{$work->image('cover')}}" alt=""><h3>{{$work->title}}</h3></a>
</li>

@else

<li class="news_item grid-item"><a href="{{ $work->getRelativeUrl() }}">
    <img src="{{$work->image('cover')}}" alt="">
    <h3>{{$work->title}}</h3></a>
</li> 
@endif
