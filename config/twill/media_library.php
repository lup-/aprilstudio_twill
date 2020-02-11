<?php

return [
    'disk'                        => 'twill_media_library',
    'endpoint_type'               => 'local',
    'local_path'                  => 'uploads',
    'download_local_path'         => 'app/public/uploads',
    'image_service'               => \App\Services\MediaLibrary\LocalWithCorrectPath::class,
    'prefix_uuid_with_local_path' => true,
];
