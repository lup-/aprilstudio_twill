<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;
use Cartalyst\Tags\TaggableTrait;

class Designer extends Model implements Sortable
{
    use HasTranslation, HasSlug, HasMedias, HasFiles, HasPosition;

    protected $fillable = [
        'published',
        'title',
        'description',
        'position',
    ];

    public $translatedAttributes = [
         'title',
         'description',
    //     'active',
    ];

    public $slugAttributes = [
         'title',
    ];

    public $checkboxes = [
        'published'
    ];

    public $mediasParams = [
        'photo' => [
            'default' => [
                [
                    'name'  => 'landscape',
                    'ratio' => 16 / 9,
                ],
                [
                    'name'  => 'portrait',
                    'ratio' => 3 / 4,
                ],
            ],
            'mobile'  => [
                [
                    'name'  => 'mobile',
                    'ratio' => 1,
                ],
            ],
        ],
    ];

    public function works() {
        return $this->belongsToMany('App\Models\Work');
    }

}
