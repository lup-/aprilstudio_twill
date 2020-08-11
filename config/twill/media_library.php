<?php

use App\Services\MediaLibrary\GlideProxyExclugingGifs;

return [
    'disk'                        => 'twill_media_library',
    'endpoint_type'               => 'local',
    'local_path'                  => 'uploads',
    'download_local_path'         => 'app/public/uploads',
    'image_service'               => GlideProxyExclugingGifs::class,
    'prefix_uuid_with_local_path' => true,
    'cascade_delete'              => true,
];
