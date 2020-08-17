<picture class="{{isset($class) ? $class : ''}}">
    <source media="(min-width: 2201px)"                         srcset="{{\ImageHelper::getScaledUrl($work, $role, null, isset($crop) ? $crop : null)}}">
    <source media="(min-width: 1801px) and (max-width: 2200px)" srcset="{{\ImageHelper::getScaledUrl($work, $role, 1910, isset($crop) ? $crop : null)}}">
    <source media="(min-width: 1251px) and (max-width: 1800px)" srcset="{{\ImageHelper::getScaledUrl($work, $role, 1500, isset($crop) ? $crop : null)}}">
    <source media="(min-width: 801px)  and (max-width: 1250px)" srcset="{{\ImageHelper::getScaledUrl($work, $role,  910, isset($crop) ? $crop : null)}}">
    <source media="(min-width: 501px)  and (max-width: 800px)"  srcset="{{\ImageHelper::getScaledUrl($work, $role,  700, isset($crop) ? $crop : null)}}">
    <source media="(min-width: 0px)    and (max-width: 500px)"  srcset="{{\ImageHelper::getScaledUrl($work, $role,  440, isset($crop) ? $crop : null)}}">
    <img src="{{\ImageHelper::getScaledUrl($work, $role, null, isset($crop) ? $crop : null)}}">
</picture>
