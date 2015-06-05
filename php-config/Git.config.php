<?php

Git::$repositories['slate'] = [
    'remote' => 'git@github.com:SlateFoundation/slate.git',
    'originBranch' => 'master',
    'workingBranch' => 'instances/' . Site::getConfig('primary_hostname'),
    'localOnly' => true,
    'trees' => [
        'dwoo-plugins',
        'event-handlers',
        'ext-library',
        'html-templates',
        'mail-handlers',
        'php-classes',
        'php-config' => [
            'exclude' => '#^/Git\\.config\\.php$#' // don't sync this file
        ],
        'php-migrations',
        'phpunit-tests',
        'sencha-workspace',
        'site-root' => [
            'exclude' => [
                '#^/css(/|$)#', // don't sync /css, this directory is generated by /sass/compile
                '#^/js/pages(/|$)#' // don't sync /js/pages, this directory is generated by /sencha-cmd/pages-build
            ]
        ]
    ]
];