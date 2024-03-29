<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/grav-admin/user/plugins/webmention-bak/blueprints.yaml',
    'modified' => 1495361254,
    'data' => [
        'name' => 'Webmention',
        'version' => '1.0.0',
        'description' => 'Implementation of the Webmention protocol (https://www.w3.org/TR/webmention/) with the Vouch extension',
        'icon' => 'commenting-o',
        'author' => [
            'name' => 'Aaron Dalton',
            'email' => 'aaron@daltons.ca'
        ],
        'homepage' => 'https://github.com/Perlkonig/grav-plugin-webmention',
        'keywords' => 'grav, plugin, pingback, webmention',
        'bugs' => 'https://github.com/Perlkonig/grav-plugin-webmention/issues',
        'readme' => 'https://github.com/Perlkonig/grav-plugin-webmention/blob/master/README.md',
        'docs' => 'https://github.com/Perlkonig/grav-plugin-webmention/blob/master/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
