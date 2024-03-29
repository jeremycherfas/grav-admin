<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/grav-admin/user/plugins/aboutme/aboutme.yaml',
    'modified' => 1495258176,
    'data' => [
        'enabled' => true,
        'built_in_css' => true,
        'name' => 'Jeremy Cherfas',
        'description' => 'I work as a freelance communicator. In essence, I see myself as a translator. I speak Science, and I speak English, and I work hard to make the two understand one another. Mostly, I like to help people tell their stories. I\'m a biologist by training and by inclination, and my main joy is applying that to food and the agriculture and industries that supply it. I also have side interests in economics and many other things.',
        'picture_src' => [
            'user/plugins/aboutme/assets/avatars/zoot.jpg' => [
                'name' => 'zoot.jpg',
                'type' => 'image/jpeg',
                'size' => 8412,
                'path' => 'user/plugins/aboutme/assets/avatars/zoot.jpg'
            ]
        ],
        'gravatar' => [
            'enabled' => false,
            'email' => 'example@test.com',
            'size' => 100
        ],
        'social_pages' => [
            'enabled' => true,
            'use_font_awesome' => false,
            'pages' => [
                'facebook' => [
                    'icon' => 'facebook-official',
                    'title' => 'Facebook',
                    'position' => 1
                ],
                'twitter' => [
                    'icon' => 'twitter',
                    'title' => 'Twitter',
                    'position' => 2,
                    'url' => 'https://twitter.com/EatPodcast'
                ],
                'google_plus' => [
                    'icon' => 'google-plus-square',
                    'title' => 'Google+',
                    'position' => 3
                ],
                'github' => [
                    'icon' => 'github',
                    'title' => 'GitHub',
                    'position' => 4,
                    'url' => 'https://github.com/jeremycherfas'
                ],
                'linkedin' => [
                    'icon' => 'linkedin-square',
                    'title' => 'LinkedIn',
                    'position' => 5
                ],
                'instagram' => [
                    'icon' => 'instagram',
                    'title' => 'Instagram',
                    'position' => 6,
                    'url' => 'https://www.instagram.com/eatthispodcast/'
                ],
                'pnut' => [
                    'icon' => 'share-square-o',
                    'title' => 'pnut',
                    'position' => 7,
                    'url' => 'https://pnut.io/@jeremycherfas'
                ]
            ]
        ]
    ]
];
