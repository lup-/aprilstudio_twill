<?php


namespace App\Services\MediaLibrary;

use A17\Twill\Services\MediaLibrary\Local;
use Illuminate\Support\Facades\Storage;

class LocalWithCorrectPath extends Local
{
    public function getRawUrl($id) {
        $wrongPath = Storage::disk(config('twill.media_library.disk'))->url($id);
        $correctPath = str_replace('/'.config('twill.media_library.local_path').'/', '/'.config('twill.media_library.download_local_path').'/', $wrongPath);

        return $correctPath;
    }
}
