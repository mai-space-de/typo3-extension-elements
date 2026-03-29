<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Mai Elements',
    'description' => 'A collection of custom content elements extending the default TYPO3 content element set. Owns the CKEditor rich text configuration and the TYPO3 form framework integration for the project. All element templates reference `mai_theme` components.',
    'category' => 'module',
    'author' => 'Maispace',
    'author_email' => '',
    'state' => 'stable',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.0-14.99.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
