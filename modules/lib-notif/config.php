<?php

return [
    '__name' => 'lib-notif',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/lib-notif.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/lib-notif' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'LibNotif\\Iface' => [
                'type' => 'file',
                'base' => 'modules/lib-notif/interface'
            ],
            'LibNotif\\Library' => [
                'type' => 'file',
                'base' => 'modules/lib-notif/library'
            ]
        ],
        'files' => []
    ]
];