<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Free slider aspect ratio',
    'description' => 'Add free aspect ratio to ws_slider',
    'category' => 'fe',
    'author' => 'Thomas Luzat',
    'author_email' => 'thomas@luzat.com',
    'state' => 'stable',
    'uploadfolder' => false,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'version' => '1.1.0',
    'constraints' => [
        'depends' => [
            'php' => '8.0.0-8.2.99',
            'typo3' => '11.5.0-12.99.99',
            'ws_slider' => '0.9.0-0.9.99',
        ],
    ],
  ];
