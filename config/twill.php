<?php

return [
    'enabled' => [
        'buckets' => true,
    ],
    'frontend' => [
        'views_path' => 'site',
    ],
    "block_editor" => [
        'block_single_layout' => 'layouts.block',
        'blocks'              => [
            'quote' => [
                'title'     => 'Quote',
                'icon'      => 'quote',
                'component' => 'a17-block-quote',
            ],
            'vimeo' => [
                'title'     => 'Vimeo Video',
                'icon'      => 'slideshow',
                'component' => 'a17-block-vimeo',
            ],
            'youtube' => [
                'title'     => 'Youtube Video',
                'icon'      => 'slideshow',
                'component' => 'a17-block-youtube',
            ],
            'full_width_image' => [
                'title' => 'Full-width Image',
                'icon' => 'image',
                'component' => 'a17-block-full_width_image',
            ],
            'fixed_image_grid' => [
                'title' => 'Fixed Image Grid',
                'icon' => 'image',
                'component' => 'a17-block-fixed_image_grid',
            ],
            'fluid_image_grid' => [
                'title' => 'Fluid Image Grid',
                'icon' => 'image',
                'component' => 'a17-block-fluid_image_grid',
            ],
        ],
        'repeaters' => [
            'fixed_image_item' => [
                'title' => 'Image for Fixed Grid',
                'trigger' => 'Add image',
                'component' => 'a17-block-fixed_image_item',
                'max' => 15,
            ],
            'fluid_image_item' => [
                'title' => 'Image for Fluid Grid',
                'trigger' => 'Add image',
                'component' => 'a17-block-fluid_image_item',
                'max' => 15,
            ],
        ],
        'crops' => [
            'fixed_image_item' => [
                'default' => [
                    [
                        'name'      => 'default',
                        'ratio'     => 0,
                        'minValues' => [
                            'width'  => 100,
                            'height' => 100,
                        ],
                    ],
                ],
            ],
            'fluid_image_item' => [
                'default' => [
                    [
                        'name'      => 'default',
                        'ratio'     => 0,
                        'minValues' => [
                            'width'  => 100,
                            'height' => 100,
                        ],
                    ],
                ],
            ],
            'full_width_image' => [
                'default' => [
                    [
                        'name'      => 'default',
                        'ratio'     => 0,
                        'minValues' => [
                            'width'  => 100,
                            'height' => 100,
                        ],
                    ],
                ],
                'mobile' => [
                    [
                        'name'      => 'mobile',
                        'ratio'     => 0,
                        'minValues' => [
                            'width'  => 100,
                            'height' => 100,
                        ],
                    ],
                ],
            ],
        ]
    ],
    'crops'        => [
        'original' => [
            'default' => [
                [
                    'name'      => 'default',
                    'ratio'     => 0,
                    'minValues' => [
                        'width'  => 100,
                        'height' => 100,
                    ],
                ],
            ],
            'mobile' => [
                [
                    'name'      => 'mobile',
                    'ratio'     => 0,
                    'minValues' => [
                        'width'  => 100,
                        'height' => 100,
                    ],
                ],
            ],
        ],
        'square' => [
            'default' => [
                [
                    'name'      => 'default',
                    'ratio'     => 1 / 1,
                    'minValues' => [
                        'width'  => 100,
                        'height' => 100,
                    ],
                ],
            ],
        ],

    ],
    'buckets' => [
        'homepage' => [
            'name' => 'Home',
            'buckets' => [
                'home_favourite_works' => [
                    'name' => 'Home favourite works',
                    'bucketables' => [
                        [
                            'module' => 'works',
                            'name' => 'Works',
                            'scopes' => ['published' => true],
                        ],
                    ],
                    'max_items' => 90,
                ],
                'home_other_works' => [
                    'name' => 'Home other works',
                    'bucketables' => [
                        [
                            'module' => 'works',
                            'name' => 'Works',
                            'scopes' => ['published' => true],
                        ],
                    ],
                    'max_items' => 100,
                ],
            ],
        ],
    ],
];
