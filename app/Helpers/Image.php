<?php


namespace App\Helpers;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Services\MediaLibrary\ImageService;

class Image
{
    public static function getScaledUrl($model, $role, $width, $crop = 'default') {
        $usingMediasTrait = in_array(HasMedias::class, class_uses($model));
        if (!$usingMediasTrait) {
            return ImageService::getTransparentFallbackUrl();
        }

        if (empty($crop)) {
            $crop = 'default';
        }

        $image = $model->imageObject($role, $crop);

        if ($image) {
            $extension = mb_substr($image->uuid, -3);

            if (empty($width)) {
                return $model->image($role, $crop, ['fm' => $extension]);
            }

            return ImageService::getUrl($image->uuid, ['fm' => $extension, 'w' => $width]);
        }

        return ImageService::getTransparentFallbackUrl();
    }
}
