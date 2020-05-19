@if ($isPrimary)
<a class="line_projects line_vedomosti" style="background-image: url({{$work->image('cover')}});" href="{{ $work->getRelativeUrl() }}">
    	<span class="hovershadow">
            <span class="projects_logo"><img src="http://aprilstudio.ru/imgs/logos/natgeo.png" alt="{{$work->title}}"></span>
            <span class="projects_caption"><span>
                <h2>{{$work->description}}</h2>
            </span></span>
            <span class="clear"></span>
        </span>
</a>

@else


<a class="line_projects line_vedomosti" style="background-image: url({{$work->image('cover')}});" href="{{ $work->getRelativeUrl() }}">
    	<span class="hovershadow">
            <span class="projects_logo"><img src="http://aprilstudio.ru/imgs/logos/natgeo.png" alt="{{$work->title}}"></span>
            <span class="projects_caption"><span>
                <h2>{{$work->description}}</h2>
            </span></span>
            <span class="clear"></span>
        </span>
</a>

@endif
