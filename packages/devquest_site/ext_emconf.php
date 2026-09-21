<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Devquest Site',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.0-13.4.99',
            'fluid_styled_content' => '13.4.0-13.4.99',
            'rte_ckeditor' => '13.4.0-13.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Mbx\\DevquestSite\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'zebra white GmbH',
    'author_email' => 'it@zebra.de',
    'author_company' => 'zebra white GmbH',
    'version' => '1.0.0',
];
