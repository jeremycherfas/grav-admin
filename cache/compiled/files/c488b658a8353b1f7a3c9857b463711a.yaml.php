<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/grav-admin/user/plugins/themer/blueprints/themer.yaml',
    'modified' => 1495258177,
    'data' => [
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'fields' => [
                        'advanced' => [
                            'fields' => [
                                'overrides' => [
                                    'fields' => [
                                        'header.theme' => [
                                            'type' => 'themeselect',
                                            'label' => 'PLUGINS.THEMER.THEME',
                                            'help' => 'PLUGINS.THEMER.THEME_HELP',
                                            'config-default@' => 'system.pages.theme',
                                            'toggleable' => true,
                                            'selectize' => [
                                                'create' => true
                                            ],
                                            'validate' => [
                                                'type' => 'string'
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
