<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/grav-admin/user/plugins/webmention/webmention.yaml',
    'modified' => 1495370987,
    'data' => [
        'enabled' => true,
        'datadir' => 'webmention',
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
            'advertise_method' => 'header',
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
