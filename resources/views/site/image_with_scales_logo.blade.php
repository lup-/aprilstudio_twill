<picture class="{{isset($class) ? $class : ''}}">
    <source media="(min-width: 2201px)"                         srcset="{{\ImageHelper::getScaledUrl($work, $role, null, isset($crop) ? $crop : null)}}">
    <source media="(min-width: 0px)    and (max-width: 2200px)"  srcset="{{\ImageHelper::getScaledUrl($work, $role, 6000, isset($crop) ? $crop : null)}}">
    <img src="{{\ImageHelper::getScaledUrl($work, $role, null, isset($crop) ? $crop : null)}}" class="{{isset($class) ? $class : ''}}" style="{{$work->line_classes}}">
</picture>
