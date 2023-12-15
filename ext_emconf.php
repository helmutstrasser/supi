<?php

declare(strict_types=1);

$EM_CONF[$_EXTKEY] = [
    'title'            => 'Super User Privacy Interface',
    'description'      => 'Cookie Consent popout, easy, yet powerful',
    'state'            => 'stable',
    'category'         => 'misc',
    'clearCacheOnLoad' => 0,
    'constraints'      => [
        'depends' => [
            'typo3' => '11.5.1-11.9.99',
        ],
        'conflicts' => [],
        'suggests'  => [],
    ],
];
