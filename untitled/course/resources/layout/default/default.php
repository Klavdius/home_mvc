<?php

return [
    'root' => [
        'children' => [
            'content' => [
                'type' => '\\Core\\Block\\Template',
                'template' => 'default/default/content.phtml',
                'children' => [
                    'list1' => [
                        'type' => '\\App\\View\\Block\\Content\\List1',
                        'template' => 'default/default/content/list.phtml',
                        'children' => [
                            'list2' => [
                                'type' => '\\App\\View\\Block\\Content\\List2',
                                'template' => 'default/default/content/list.phtml',
                            ],
                        ]
                    ],

                ]
            ],
            'left' => [
                'children' => [
                    'list1' => [
                        'type' => '\\App\\View\\Block\\Content\\List1',
                        'template' => 'default/default/content/list.phtml',
                    ]
                ]
            ]
        ]
    ]
];