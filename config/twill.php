<?php

return [
    "block_editor" => [
        'block_single_layout' => 'layouts.block',
        'blocks'              => [
            'quote' => [
                'title'     => 'Quote',
                'icon'      => 'quote',
                'component' => 'a17-block-quote',
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
];
