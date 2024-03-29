<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/grav-admin/user/plugins/aboutme/blueprints.yaml',
    'modified' => 1495258176,
    'data' => [
        'name' => 'AboutMe',
        'version' => '1.1.4',
        'description' => 'Simple plugin to show some information about yourself, with a nice picture, your name, your title/job and a description.<br/>You can also add links to your social network pages (Twitter, Facebook, GitHub, Google Plus, LinkedIn, Instagram).',
        'icon' => 'user',
        'author' => [
            'name' => 'Sébastien Viallemonteil',
            'email' => 'sviallemonteil@gmail.com',
            'url' => 'https://scratchmydev.com'
        ],
        'homepage' => 'https://github.com/birssan/grav-plugin-about-me',
        'keywords' => 'plugin, about, avatar, description, job',
        'bugs' => 'https://github.com/birssan/grav-plugin-about-me/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'built_in_css' => [
                    'type' => 'toggle',
                    'label' => 'Use Built in CSS',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'name' => [
                    'type' => 'text',
                    'size' => 'small',
                    'label' => 'Name',
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'title' => [
                    'type' => 'text',
                    'label' => 'Title',
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'description' => [
                    'type' => 'markdown',
                    'label' => 'Description',
                    'validate' => [
                        'type' => 'textarea'
                    ]
                ],
                'Profile Picture' => [
                    'type' => 'section',
                    'title' => 'Profile Picture',
                    'underline' => true
                ],
                'picture_src' => [
                    'type' => 'file',
                    'label' => 'Picture file',
                    'multiple' => false,
                    'destination' => 'user/plugins/aboutme/assets/avatars',
                    'accept' => [
                        0 => 'image/*'
                    ]
                ],
                'Gravatar' => [
                    'type' => 'section',
                    'title' => 'Gravatar',
                    'underline' => true
                ],
                'gravatar.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Gravatar status',
                    'highlight' => 0,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'gravatar.email' => [
                    'type' => 'text',
                    'size' => 'small',
                    'label' => 'Email',
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'gravatar.size' => [
                    'type' => 'text',
                    'size' => 'small',
                    'label' => 'Size (min 50)',
                    'validate' => [
                        'type' => 'number',
                        'min' => 50
                    ]
                ],
                'Social Pages' => [
                    'type' => 'section',
                    'title' => 'Social Pages',
                    'underline' => true
                ],
                'social_pages.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Social pages status',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'social_pages.use_font_awesome' => [
                    'type' => 'toggle',
                    'label' => 'Use Font Awesome (Only if your theme does not use it already)',
                    'highlight' => 0,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'social_pages_types_spacer' => [
                    'type' => 'spacer',
                    'title' => 'Social Pages Types',
                    'underline' => true
                ],
                'social_pages_types' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'title' => 'Pages',
                    'fields' => [
                        'facebook' => [
                            'type' => 'tab',
                            'title' => 'Facebook',
                            'fields' => [
                                'social_pages.pages.facebook.icon' => [
                                    'type' => 'text',
                                    'size' => 'small',
                                    'label' => 'Font Awesome Icon',
                                    'default' => 'facebook',
                                    'validate' => [
                                        'type' => 'text'
                                    ]
                                ],
                                'social_pages.pages.facebook.url' => [
                                    'type' => 'url',
                                    'label' => 'Your Facebook Profile URL',
                                    'validate' => [
                                        'type' => 'url'
                                    ]
                                ],
                                'social_pages.pages.facebook.title' => [
                                    'type' => 'text',
                                    'label' => 'Title when icon hovered (optional)',
                                    'default' => 'Facebook',
                                    'validate' => [
                                        'type' => 'text'
                                    ]
                                ],
                                'social_pages.pages.facebook.position' => [
                                    'type' => 'text',
                                    'size' => 'x-small',
                                    'label' => 'Position',
                                    'default' => 1,
                                    'validate' => [
                                        'type' => 'Number'
                                    ]
                                ]
                            ]
                        ],
                        'twitter' => [
                            'type' => 'tab',
                            'title' => 'Twitter',
                            'fields' => [
                                'social_pages.pages.twitter.icon' => [
                                    'type' => 'text',
                                    'size' => 'small',
                                    'label' => 'Font Awesome Icon',
                                    'default' => 'twitter',
                                    'validate' => [
                                        'type' => 'text'
                                    ]
                                ],
                                'social_pages.pages.twitter.url' => [
                                    'type' => 'url',
                                    'label' => 'Your Twitter Profile URL',
                                    'validate' => [
                                        'type' => 'url'
                                    ]
                                ],
                                'social_pages.pages.twitter.title' => [
                                    'type' => 'text',
                                    'label' => 'Title when icon hovered (optional)',
                                    'default' => 'Twitter',
                                    'validate' => [
                                        'type' => 'text'
                                    ]
                                ],
                                'social_pages.pages.twitter.position' => [
                                    'type' => 'text',
                                    'size' => 'x-small',
                                    'label' => 'Position',
                                    'default' => 1,
                                    'validate' => [
                                        'type' => 'Number'
                                    ]
                                ]
                            ]
                        ],
                        'google_plus' => [
                            'type' => 'tab',
                            'title' => 'Google+',
                            'fields' => [
                                'social_pages.pages.google_plus.icon' => [
                                    'type' => 'text',
                                    'size' => 'small',
                                    'label' => 'Font Awesome Icon',
                                    'default' => 'google-plus',
                                    'validate' => [
                                        'type' => 'text'
                                    ]
                                ],
                                'social_pages.pages.google_plus.url' => [
                                    'type' => 'url',
                                    'label' => 'Your Google+ Profile URL',
                                    'validate' => [
                                        'type' => 'url'
                                    ]
                                ],
                                'social_pages.pages.google_plus.title' => [
                                    'type' => 'text',
                                    'label' => 'Title when icon hovered (optional)',
                                    'default' => 'Google+',
                                    'validate' => [
                                        'type' => 'text'
                                    ]
                                ],
                                'social_pages.pages.google_plus.position' => [
                                    'type' => 'text',
                                    'size' => 'x-small',
                                    'label' => 'Position',
                                    'default' => 1,
                                    'validate' => [
                                        'type' => 'Number'
                                    ]
                                ]
                            ]
                        ],
                        'github' => [
                            'type' => 'tab',
                            'title' => 'GitHub',
                            'fields' => [
                                'social_pages.pages.github.icon' => [
                                    'type' => 'text',
                                    'size' => 'small',
                                    'label' => 'Font Awesome Icon',
                                    'default' => 'github',
                                    'validate' => [
                                        'type' => 'text'
                                    ]
                                ],
                                'social_pages.pages.github.url' => [
                                    'type' => 'url',
                                    'label' => 'Your GitHub Profile URL',
                                    'validate' => [
                                        'type' => 'url'
                                    ]
                                ],
                                'social_pages.pages.github.title' => [
                                    'type' => 'text',
                                    'label' => 'Title when icon hovered (optional)',
                                    'default' => 'GitHub',
                                    'validate' => [
                                        'type' => 'text'
                                    ]
                                ],
                                'social_pages.pages.github.position' => [
                                    'type' => 'text',
                                    'size' => 'x-small',
                                    'label' => 'Position',
                                    'default' => 1,
                                    'validate' => [
                                        'type' => 'Number'
                                    ]
                                ]
                            ]
                        ],
                        'linkedin' => [
                            'type' => 'tab',
                            'title' => 'LinkedIn',
                            'fields' => [
                                'social_pages.pages.linkedin.icon' => [
                                    'type' => 'text',
                                    'size' => 'small',
                                    'label' => 'Font Awesome Icon',
                                    'default' => 'linkedin',
                                    'validate' => [
                                        'type' => 'text'
                                    ]
                                ],
                                'social_pages.pages.linkedin.url' => [
                                    'type' => 'url',
                                    'label' => 'Your LinkedIn Profile URL',
                                    'validate' => [
                                        'type' => 'url'
                                    ]
                                ],
                                'social_pages.pages.linkedin.title' => [
                                    'type' => 'text',
                                    'label' => 'Title when icon hovered (optional)',
                                    'default' => 'LinkedIn',
                                    'validate' => [
                                        'type' => 'text'
                                    ]
                                ],
                                'social_pages.pages.linkedin.position' => [
                                    'type' => 'text',
                                    'size' => 'x-small',
                                    'label' => 'Position',
                                    'default' => 1,
                                    'validate' => [
                                        'type' => 'Number'
                                    ]
                                ]
                            ]
                        ],
                        'instagram' => [
                            'type' => 'tab',
                            'title' => 'Instagram',
                            'fields' => [
                                'social_pages.pages.instagram.icon' => [
                                    'type' => 'text',
                                    'size' => 'small',
                                    'label' => 'Font Awesome Icon',
                                    'default' => 'instagram',
                                    'validate' => [
                                        'type' => 'text'
                                    ]
                                ],
                                'social_pages.pages.instagram.url' => [
                                    'type' => 'url',
                                    'label' => 'Your Instagram Profile URL',
                                    'validate' => [
                                        'type' => 'url'
                                    ]
                                ],
                                'social_pages.pages.instagram.title' => [
                                    'type' => 'text',
                                    'label' => 'Title when icon hovered (optional)',
                                    'default' => 'Instagram',
                                    'validate' => [
                                        'type' => 'text'
                                    ]
                                ],
                                'social_pages.pages.instagram.position' => [
                                    'type' => 'text',
                                    'size' => 'x-small',
                                    'label' => 'Position',
                                    'default' => 1,
                                    'validate' => [
                                        'type' => 'Number'
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
