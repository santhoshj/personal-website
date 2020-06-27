<?php

return [
    'production' => false,
    'baseUrl' => 'https://santhoshj.in',
    'site' => [
        'title' => 'Santhosh Kumar',
        'description' => 'Personal blog of Santhosh.',
        'image' => 'default-share.png',
    ],
    'owner' => [
        'name' => 'Santhosh Kumar',
        'twitter' => 'santhuj',
        'github' => 'santhoshj',
    ],
    'services' => [
        'cmsVersion' => '2.10.49',
        'analytics' => 'UA-30922753-2',
        'disqus' => 'artisanstatic',
        'formcarry' => 'Ccc_GAiIINJ_',
        'cloudinary' => [
            'cloudName' => 'santhoshj',
            'apiKey' => '597971196178175',
        ],
    ],
    'collections' => [
        'posts' => [
            'path' => 'posts/{filename}',
            'sort' => '-date',
            'extends' => '_layouts.post',
            'section' => 'postContent',
            'isPost' => true,
            'comments' => true,
            'tags' => [],
            'hasTag' => function ($page, $tag) {
                return collect($page->tags)->contains($tag);
            },
            'prettyDate' => function ($page, $format = 'M j, Y') {
                return date($format, $page->date);
            },
        ],
        'tags' => [
            'path' => 'tags/{filename}',
            'extends' => '_layouts.tag',
            'section' => '',
            'name' => function ($page) {
                return $page->getFilename();
            },
        ],
    ],
];
