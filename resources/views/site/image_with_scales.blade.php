<picture class="{{isset($class) ? $class : ''}}">
    <source media="(min-width: 2201px)"                         srcset="{{$work->scaledImage($role, null, isset($crop) ? $crop : null)}}">
    <source media="(min-width: 1801px) and (max-width: 2200px)" srcset="{{$work->scaledImage($role, 1910, isset($crop) ? $crop : null)}}">
    <source media="(min-width: 1251px) and (max-width: 1800px)" srcset="{{$work->scaledImage($role, 1500, isset($crop) ? $crop : null)}}">
    <source media="(min-width: 801px)  and (max-width: 1250px)" srcset="{{$work->scaledImage($role,  910, isset($crop) ? $crop : null)}}">
    <source media="(min-width: 501px)  and (max-width: 800px)"  srcset="{{$work->scaledImage($role,  700, isset($crop) ? $crop : null)}}">
    <source media="(min-width: 0px)    and (max-width: 500px)"  srcset="{{$work->scaledImage($role,  440, isset($crop) ? $crop : null)}}">
    <img src="{{$work->scaledImage($role, null, isset($crop) ? $crop : null)}}">
</picture>
