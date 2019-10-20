<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Static Info Tables (ru)',
    'description' => '(ru) language pack for the Static Info Tables providing localized names for countries, 
                       currencies and so on.',
    'category' => 'misc',
    'version' => '6.7.3',
    'dependencies' => '',
    'state' => 'stable',
    'uploadfolder' => true,
    'createDirs' => '',
    'clearcacheonload' => true,
    'author' => 'Manuel Selbach',
    'author_email' => 'manuel_selbach@yahoo.de',
    'author_company' => '',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
            'static_info_tables' => '6.7.0-6.7.99',
            'php' => '7.0.0-0.0.0',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
