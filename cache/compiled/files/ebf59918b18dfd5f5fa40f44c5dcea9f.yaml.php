<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/grav-admin/user/plugins/email/blueprints.yaml',
    'modified' => 1495258177,
    'data' => [
        'name' => 'Email',
        'version' => '2.5.3',
        'description' => 'Enables the emailing system for Grav',
        'icon' => 'envelope',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'keywords' => 'plugin, email, sender',
        'homepage' => 'https://github.com/getgrav/grav-plugin-email',
        'bugs' => 'https://github.com/getgrav/grav-plugin-email/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.1.9'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'enabled' => [
                    'type' => 'hidden',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'mailer.engine' => [
                    'type' => 'select',
                    'label' => 'Mail Engine',
                    'size' => 'medium',
                    'options' => [
                        'none' => 'Disabled',
                        'smtp' => 'SMTP',
                        'sendmail' => 'Sendmail',
                        'mail' => 'PHP Mail'
                    ]
                ],
                'content_type' => [
                    'type' => 'select',
                    'label' => 'Content type',
                    'size' => 'medium',
                    'default' => 'text/html',
                    'options' => [
                        'text/plain' => 'Plain text',
                        'text/html' => 'HTML'
                    ]
                ],
                'from' => [
                    'type' => 'email',
                    'size' => 'medium',
                    'label' => 'Email from',
                    'placeholder' => 'Default email from address',
                    'validate' => [
                        'required' => true,
                        'type' => 'email'
                    ]
                ],
                'from_name' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'Email from name',
                    'placeholder' => 'Default email from name'
                ],
                'to' => [
                    'type' => 'email',
                    'size' => 'medium',
                    'label' => 'Email to',
                    'placeholder' => 'Default email to address',
                    'multiple' => true,
                    'validate' => [
                        'required' => true,
                        'type' => 'email'
                    ]
                ],
                'to_name' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'Email to name',
                    'placeholder' => 'Default email to name'
                ],
                'mailer.smtp.server' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'SMTP server',
                    'placeholder' => 'e.g. smtp.google.com'
                ],
                'mailer.smtp.port' => [
                    'type' => 'text',
                    'size' => 'small',
                    'label' => 'SMTP port',
                    'placeholder' => 'Defaults to 25 (plaintext) / 587 (encrypted)',
                    'validate' => [
                        'type' => 'number',
                        'min' => 1,
                        'max' => 65535
                    ]
                ],
                'mailer.smtp.encryption' => [
                    'type' => 'select',
                    'size' => 'medium',
                    'label' => 'SMTP encryption',
                    'options' => [
                        'none' => 'None',
                        'ssl' => 'SSL',
                        'tls' => 'TLS'
                    ]
                ],
                'mailer.smtp.user' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'SMTP login name'
                ],
                'mailer.smtp.password' => [
                    'type' => 'password',
                    'size' => 'medium',
                    'label' => 'SMTP password'
                ],
                'mailer.sendmail.bin' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'Path to sendmail',
                    'placeholder' => '/usr/sbin/sendmail'
                ],
                'debug' => [
                    'type' => 'toggle',
                    'label' => 'Debug',
                    'highlight' => 1,
                    'default' => 0,
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
