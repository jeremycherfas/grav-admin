<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/grav-admin/user/localhost/config/plugins/email.yaml',
    'modified' => 1495258176,
    'data' => [
        'enabled' => true,
        'from' => 'jeremy@jeremycherfas.net',
        'from_name' => 'The website',
        'to' => 'jcherfas@mac.com',
        'mailer' => [
            'engine' => 'mail',
            'smtp' => [
                'server' => 'localhost',
                'port' => 25,
                'encryption' => 'none'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ],
        'content_type' => 'text/html'
    ]
];
