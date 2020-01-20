<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;
use Cartalyst\Tags\TaggableTrait;
use \ImageService;

class Work extends Model implements Sortable
{
    use HasBlocks, HasTranslation, HasSlug, HasMedias, HasFiles, HasPosition, TaggableTrait;

    protected $fillable = [
        'published',
        'title',
        'description',
        'position',
        'casestudy'
    ];

    public $translatedAttributes = [
         'title',
         'description',
         'casestudy'
     ];

    public $slugAttributes = [
         'title',
    ];

    public $checkboxes = [
        'published'
    ];

    public $mediasParams = [
        'cover' => [
            'default' => [
                [
                    'name' => 'landscape',
                    'ratio' => 16 / 9,
                ],
                [
                    'name' => 'portrait',
                    'ratio' => 3 / 4,
                ],
            ],
            'mobile' => [
                [
                    'name' => 'mobile',
                    'ratio' => 1,
                ],
            ],
        ],
    ];

    public function getRelativeUrl() {
        $activeSlug = $this->getActiveSlug();
        return '/works/' . $activeSlug->slug;
    }

    public function rawImage($role, $crop = "default", $has_fallback = false, $media = null) {
        if (!$media) {
            $media = $this->findMedia($role, $crop);
        }

        if ($media) {
            return ImageService::getRawUrl($media->uuid);
        }

        if ($has_fallback) {
            return null;
        }

        return ImageService::getTransparentFallbackUrl();
    }

    public function designers() {
        return $this->belongsToMany(\App\Models\Designer::class);
    }

    public function categories() {
        return $this->belongsToMany(\App\Models\Category::class);
    }

    public function areas() {
        return $this->belongsToMany(\App\Models\Area::class);
    }

    public function types() {
        return $this->belongsToMany(\App\Models\Type::class);
    }
}
