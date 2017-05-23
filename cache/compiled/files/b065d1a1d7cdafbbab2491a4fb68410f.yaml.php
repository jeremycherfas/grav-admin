<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/grav-admin/user/config/plugins/twigfeeds.yaml',
    'modified' => 1495258176,
    'data' => [
        'enabled' => true,
        'cache' => true,
        'static_cache' => true,
        'debug' => true,
        'cache_time' => 900,
        'pass_headers' => false,
        'twig_feeds' => [
            0 => [
                'source' => 'https://stream.jeremycherfas.net/content/all?_t=rss',
                'name' => 'Stream',
                'start' => 0,
                'end' => 10
            ]
        ]
    ]
];
