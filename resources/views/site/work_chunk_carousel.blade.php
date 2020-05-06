@include('site.work_carousel_image', ['work' => $chunk[0], 'isEven' => $loop->even, 'isPrimary' => true])
        
@includeWhen(isset($chunk[1]), 'site.work_carousel_image', ['work' => $chunk[1] ?? [], 'isEven' => $loop->even, 'isPrimary' => false, 'alwaysShowTitle' => true])
                
@includeWhen(isset($chunk[2]), 'site.work_carousel_image', ['work' => $chunk[2] ?? [], 'isEven' => $loop->even, 'isPrimary' => false, 'alwaysShowTitle' => true])
                
@includeWhen(isset($chunk[3]), 'site.work_carousel_image', ['work' => $chunk[3] ?? [], 'isEven' => $loop->even, 'isPrimary' => false, 'alwaysShowTitle' => false])
                
@includeWhen(isset($chunk[4]), 'site.work_carousel_image', ['work' => $chunk[4] ?? [], 'isEven' => $loop->even, 'isPrimary' => false, 'alwaysShowTitle' => false])