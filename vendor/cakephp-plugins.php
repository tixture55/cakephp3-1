<?php
$baseDir = dirname(dirname(__FILE__));
return [
    'plugins' => [
        'Acl' => $baseDir . '/vendor/cakephp/acl/',
        'Bake' => $baseDir . '/vendor/cakephp/bake/',
        'CakeIntl' => $baseDir . '/vendor/hraq/cake-intl/',
        'DebugKit' => $baseDir . '/vendor/cakephp/debug_kit/',
        'Migrations' => $baseDir . '/vendor/cakephp/migrations/',
        'TinyAuth' => $baseDir . '/vendor/dereuromark/cakephp-tinyauth/'
    ]
];
