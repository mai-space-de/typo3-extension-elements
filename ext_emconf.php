<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Elements',
    'description' => 'A collection of content elements.',
    'version' => '13.0.0',
    'state' => 'stable',
    'category' => 'templates',
    'author' => 'Joel Maximilian Mai',
    'author_email' => 'joel@maispace.de',
    'author_company' => 'Maispace',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.22-13.4.99',
            'visual_editor' => '1.0.0-1.99.99',
        ],
        'conflicts' => [
        ],
    ],
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'autoload' => [
        'psr-4' => [
            'Maispace\\MaiElements\\' => 'Classes',
        ],
    ],
];
