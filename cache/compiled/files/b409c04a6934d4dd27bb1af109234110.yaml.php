<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/grav-admin/user/config/plugins/webmention.yaml',
    'modified' => 1495258176,
    'data' => [
        'enabled' => true,
        'datadir' => 'webmention',
        'url_name_map' => [
            0 => [
                '/\\/\\/.jeremycherfas.net/' => 'Jeremy Cherfas\' website'
            ]
        ],
        'sender' => [
            'enabled' => true,
            'page_only' => true,
            'automatic' => false,
            'ignore_routes' => [
                0 => '/random'
            ],
            'file_data' => 'data_sent.yaml'
        ],
        'receiver' => [
            'enabled' => true,
            'expose_data' => true,
            'advertise_method' => 'link',
            'route' => '/mentions',
            'status_updates' => true,
            'ignore_paths' => [
                0 => '/random'
            ],
            'file_data' => 'data_received.yaml',
            'blacklist_silently' => true
        ],
        'vouch' => [
            'enabled' => true,
            'required' => false,
            'auto_approve' => 'valid'
        ]
    ]
];
