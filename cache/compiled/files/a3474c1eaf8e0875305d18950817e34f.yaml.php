<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/grav-admin/user/plugins/pagination/blueprints.yaml',
    'modified' => 1495258177,
    'data' => [
        'name' => 'Pagination',
        'version' => '1.3.2',
        'description' => '**Pagination** is a very useful plugin to help navigate a large collection of pages, such as for a **blog**.',
        'icon' => 'list-ol',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-pagination',
        'keywords' => 'pagination, plugin, pages, navigation',
        'bugs' => 'https://github.com/getgrav/grav-plugin-pagination/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'delta' => [
                    'type' => 'text',
                    'size' => 'x-small',
                    'label' => 'Delta',
                    'default' => 0,
                    'help' => 'How many pages to show left and right of the current page',
                    'validate' => [
                        'type' => 'number',
                        'min' => 0
                    ]
                ],
                'built_in_css' => [
                    'type' => 'toggle',
                    'label' => 'Use built in CSS',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
