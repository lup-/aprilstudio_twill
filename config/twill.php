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
        ],
    ],
    'crops'        => [
        'cover' => [
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
