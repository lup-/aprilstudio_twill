<a class="line_projects {{$work->line_classes}}" style="background-image: url({{$work->image('line_photo')}});" href="{{ $work->getRelativeUrl() }}">
    <span class="hovershadow">
        <span class="projects_logo"><img src="{{$work->image('logo')}}" alt="{{$work->title}}"></span>
        <span class="projects_caption"><span>
            <h2>{{$work->description}}</h2>
        </span></span>
        <span class="clear"></span>
    </span>
</a>
