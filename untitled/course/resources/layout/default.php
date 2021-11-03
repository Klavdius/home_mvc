<?php

return [
    'root' => [
        'type' => '\\Core\\Block\\Template',
        'template' => 'page/2columns.phtml',
        'children' => [
            'head' => [
                'type' => '\\Core\\Block\\Template',
                'template' => 'page/head.phtml',
            ],
            'content' => [
                'type' => '\\Core\\Block\\Template',
                'template' => 'page/content.phtml',
            ],
            'left' => [
                'type' => '\\Core\\Block\\Template',
                'template' => 'page/left.phtml',
            ],
            'header' => [
                'type' => '\\Core\\Block\\Template',
                'template' => 'page/header.phtml',
            ],
            'footer' => [
                'type' => '\\Core\\Block\\Template',
                'template' => 'page/footer.phtml',
            ],
        ]
    ]
];

?>
