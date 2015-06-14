<?php
$baseDir = dirname(dirname(__FILE__));
return [
    'plugins' => [
        'Acl' => $baseDir . '/vendor/cakephp/acl/',
        'AnnotationControlList' => $baseDir . '/plugins/AnnotationControlList/',
        'Bake' => $baseDir . '/vendor/cakephp/bake/',
        'ContactManager' => $baseDir . '/plugins/ContactManager/',
        'DebugKit' => $baseDir . '/vendor/cakephp/debug_kit/',
        'Migrations' => $baseDir . '/vendor/cakephp/migrations/',
        'TinyAuth' => $baseDir . '/vendor/dereuromark/cakephp-tinyauth/'
    ]
];
