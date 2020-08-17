<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;
use App\Helpers\Image;
use Cartalyst\Tags\TaggableTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use \ImageService;

class Work extends Model implements Sortable
{
    use HasBlocks, HasTranslation, HasSlug, HasMedias, HasFiles, HasPosition, HasRevisions, TaggableTrait;

    protected $fillable = [
        'published',
        'title',
        'description',
        'position',
        'casestudy',
        'line_classes',
        'next_classes',
        'page_classes',
        'page_background'
    ];

    public $translatedAttributes = [
        'title',
        'description',
        'casestudy',
        'active',
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
                [ 'name' => 'default', 'ratio' => 0 ],
            ],
        ],
        'line_photo' => [
            'default' => [
                [ 'name' => 'default', 'ratio' => 0 ],
            ],
        ],
        'logo' => [
            'default' => [
                [ 'name' => 'default', 'ratio' => 0 ],
            ],
            'mx_1910' => [
                [
                    'name'      => 'mx_1910',
                    'ratio'     => 0,
                    'minValues' => [
                        'width'  => 1910,
                    ],
                ],
            ]

        ],
    ];

    public function getSlugLocale($slugText) {
        foreach ($this->slugs as $slug) {
            if ($slug->slug === $slugText) {
                return $slug->locale;
            }
        }

        return false;
    }

    public function scopeForSlugIgnoreLocale($query, $slug) {
        return $query->whereHas('slugs', function ($query) use ($slug) {
            $query->whereSlug($slug);
            $query->whereActive(true);
        })->with(['slugs']);
    }

    public function scopeFromBucket($query, $bucketKey) {
        return $query
            ->leftJoin('features', 'works.id', '=', 'features.featured_id')
            ->select('works.*', 'features.position')
            ->where('features.bucket_key', '=', $bucketKey)
            ->where('features.featured_type', '=', 'works')
            ->orderBy(DB::raw('ISNULL(features.position)'), 'ASC')
            ->orderBy('features.position', 'ASC');
    }

    public function scopeWithBucketPositions($query) {
        return $query
            ->leftJoin('features', 'works.id', '=', 'features.featured_id')
            ->select('works.*', 'features.position')
            ->where(function ($query) {
                $query->where('features.featured_type', '=', 'works')
                      ->orWhereNull('features.featured_type');
            })
            ->orderBy(DB::raw('ISNULL(features.position)'), 'ASC')
            ->orderBy('features.position', 'ASC');
    }

    public function getRelativeUrl() {
        $activeSlug = $this->getActiveSlug();
        return '/' . app()->getLocale() . '/works/' . $activeSlug->slug;
    }

    public function designers() {
        return $this->belongsToMany(Designer::class);
    }

    public function categories() {
        return $this->belongsToMany(Category::class);
    }

    public function areas() {
        return $this->belongsToMany(Area::class);
    }

    public function types() {
        return $this->belongsToMany(Type::class);
    }

    public function getNext() {
        $allWorks = Work::withBucketPositions()
            ->where('published', true)
            ->whereHas('slugs', function (Builder $query) {
                $query
                    ->where('locale', '=', app()->getLocale())
                    ->where('active', '=', 1);
            })
            ->get();
        $firstWork = $allWorks[0];

        $currentWorkHasPosition = $this->position !== NULL;

        $nextWork = false;
        foreach ($allWorks as $candidateWork) {

            $candidateWorkHasPosition = $candidateWork->position !== NULL;
            $bothWorksPositionedOnMain = $currentWorkHasPosition && $candidateWorkHasPosition;
            $noneWorksPositionedOnMain = !$bothWorksPositionedOnMain;
            $currentIsLastOnMainNextIsFirstUnpositioned = $currentWorkHasPosition && !$candidateWorkHasPosition;

            if ($bothWorksPositionedOnMain && $this->position < $candidateWork->position) {
                $nextWork = $candidateWork;
                break;
            }

            if ($currentIsLastOnMainNextIsFirstUnpositioned) {
                $nextWork = $candidateWork;
                break;
            }

            if ($noneWorksPositionedOnMain && $this->created_at < $candidateWork->created_at) {
                $nextWork = $candidateWork;
                break;
            }
        }

        return $nextWork
            ? $nextWork
            : $firstWork;
    }

    public function scaledImage($role, $width, $crop = 'default') {
        return Image::getScaledUrl($this, $role, $width, $crop);
    }
}
