<?php
return [
    '@class' => 'Grav\\Common\\Config\\CompiledBlueprints',
    'timestamp' => 1495375188,
    'checksum' => 'f7c5405dbed9a4d0b64b5920bafe846c',
    'files' => [
        'system/blueprints/config' => [
            'media' => [
                'file' => 'system/blueprints/config/media.yaml',
                'modified' => 1493026482
            ],
            'site' => [
                'file' => 'system/blueprints/config/site.yaml',
                'modified' => 1493026482
            ],
            'streams' => [
                'file' => 'system/blueprints/config/streams.yaml',
                'modified' => 1493026482
            ],
            'system' => [
                'file' => 'system/blueprints/config/system.yaml',
                'modified' => 1493026482
            ]
        ],
        'user/plugins' => [
            'plugins/aboutme' => [
                'file' => 'user/plugins/aboutme/blueprints.yaml',
                'modified' => 1495258176
            ],
            'plugins/admin' => [
                'file' => 'user/plugins/admin/blueprints.yaml',
                'modified' => 1495258176
            ],
            'plugins/archives' => [
                'file' => 'user/plugins/archives/blueprints.yaml',
                'modified' => 1495258177
            ],
            'plugins/breadcrumbs' => [
                'file' => 'user/plugins/breadcrumbs/blueprints.yaml',
                'modified' => 1495258177
            ],
            'plugins/comments' => [
                'file' => 'user/plugins/comments/blueprints.yaml',
                'modified' => 1495374697
            ],
            'plugins/email' => [
                'file' => 'user/plugins/email/blueprints.yaml',
                'modified' => 1495258177
            ],
            'plugins/error' => [
                'file' => 'user/plugins/error/blueprints.yaml',
                'modified' => 1495258177
            ],
            'plugins/feed' => [
                'file' => 'user/plugins/feed/blueprints.yaml',
                'modified' => 1495258177
            ],
            'plugins/form' => [
                'file' => 'user/plugins/form/blueprints.yaml',
                'modified' => 1495374694
            ],
            'plugins/ganalytics' => [
                'file' => 'user/plugins/ganalytics/blueprints.yaml',
                'modified' => 1495258177
            ],
            'plugins/login' => [
                'file' => 'user/plugins/login/blueprints.yaml',
                'modified' => 1495258177
            ],
            'plugins/pagination' => [
                'file' => 'user/plugins/pagination/blueprints.yaml',
                'modified' => 1495258177
            ],
            'plugins/problems' => [
                'file' => 'user/plugins/problems/blueprints.yaml',
                'modified' => 1495258177
            ],
            'plugins/simplesearch' => [
                'file' => 'user/plugins/simplesearch/blueprints.yaml',
                'modified' => 1495258177
            ],
            'plugins/sitemap' => [
                'file' => 'user/plugins/sitemap/blueprints.yaml',
                'modified' => 1495258177
            ],
            'plugins/taxonomylist' => [
                'file' => 'user/plugins/taxonomylist/blueprints.yaml',
                'modified' => 1495258177
            ],
            'plugins/themer' => [
                'file' => 'user/plugins/themer/blueprints.yaml',
                'modified' => 1495258177
            ],
            'plugins/twigfeeds' => [
                'file' => 'user/plugins/twigfeeds/blueprints.yaml',
                'modified' => 1495258177
            ],
            'plugins/webmention' => [
                'file' => 'user/plugins/webmention/blueprints.yaml',
                'modified' => 1495370987
            ]
        ]
    ],
    'data' => [
        'items' => [
            'media' => [
                'form' => [
                    'validation' => 'loose'
                ],
                'type' => '_root',
                'form_field' => false
            ],
            'site' => [
                'form' => [
                    'validation' => 'loose'
                ],
                'type' => '_root',
                'form_field' => false
            ],
            'site.title' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.SITE_TITLE',
                'size' => 'large',
                'name' => 'site.title',
                'validation' => 'loose'
            ],
            'site.default_lang' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.SITE_DEFAULT_LANG',
                'size' => 'x-small',
                'name' => 'site.default_lang',
                'validation' => 'loose'
            ],
            'site.author' => [
                'type' => '_parent',
                'name' => 'site.author',
                'form_field' => false
            ],
            'site.author.name' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.DEFAULT_AUTHOR',
                'name' => 'site.author.name',
                'validation' => 'loose'
            ],
            'site.author.email' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.DEFAULT_EMAIL',
                'validate' => [
                    'type' => 'email'
                ],
                'name' => 'site.author.email',
                'validation' => 'loose'
            ],
            'site.taxonomies' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.TAXONOMY_TYPES',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'site.taxonomies',
                'validation' => 'loose'
            ],
            'site.content' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'site.content',
                'validation' => 'loose'
            ],
            'site.summary' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'site.summary',
                'validation' => 'loose'
            ],
            'site.summary.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ENABLED',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'site.summary.enabled',
                'validation' => 'loose'
            ],
            'site.summary.size' => [
                'type' => 'text',
                'size' => 'x-small',
                'append' => 'PLUGIN_ADMIN.CHARACTERS',
                'label' => 'PLUGIN_ADMIN.SUMMARY_SIZE',
                'validate' => [
                    'type' => 'int',
                    'min' => 0,
                    'max' => 65536
                ],
                'name' => 'site.summary.size',
                'validation' => 'loose'
            ],
            'site.summary.format' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.FORMAT',
                'classes' => 'fancy',
                'highlight' => 'short',
                'options' => [
                    'short' => 'PLUGIN_ADMIN.SHORT',
                    'long' => 'PLUGIN_ADMIN.LONG'
                ],
                'name' => 'site.summary.format',
                'validation' => 'loose'
            ],
            'site.summary.delimiter' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGIN_ADMIN.DELIMITER',
                'name' => 'site.summary.delimiter',
                'validation' => 'loose'
            ],
            'site.metadata' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'site.metadata',
                'validation' => 'loose'
            ],
            'site.redirects' => [
                'type' => 'array',
                'label' => 'PLUGIN_ADMIN.CUSTOM_REDIRECTS',
                'name' => 'site.redirects',
                'validation' => 'loose'
            ],
            'site.routes' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'site.routes',
                'validation' => 'loose'
            ],
            'streams' => [
                'form' => [
                    'validation' => 'loose',
                    'hidden' => true
                ],
                'type' => '_root',
                'form_field' => false
            ],
            'streams.schemes' => [
                'type' => '_parent',
                'name' => 'streams.schemes',
                'form_field' => false
            ],
            'streams.schemes.xxx' => [
                'type' => 'array',
                'name' => 'streams.schemes.xxx',
                'validation' => 'loose'
            ],
            'system' => [
                'form' => [
                    'validation' => 'loose'
                ],
                'type' => '_root',
                'form_field' => false
            ],
            'system.home' => [
                'type' => '_parent',
                'name' => 'system.home',
                'form_field' => false
            ],
            'system.home.alias' => [
                'type' => 'pages',
                'size' => 'large',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.HOME_PAGE',
                'show_all' => false,
                'show_modular' => false,
                'show_root' => false,
                'show_slug' => true,
                'name' => 'system.home.alias',
                'validation' => 'loose'
            ],
            'system.home.hide_in_urls' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.HIDE_HOME_IN_URLS',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.home.hide_in_urls',
                'validation' => 'loose'
            ],
            'system.pages' => [
                'type' => '_parent',
                'name' => 'system.pages',
                'form_field' => false
            ],
            'system.pages.theme' => [
                'type' => 'themeselect',
                'classes' => 'fancy',
                'selectize' => true,
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.DEFAULT_THEME',
                'name' => 'system.pages.theme',
                'validation' => 'loose'
            ],
            'system.pages.process' => [
                'type' => 'checkboxes',
                'label' => 'PLUGIN_ADMIN.PROCESS',
                'default' => [
                    0 => [
                        'markdown' => true
                    ],
                    1 => [
                        'twig' => true
                    ]
                ],
                'options' => [
                    'markdown' => 'Markdown',
                    'twig' => 'Twig'
                ],
                'use' => 'keys',
                'name' => 'system.pages.process',
                'validation' => 'loose'
            ],
            'system.timezone' => [
                'type' => 'select',
                'label' => 'PLUGIN_ADMIN.TIMEZONE',
                'size' => 'medium',
                'classes' => 'fancy',
                'data-options@' => '\\Grav\\Common\\Utils::timezones',
                'default' => '',
                'options' => [
                    '' => 'Default (Server Timezone)'
                ],
                'name' => 'system.timezone',
                'validation' => 'loose'
            ],
            'system.pages.dateformat' => [
                'type' => '_parent',
                'name' => 'system.pages.dateformat',
                'form_field' => false
            ],
            'system.pages.dateformat.default' => [
                'type' => 'select',
                'size' => 'medium',
                'selectize' => [
                    'create' => true
                ],
                'label' => 'PLUGIN_ADMIN.DEFAULT_DATE_FORMAT',
                'data-options@' => '\\Grav\\Common\\Utils::dateFormats',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'system.pages.dateformat.default',
                'validation' => 'loose'
            ],
            'system.pages.dateformat.short' => [
                'type' => 'dateformat',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.SHORT_DATE_FORMAT',
                'default' => 'jS M Y',
                'options' => [
                    'F jS \\a\\t g:ia' => 'Date1',
                    'l jS \\of F g:i A' => 'Date2',
                    'D, d M Y G:i:s' => 'Date3',
                    'd-m-y G:i' => 'Date4',
                    'jS M Y' => 'Date5'
                ],
                'name' => 'system.pages.dateformat.short',
                'validation' => 'loose'
            ],
            'system.pages.dateformat.long' => [
                'type' => 'dateformat',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.LONG_DATE_FORMAT',
                'options' => [
                    'F jS \\a\\t g:ia' => 'Date1',
                    'l jS \\of F g:i A' => 'Date2',
                    'D, d M Y G:i:s' => 'Date3',
                    'd-m-y G:i' => 'Date4',
                    'jS M Y' => 'Date5'
                ],
                'name' => 'system.pages.dateformat.long',
                'validation' => 'loose'
            ],
            'system.pages.order' => [
                'type' => '_parent',
                'name' => 'system.pages.order',
                'form_field' => false
            ],
            'system.pages.order.by' => [
                'type' => 'select',
                'size' => 'large',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.DEFAULT_ORDERING',
                'options' => [
                    'default' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_DEFAULT',
                    'folder' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_FOLDER',
                    'title' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_TITLE',
                    'date' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_DATE'
                ],
                'name' => 'system.pages.order.by',
                'validation' => 'loose'
            ],
            'system.pages.order.dir' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.DEFAULT_ORDER_DIRECTION',
                'highlight' => 'asc',
                'default' => 'desc',
                'options' => [
                    'asc' => 'PLUGIN_ADMIN.ASCENDING',
                    'desc' => 'PLUGIN_ADMIN.DESCENDING'
                ],
                'name' => 'system.pages.order.dir',
                'validation' => 'loose'
            ],
            'system.pages.list' => [
                'type' => '_parent',
                'name' => 'system.pages.list',
                'form_field' => false
            ],
            'system.pages.list.count' => [
                'type' => 'text',
                'size' => 'x-small',
                'append' => 'PLUGIN_ADMIN.PAGES',
                'label' => 'PLUGIN_ADMIN.DEFAULT_PAGE_COUNT',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'system.pages.list.count',
                'validation' => 'loose'
            ],
            'system.pages.publish_dates' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.DATE_BASED_PUBLISHING',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.publish_dates',
                'validation' => 'loose'
            ],
            'system.pages.events' => [
                'type' => 'checkboxes',
                'label' => 'PLUGIN_ADMIN.EVENTS',
                'default' => [
                    0 => [
                        'page' => true
                    ],
                    1 => [
                        'twig' => true
                    ]
                ],
                'options' => [
                    'page' => 'Page Events',
                    'twig' => 'Twig Events'
                ],
                'use' => 'keys',
                'name' => 'system.pages.events',
                'validation' => 'loose'
            ],
            'system.pages.append_url_extension' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGIN_ADMIN.APPEND_URL_EXT',
                'name' => 'system.pages.append_url_extension',
                'validation' => 'loose'
            ],
            'system.pages.redirect_default_route' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.REDIRECT_DEFAULT_ROUTE',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.redirect_default_route',
                'validation' => 'loose'
            ],
            'system.pages.redirect_default_code' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.REDIRECT_DEFAULT_CODE',
                'options' => [
                    301 => '301 - Permanent',
                    302 => '302 - Found',
                    303 => '303 - Other',
                    304 => '304 - Not Modified'
                ],
                'name' => 'system.pages.redirect_default_code',
                'validation' => 'loose'
            ],
            'system.pages.redirect_trailing_slash' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.REDIRECT_TRAILING_SLASH',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.redirect_trailing_slash',
                'validation' => 'loose'
            ],
            'system.pages.ignore_hidden' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.IGNORE_HIDDEN',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.ignore_hidden',
                'validation' => 'loose'
            ],
            'system.pages.ignore_files' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.IGNORE_FILES',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'system.pages.ignore_files',
                'validation' => 'loose'
            ],
            'system.pages.ignore_folders' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.IGNORE_FOLDERS',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'system.pages.ignore_folders',
                'validation' => 'loose'
            ],
            'system.pages.url_taxonomy_filters' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ALLOW_URL_TAXONOMY_FILTERS',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.url_taxonomy_filters',
                'validation' => 'loose'
            ],
            'system.pages.twig_first' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.TWIG_FIRST',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.twig_first',
                'validation' => 'loose'
            ],
            'system.pages.never_cache_twig' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.NEVER_CACHE_TWIG',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.never_cache_twig',
                'validation' => 'loose'
            ],
            'system.pages.frontmatter' => [
                'type' => '_parent',
                'name' => 'system.pages.frontmatter',
                'form_field' => false
            ],
            'system.pages.frontmatter.process_twig' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.FRONTMATTER_PROCESS_TWIG',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.frontmatter.process_twig',
                'validation' => 'loose'
            ],
            'system.pages.frontmatter.ignore_fields' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.FRONTMATTER_IGNORE_FIELDS',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'system.pages.frontmatter.ignore_fields',
                'validation' => 'loose'
            ],
            'system.content' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.content',
                'validation' => 'loose'
            ],
            'system.languages' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.languages',
                'validation' => 'loose'
            ],
            'system.languages.supported' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.SUPPORTED',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'system.languages.supported',
                'validation' => 'loose'
            ],
            'system.languages.include_default_lang' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.INCLUDE_DEFAULT_LANG',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.include_default_lang',
                'validation' => 'loose'
            ],
            'system.languages.translations' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.TRANSLATIONS_ENABLED',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.translations',
                'validation' => 'loose'
            ],
            'system.languages.translations_fallback' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.TRANSLATIONS_FALLBACK',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.translations_fallback',
                'validation' => 'loose'
            ],
            'system.languages.session_store_active' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ACTIVE_LANGUAGE_IN_SESSION',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.session_store_active',
                'validation' => 'loose'
            ],
            'system.languages.http_accept_language' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.HTTP_ACCEPT_LANGUAGE',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.http_accept_language',
                'validation' => 'loose'
            ],
            'system.languages.override_locale' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.OVERRIDE_LOCALE',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.override_locale',
                'validation' => 'loose'
            ],
            'system.pages.expires' => [
                'type' => 'text',
                'size' => 'small',
                'append' => 'NICETIME.SECOND_PLURAL',
                'label' => 'PLUGIN_ADMIN.EXPIRES',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'system.pages.expires',
                'validation' => 'loose'
            ],
            'system.pages.last_modified' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.LAST_MODIFIED',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.last_modified',
                'validation' => 'loose'
            ],
            'system.pages.etag' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ETAG',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.etag',
                'validation' => 'loose'
            ],
            'system.pages.vary_accept_encoding' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.VARY_ACCEPT_ENCODING',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.vary_accept_encoding',
                'validation' => 'loose'
            ],
            'system.http_headers' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.http_headers',
                'validation' => 'loose'
            ],
            'system.pages.markdown' => [
                'type' => '_parent',
                'name' => 'system.pages.markdown',
                'form_field' => false
            ],
            'system.pages.markdown.extra' => [
                'type' => 'toggle',
                'label' => 'Markdown extra',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.extra',
                'validation' => 'loose'
            ],
            'system.pages.markdown.auto_line_breaks' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.AUTO_LINE_BREAKS',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.auto_line_breaks',
                'validation' => 'loose'
            ],
            'system.pages.markdown.auto_url_links' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.AUTO_URL_LINKS',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.auto_url_links',
                'validation' => 'loose'
            ],
            'system.pages.markdown.escape_markup' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ESCAPE_MARKUP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.escape_markup',
                'validation' => 'loose'
            ],
            'system.markdown' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.markdown',
                'validation' => 'loose'
            ],
            'system.cache' => [
                'type' => '_parent',
                'name' => 'system.cache',
                'form_field' => false
            ],
            'system.cache.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CACHING',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.cache.enabled',
                'validation' => 'loose'
            ],
            'system.cache.check' => [
                'type' => '_parent',
                'name' => 'system.cache.check',
                'form_field' => false
            ],
            'system.cache.check.method' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.CACHE_CHECK_METHOD',
                'options' => [
                    'file' => 'Markdown + Yaml file timestamps',
                    'folder' => 'Folder timestamps',
                    'hash' => 'All files timestamps',
                    'none' => 'No timestamp checking'
                ],
                'name' => 'system.cache.check.method',
                'validation' => 'loose'
            ],
            'system.cache.driver' => [
                'type' => 'select',
                'size' => 'small',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.CACHE_DRIVER',
                'options' => [
                    'auto' => 'Auto detect',
                    'file' => 'File',
                    'apc' => 'APC',
                    'apcu' => 'APCu',
                    'xcache' => 'Xcache',
                    'memcache' => 'Memcache',
                    'memcached' => 'Memcached',
                    'wincache' => 'WinCache',
                    'redis' => 'Redis'
                ],
                'name' => 'system.cache.driver',
                'validation' => 'loose'
            ],
            'system.cache.prefix' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGIN_ADMIN.CACHE_PREFIX',
                'name' => 'system.cache.prefix',
                'validation' => 'loose'
            ],
            'system.cache.cli_compatibility' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CLI_COMPATIBILITY',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.cache.cli_compatibility',
                'validation' => 'loose'
            ],
            'system.cache.lifetime' => [
                'type' => 'text',
                'size' => 'small',
                'append' => 'NICETIME.SECOND_PLURAL',
                'label' => 'PLUGIN_ADMIN.LIFETIME',
                'validate' => [
                    'type' => 'number'
                ],
                'name' => 'system.cache.lifetime',
                'validation' => 'loose'
            ],
            'system.cache.gzip' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.GZIP_COMPRESSION',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.cache.gzip',
                'validation' => 'loose'
            ],
            'system.cache.allow_webserver_gzip' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ALLOW_WEBSERVER_GZIP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.cache.allow_webserver_gzip',
                'validation' => 'loose'
            ],
            'system.cache.memcache' => [
                'type' => '_parent',
                'name' => 'system.cache.memcache',
                'form_field' => false
            ],
            'system.cache.memcache.server' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.MEMCACHE_SERVER',
                'name' => 'system.cache.memcache.server',
                'validation' => 'loose'
            ],
            'system.cache.memcache.port' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.MEMCACHE_PORT',
                'name' => 'system.cache.memcache.port',
                'validation' => 'loose'
            ],
            'system.cache.memcached' => [
                'type' => '_parent',
                'name' => 'system.cache.memcached',
                'form_field' => false
            ],
            'system.cache.memcached.server' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.MEMCACHED_SERVER',
                'name' => 'system.cache.memcached.server',
                'validation' => 'loose'
            ],
            'system.cache.memcached.port' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.MEMCACHED_PORT',
                'name' => 'system.cache.memcached.port',
                'validation' => 'loose'
            ],
            'system.cache.redis' => [
                'type' => '_parent',
                'name' => 'system.cache.redis',
                'form_field' => false
            ],
            'system.cache.redis.socket' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.REDIS_SOCKET',
                'name' => 'system.cache.redis.socket',
                'validation' => 'loose'
            ],
            'system.cache.redis.server' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.REDIS_SERVER',
                'name' => 'system.cache.redis.server',
                'validation' => 'loose'
            ],
            'system.cache.redis.port' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.REDIS_PORT',
                'name' => 'system.cache.redis.port',
                'validation' => 'loose'
            ],
            'system.caching' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.caching',
                'validation' => 'loose'
            ],
            'system.twig' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.twig',
                'validation' => 'loose'
            ],
            'system.twig.cache' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.TWIG_CACHING',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.cache',
                'validation' => 'loose'
            ],
            'system.twig.debug' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.TWIG_DEBUG',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.debug',
                'validation' => 'loose'
            ],
            'system.twig.auto_reload' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.DETECT_CHANGES',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.auto_reload',
                'validation' => 'loose'
            ],
            'system.twig.autoescape' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.AUTOESCAPE_VARIABLES',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.autoescape',
                'validation' => 'loose'
            ],
            'system.twig.umask_fix' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.TWIG_UMASK_FIX',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.umask_fix',
                'validation' => 'loose'
            ],
            'system.assets' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.assets',
                'validation' => 'loose'
            ],
            'system.assets.css_pipeline' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CSS_PIPELINE',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_pipeline',
                'validation' => 'loose'
            ],
            'system.assets.css_pipeline_include_externals' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CSS_PIPELINE_INCLUDE_EXTERNALS',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_pipeline_include_externals',
                'validation' => 'loose'
            ],
            'system.assets.css_pipeline_before_excludes' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CSS_PIPELINE_BEFORE_EXCLUDES',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_pipeline_before_excludes',
                'validation' => 'loose'
            ],
            'system.assets.css_minify' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CSS_MINIFY',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_minify',
                'validation' => 'loose'
            ],
            'system.assets.css_minify_windows' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CSS_MINIFY_WINDOWS_OVERRIDE',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_minify_windows',
                'validation' => 'loose'
            ],
            'system.assets.css_rewrite' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CSS_REWRITE',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_rewrite',
                'validation' => 'loose'
            ],
            'system.assets.js_pipeline' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.JAVASCRIPT_PIPELINE',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.js_pipeline',
                'validation' => 'loose'
            ],
            'system.assets.js_pipeline_include_externals' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.JAVASCRIPT_PIPELINE_INCLUDE_EXTERNALS',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.js_pipeline_include_externals',
                'validation' => 'loose'
            ],
            'system.assets.js_pipeline_before_excludes' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.JAVASCRIPT_PIPELINE_BEFORE_EXCLUDES',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.js_pipeline_before_excludes',
                'validation' => 'loose'
            ],
            'system.assets.js_minify' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.JAVASCRIPT_MINIFY',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.js_minify',
                'validation' => 'loose'
            ],
            'system.assets.enable_asset_timestamp' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ENABLED_TIMESTAMPS_ON_ASSETS',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.enable_asset_timestamp',
                'validation' => 'loose'
            ],
            'system.assets.collections' => [
                'type' => 'array',
                'label' => 'PLUGIN_ADMIN.COLLECTIONS',
                'name' => 'system.assets.collections',
                'validation' => 'loose'
            ],
            'system.errors' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.errors',
                'validation' => 'loose'
            ],
            'system.errors.display' => [
                'type' => 'select',
                'label' => 'PLUGIN_ADMIN.DISPLAY_ERRORS',
                'size' => 'medium',
                'highlight' => 1,
                'options' => [
                    -1 => 'PLUGIN_ADMIN.ERROR_SYSTEM',
                    0 => 'PLUGIN_ADMIN.ERROR_SIMPLE',
                    1 => 'PLUGIN_ADMIN.ERROR_FULL_BACKTRACE'
                ],
                'name' => 'system.errors.display',
                'validation' => 'loose'
            ],
            'system.errors.log' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.LOG_ERRORS',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.errors.log',
                'validation' => 'loose'
            ],
            'system.debugger' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.debugger',
                'validation' => 'loose'
            ],
            'system.debugger.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.DEBUGGER',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.debugger.enabled',
                'validation' => 'loose'
            ],
            'system.debugger.shutdown' => [
                'type' => '_parent',
                'name' => 'system.debugger.shutdown',
                'form_field' => false
            ],
            'system.debugger.shutdown.close_connection' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.SHUTDOWN_CLOSE_CONNECTION',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.debugger.shutdown.close_connection',
                'validation' => 'loose'
            ],
            'system.images' => [
                'type' => '_parent',
                'name' => 'system.images',
                'form_field' => false
            ],
            'system.images.default_image_quality' => [
                'type' => 'range',
                'append' => '%',
                'label' => 'PLUGIN_ADMIN.DEFAULT_IMAGE_QUALITY',
                'classes' => 'x-small',
                'validate' => [
                    'min' => 1,
                    'max' => 100
                ],
                'name' => 'system.images.default_image_quality',
                'validation' => 'loose'
            ],
            'system.images.cache_all' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CACHE_ALL',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.images.cache_all',
                'validation' => 'loose'
            ],
            'system.images.cache_perms' => [
                'type' => 'select',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.CACHE_PERMS',
                'highlight' => '0755',
                'options' => [
                    '0755' => '0755',
                    '0775' => '0775'
                ],
                'name' => 'system.images.cache_perms',
                'validation' => 'loose'
            ],
            'system.images.debug' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.IMAGES_DEBUG',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.images.debug',
                'validation' => 'loose'
            ],
            'system.images.auto_fix_orientation' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.IMAGES_AUTO_FIX_ORIENTATION',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.images.auto_fix_orientation',
                'validation' => 'loose'
            ],
            'system.media' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.media',
                'validation' => 'loose'
            ],
            'system.media.upload_limit' => [
                'type' => 'text',
                'append' => 'bytes',
                'label' => 'PLUGIN_ADMIN.UPLOAD_LIMIT',
                'classes' => 'small',
                'validate' => [
                    'type' => 'number'
                ],
                'name' => 'system.media.upload_limit',
                'validation' => 'loose'
            ],
            'system.media.enable_media_timestamp' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ENABLE_MEDIA_TIMESTAMP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.media.enable_media_timestamp',
                'validation' => 'loose'
            ],
            'system.media.allowed_fallback_types' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.FALLBACK_TYPES',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'system.media.allowed_fallback_types',
                'validation' => 'loose'
            ],
            'system.media.unsupported_inline_types' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.INLINE_TYPES',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'system.media.unsupported_inline_types',
                'validation' => 'loose'
            ],
            'system.session' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.session',
                'validation' => 'loose'
            ],
            'system.session.enabled' => [
                'type' => 'hidden',
                'label' => 'PLUGIN_ADMIN.ENABLED',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => true,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.session.enabled',
                'validation' => 'loose'
            ],
            'system.session.timeout' => [
                'type' => 'text',
                'size' => 'small',
                'append' => 'NICETIME.SECOND_PLURAL',
                'label' => 'PLUGIN_ADMIN.TIMEOUT',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'system.session.timeout',
                'validation' => 'loose'
            ],
            'system.session.name' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.NAME',
                'name' => 'system.session.name',
                'validation' => 'loose'
            ],
            'system.session.secure' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.SESSION_SECURE',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => false,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.session.secure',
                'validation' => 'loose'
            ],
            'system.session.httponly' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.SESSION_HTTPONLY',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => true,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.session.httponly',
                'validation' => 'loose'
            ],
            'system.session.path' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.SESSION_PATH',
                'name' => 'system.session.path',
                'validation' => 'loose'
            ],
            'system.session.split' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.SESSION_SPLIT',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => true,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.session.split',
                'validation' => 'loose'
            ],
            'system.gpm' => [
                'type' => '_parent',
                'name' => 'system.gpm',
                'form_field' => false
            ],
            'system.gpm.releases' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.GPM_RELEASES',
                'highlight' => 'stable',
                'options' => [
                    'stable' => 'PLUGIN_ADMIN.STABLE',
                    'testing' => 'PLUGIN_ADMIN.TESTING'
                ],
                'name' => 'system.gpm.releases',
                'validation' => 'loose'
            ],
            'system.gpm.proxy_url' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.PROXY_URL',
                'name' => 'system.gpm.proxy_url',
                'validation' => 'loose'
            ],
            'system.gpm.method' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.GPM_METHOD',
                'highlight' => 'auto',
                'options' => [
                    'auto' => 'PLUGIN_ADMIN.AUTO',
                    'fopen' => 'PLUGIN_ADMIN.FOPEN',
                    'curl' => 'PLUGIN_ADMIN.CURL'
                ],
                'name' => 'system.gpm.method',
                'validation' => 'loose'
            ],
            'system.gpm.official_gpm_only' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.GPM_OFFICIAL_ONLY',
                'highlight' => 'auto',
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => true,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.gpm.official_gpm_only',
                'validation' => 'loose'
            ],
            'system.gpm.verify_peer' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.GPM_VERIFY_PEER',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.gpm.verify_peer',
                'validation' => 'loose'
            ],
            'system.reverse_proxy_setup' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.REVERSE_PROXY',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.reverse_proxy_setup',
                'validation' => 'loose'
            ],
            'system.username_regex' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.USERNAME_REGEX',
                'name' => 'system.username_regex',
                'validation' => 'loose'
            ],
            'system.pwd_regex' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.PWD_REGEX',
                'name' => 'system.pwd_regex',
                'validation' => 'loose'
            ],
            'system.wrapped_site' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.WRAPPED_SITE',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.wrapped_site',
                'validation' => 'loose'
            ],
            'system.absolute_urls' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ABSOLUTE_URLS',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.absolute_urls',
                'validation' => 'loose'
            ],
            'system.param_sep' => [
                'type' => 'select',
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.PARAMETER_SEPARATOR',
                'classes' => 'fancy',
                'default' => '',
                'options' => [
                    ':' => ': (default)',
                    ';' => '; (for Apache running on Windows)'
                ],
                'name' => 'system.param_sep',
                'validation' => 'loose'
            ],
            'system.force_ssl' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.FORCE_SSL',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.force_ssl',
                'validation' => 'loose'
            ],
            'system.custom_base_url' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.CUSTOM_BASE_URL',
                'name' => 'system.custom_base_url',
                'validation' => 'loose'
            ],
            'system.advanced' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.advanced',
                'validation' => 'loose'
            ],
            'plugins.aboutme' => [
                'form' => [
                    'validation' => 'strict'
                ],
                'type' => '_root',
                'form_field' => false
            ],
            'plugins' => [
                'type' => '_parent',
                'name' => 'plugins',
                'form_field' => false
            ],
            'plugins.aboutme.enabled' => [
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
                ],
                'name' => 'plugins.aboutme.enabled',
                'validation' => 'strict'
            ],
            'plugins.aboutme.built_in_css' => [
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
                ],
                'name' => 'plugins.aboutme.built_in_css',
                'validation' => 'strict'
            ],
            'plugins.aboutme.name' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'Name',
                'validate' => [
                    'type' => 'text'
                ],
                'name' => 'plugins.aboutme.name',
                'validation' => 'strict'
            ],
            'plugins.aboutme.title' => [
                'type' => 'text',
                'label' => 'Title',
                'validate' => [
                    'type' => 'text'
                ],
                'name' => 'plugins.aboutme.title',
                'validation' => 'strict'
            ],
            'plugins.aboutme.description' => [
                'type' => 'markdown',
                'label' => 'Description',
                'validate' => [
                    'type' => 'textarea'
                ],
                'name' => 'plugins.aboutme.description',
                'validation' => 'strict'
            ],
            'plugins.aboutme.Profile Picture' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'plugins.aboutme.Profile Picture',
                'validation' => 'strict'
            ],
            'plugins.aboutme.picture_src' => [
                'type' => 'file',
                'label' => 'Picture file',
                'multiple' => false,
                'destination' => 'user/plugins/aboutme/assets/avatars',
                'accept' => [
                    0 => 'image/*'
                ],
                'name' => 'plugins.aboutme.picture_src',
                'validation' => 'strict'
            ],
            'plugins.aboutme.Gravatar' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'plugins.aboutme.Gravatar',
                'validation' => 'strict'
            ],
            'plugins.aboutme.gravatar' => [
                'type' => '_parent',
                'name' => 'plugins.aboutme.gravatar',
                'form_field' => false
            ],
            'plugins.aboutme.gravatar.enabled' => [
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
                ],
                'name' => 'plugins.aboutme.gravatar.enabled',
                'validation' => 'strict'
            ],
            'plugins.aboutme.gravatar.email' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'Email',
                'validate' => [
                    'type' => 'text'
                ],
                'name' => 'plugins.aboutme.gravatar.email',
                'validation' => 'strict'
            ],
            'plugins.aboutme.gravatar.size' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'Size (min 50)',
                'validate' => [
                    'type' => 'number',
                    'min' => 50
                ],
                'name' => 'plugins.aboutme.gravatar.size',
                'validation' => 'strict'
            ],
            'plugins.aboutme.Social Pages' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'plugins.aboutme.Social Pages',
                'validation' => 'strict'
            ],
            'plugins.aboutme.social_pages' => [
                'type' => '_parent',
                'name' => 'plugins.aboutme.social_pages',
                'form_field' => false
            ],
            'plugins.aboutme.social_pages.enabled' => [
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
                ],
                'name' => 'plugins.aboutme.social_pages.enabled',
                'validation' => 'strict'
            ],
            'plugins.aboutme.social_pages.use_font_awesome' => [
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
                ],
                'name' => 'plugins.aboutme.social_pages.use_font_awesome',
                'validation' => 'strict'
            ],
            'plugins.aboutme.social_pages_types_spacer' => [
                'type' => 'spacer',
                'underline' => true,
                'name' => 'plugins.aboutme.social_pages_types_spacer',
                'validation' => 'strict'
            ],
            'plugins.aboutme.social_pages.pages' => [
                'type' => '_parent',
                'name' => 'plugins.aboutme.social_pages.pages',
                'form_field' => false
            ],
            'plugins.aboutme.social_pages.pages.facebook' => [
                'type' => '_parent',
                'name' => 'plugins.aboutme.social_pages.pages.facebook',
                'form_field' => false
            ],
            'plugins.aboutme.social_pages.pages.facebook.icon' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'Font Awesome Icon',
                'default' => 'facebook',
                'validate' => [
                    'type' => 'text'
                ],
                'name' => 'plugins.aboutme.social_pages.pages.facebook.icon',
                'validation' => 'strict'
            ],
            'plugins.aboutme.social_pages.pages.facebook.url' => [
                'type' => 'url',
                'label' => 'Your Facebook Profile URL',
                'validate' => [
                    'type' => 'url'
                ],
                'name' => 'plugins.aboutme.social_pages.pages.facebook.url',
                'validation' => 'strict'
            ],
            'plugins.aboutme.social_pages.pages.facebook.title' => [
                'type' => 'text',
                'label' => 'Title when icon hovered (optional)',
                'default' => 'Facebook',
                'validate' => [
                    'type' => 'text'
                ],
                'name' => 'plugins.aboutme.social_pages.pages.facebook.title',
                'validation' => 'strict'
            ],
            'plugins.aboutme.social_pages.pages.facebook.position' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Position',
                'default' => 1,
                'validate' => [
                    'type' => 'Number'
                ],
                'name' => 'plugins.aboutme.social_pages.pages.facebook.position',
                'validation' => 'strict'
            ],
            'plugins.aboutme.facebook' => [
                'type' => 'tab',
                'name' => 'plugins.aboutme.facebook',
                'validation' => 'strict'
            ],
            'plugins.aboutme.social_pages.pages.twitter' => [
                'type' => '_parent',
                'name' => 'plugins.aboutme.social_pages.pages.twitter',
                'form_field' => false
            ],
            'plugins.aboutme.social_pages.pages.twitter.icon' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'Font Awesome Icon',
                'default' => 'twitter',
                'validate' => [
                    'type' => 'text'
                ],
                'name' => 'plugins.aboutme.social_pages.pages.twitter.icon',
                'validation' => 'strict'
            ],
            'plugins.aboutme.social_pages.pages.twitter.url' => [
                'type' => 'url',
                'label' => 'Your Twitter Profile URL',
                'validate' => [
                    'type' => 'url'
                ],
                'name' => 'plugins.aboutme.social_pages.pages.twitter.url',
                'validation' => 'strict'
            ],
            'plugins.aboutme.social_pages.pages.twitter.title' => [
                'type' => 'text',
                'label' => 'Title when icon hovered (optional)',
                'default' => 'Twitter',
                'validate' => [
                    'type' => 'text'
                ],
                'name' => 'plugins.aboutme.social_pages.pages.twitter.title',
                'validation' => 'strict'
            ],
            'plugins.aboutme.social_pages.pages.twitter.position' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Position',
                'default' => 1,
                'validate' => [
                    'type' => 'Number'
                ],
                'name' => 'plugins.aboutme.social_pages.pages.twitter.position',
                'validation' => 'strict'
            ],
            'plugins.aboutme.twitter' => [
                'type' => 'tab',
                'name' => 'plugins.aboutme.twitter',
                'validation' => 'strict'
            ],
            'plugins.aboutme.social_pages.pages.google_plus' => [
                'type' => '_parent',
                'name' => 'plugins.aboutme.social_pages.pages.google_plus',
                'form_field' => false
            ],
            'plugins.aboutme.social_pages.pages.google_plus.icon' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'Font Awesome Icon',
                'default' => 'google-plus',
                'validate' => [
                    'type' => 'text'
                ],
                'name' => 'plugins.aboutme.social_pages.pages.google_plus.icon',
                'validation' => 'strict'
            ],
            'plugins.aboutme.social_pages.pages.google_plus.url' => [
                'type' => 'url',
                'label' => 'Your Google+ Profile URL',
                'validate' => [
                    'type' => 'url'
                ],
                'name' => 'plugins.aboutme.social_pages.pages.google_plus.url',
                'validation' => 'strict'
            ],
            'plugins.aboutme.social_pages.pages.google_plus.title' => [
                'type' => 'text',
                'label' => 'Title when icon hovered (optional)',
                'default' => 'Google+',
                'validate' => [
                    'type' => 'text'
                ],
                'name' => 'plugins.aboutme.social_pages.pages.google_plus.title',
                'validation' => 'strict'
            ],
            'plugins.aboutme.social_pages.pages.google_plus.position' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Position',
                'default' => 1,
                'validate' => [
                    'type' => 'Number'
                ],
                'name' => 'plugins.aboutme.social_pages.pages.google_plus.position',
                'validation' => 'strict'
            ],
            'plugins.aboutme.google_plus' => [
                'type' => 'tab',
                'name' => 'plugins.aboutme.google_plus',
                'validation' => 'strict'
            ],
            'plugins.aboutme.social_pages.pages.github' => [
                'type' => '_parent',
                'name' => 'plugins.aboutme.social_pages.pages.github',
                'form_field' => false
            ],
            'plugins.aboutme.social_pages.pages.github.icon' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'Font Awesome Icon',
                'default' => 'github',
                'validate' => [
                    'type' => 'text'
                ],
                'name' => 'plugins.aboutme.social_pages.pages.github.icon',
                'validation' => 'strict'
            ],
            'plugins.aboutme.social_pages.pages.github.url' => [
                'type' => 'url',
                'label' => 'Your GitHub Profile URL',
                'validate' => [
                    'type' => 'url'
                ],
                'name' => 'plugins.aboutme.social_pages.pages.github.url',
                'validation' => 'strict'
            ],
            'plugins.aboutme.social_pages.pages.github.title' => [
                'type' => 'text',
                'label' => 'Title when icon hovered (optional)',
                'default' => 'GitHub',
                'validate' => [
                    'type' => 'text'
                ],
                'name' => 'plugins.aboutme.social_pages.pages.github.title',
                'validation' => 'strict'
            ],
            'plugins.aboutme.social_pages.pages.github.position' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Position',
                'default' => 1,
                'validate' => [
                    'type' => 'Number'
                ],
                'name' => 'plugins.aboutme.social_pages.pages.github.position',
                'validation' => 'strict'
            ],
            'plugins.aboutme.github' => [
                'type' => 'tab',
                'name' => 'plugins.aboutme.github',
                'validation' => 'strict'
            ],
            'plugins.aboutme.social_pages.pages.linkedin' => [
                'type' => '_parent',
                'name' => 'plugins.aboutme.social_pages.pages.linkedin',
                'form_field' => false
            ],
            'plugins.aboutme.social_pages.pages.linkedin.icon' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'Font Awesome Icon',
                'default' => 'linkedin',
                'validate' => [
                    'type' => 'text'
                ],
                'name' => 'plugins.aboutme.social_pages.pages.linkedin.icon',
                'validation' => 'strict'
            ],
            'plugins.aboutme.social_pages.pages.linkedin.url' => [
                'type' => 'url',
                'label' => 'Your LinkedIn Profile URL',
                'validate' => [
                    'type' => 'url'
                ],
                'name' => 'plugins.aboutme.social_pages.pages.linkedin.url',
                'validation' => 'strict'
            ],
            'plugins.aboutme.social_pages.pages.linkedin.title' => [
                'type' => 'text',
                'label' => 'Title when icon hovered (optional)',
                'default' => 'LinkedIn',
                'validate' => [
                    'type' => 'text'
                ],
                'name' => 'plugins.aboutme.social_pages.pages.linkedin.title',
                'validation' => 'strict'
            ],
            'plugins.aboutme.social_pages.pages.linkedin.position' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Position',
                'default' => 1,
                'validate' => [
                    'type' => 'Number'
                ],
                'name' => 'plugins.aboutme.social_pages.pages.linkedin.position',
                'validation' => 'strict'
            ],
            'plugins.aboutme.linkedin' => [
                'type' => 'tab',
                'name' => 'plugins.aboutme.linkedin',
                'validation' => 'strict'
            ],
            'plugins.aboutme.social_pages.pages.instagram' => [
                'type' => '_parent',
                'name' => 'plugins.aboutme.social_pages.pages.instagram',
                'form_field' => false
            ],
            'plugins.aboutme.social_pages.pages.instagram.icon' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'Font Awesome Icon',
                'default' => 'instagram',
                'validate' => [
                    'type' => 'text'
                ],
                'name' => 'plugins.aboutme.social_pages.pages.instagram.icon',
                'validation' => 'strict'
            ],
            'plugins.aboutme.social_pages.pages.instagram.url' => [
                'type' => 'url',
                'label' => 'Your Instagram Profile URL',
                'validate' => [
                    'type' => 'url'
                ],
                'name' => 'plugins.aboutme.social_pages.pages.instagram.url',
                'validation' => 'strict'
            ],
            'plugins.aboutme.social_pages.pages.instagram.title' => [
                'type' => 'text',
                'label' => 'Title when icon hovered (optional)',
                'default' => 'Instagram',
                'validate' => [
                    'type' => 'text'
                ],
                'name' => 'plugins.aboutme.social_pages.pages.instagram.title',
                'validation' => 'strict'
            ],
            'plugins.aboutme.social_pages.pages.instagram.position' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Position',
                'default' => 1,
                'validate' => [
                    'type' => 'Number'
                ],
                'name' => 'plugins.aboutme.social_pages.pages.instagram.position',
                'validation' => 'strict'
            ],
            'plugins.aboutme.instagram' => [
                'type' => 'tab',
                'name' => 'plugins.aboutme.instagram',
                'validation' => 'strict'
            ],
            'plugins.aboutme.social_pages_types' => [
                'type' => 'tabs',
                'active' => 1,
                'name' => 'plugins.aboutme.social_pages_types',
                'validation' => 'strict'
            ],
            'plugins.admin' => [
                'form' => [
                    'validation' => 'loose'
                ],
                'type' => '_root',
                'form_field' => false
            ],
            'plugins.admin.Basics' => [
                'type' => 'section',
                'underline' => false,
                'name' => 'plugins.admin.Basics',
                'validation' => 'loose'
            ],
            'plugins.admin.enabled' => [
                'type' => 'hidden',
                'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.enabled',
                'validation' => 'loose'
            ],
            'plugins.admin.cache_enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ADMIN_CACHING',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.cache_enabled',
                'validation' => 'loose'
            ],
            'plugins.admin.route' => [
                'type' => 'text',
                'label' => 'Administrator path',
                'size' => 'medium',
                'name' => 'plugins.admin.route',
                'validation' => 'loose'
            ],
            'plugins.admin.logo_text' => [
                'type' => 'text',
                'label' => 'Logo text',
                'size' => 'medium',
                'name' => 'plugins.admin.logo_text',
                'validation' => 'loose'
            ],
            'plugins.admin.content_padding' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CONTENT_PADDING',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.content_padding',
                'validation' => 'loose'
            ],
            'plugins.admin.body_classes' => [
                'type' => 'text',
                'label' => 'Body classes',
                'size' => 'medium',
                'name' => 'plugins.admin.body_classes',
                'validation' => 'loose'
            ],
            'plugins.admin.sidebar' => [
                'type' => '_parent',
                'name' => 'plugins.admin.sidebar',
                'form_field' => false
            ],
            'plugins.admin.sidebar.activate' => [
                'type' => 'select',
                'label' => 'Sidebar Activation',
                'size' => 'small',
                'default' => 'tab',
                'options' => [
                    'tab' => 'Tab',
                    'hover' => 'Hover'
                ],
                'name' => 'plugins.admin.sidebar.activate',
                'validation' => 'loose'
            ],
            'plugins.admin.sidebar.hover_delay' => [
                'type' => 'text',
                'size' => 'x-small',
                'append' => 'millseconds',
                'label' => 'Hover delay',
                'default' => 500,
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'plugins.admin.sidebar.hover_delay',
                'validation' => 'loose'
            ],
            'plugins.admin.sidebar.size' => [
                'type' => 'select',
                'label' => 'Sidebar Size',
                'size' => 'medium',
                'default' => 'auto',
                'options' => [
                    'auto' => 'Automatic width',
                    'small' => 'Small width'
                ],
                'name' => 'plugins.admin.sidebar.size',
                'validation' => 'loose'
            ],
            'plugins.admin.theme' => [
                'type' => 'hidden',
                'label' => 'Theme',
                'default' => 'grav',
                'name' => 'plugins.admin.theme',
                'validation' => 'loose'
            ],
            'plugins.admin.edit_mode' => [
                'type' => 'select',
                'label' => 'Edit mode',
                'size' => 'small',
                'default' => 'normal',
                'options' => [
                    'normal' => 'Normal',
                    'expert' => 'Expert'
                ],
                'name' => 'plugins.admin.edit_mode',
                'validation' => 'loose'
            ],
            'plugins.admin.google_fonts' => [
                'type' => 'toggle',
                'label' => 'Use Google Fonts',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.google_fonts',
                'validation' => 'loose'
            ],
            'plugins.admin.show_beta_msg' => [
                'type' => 'hidden',
                'name' => 'plugins.admin.show_beta_msg',
                'validation' => 'loose'
            ],
            'plugins.admin.show_github_msg' => [
                'type' => 'toggle',
                'label' => 'Show GitHub Link',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.show_github_msg',
                'validation' => 'loose'
            ],
            'plugins.admin.enable_auto_updates_check' => [
                'type' => 'toggle',
                'label' => 'Automatically check for updates',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.enable_auto_updates_check',
                'validation' => 'loose'
            ],
            'plugins.admin.session' => [
                'type' => '_parent',
                'name' => 'plugins.admin.session',
                'form_field' => false
            ],
            'plugins.admin.session.timeout' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'Session Timeout',
                'append' => 'secs',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'plugins.admin.session.timeout',
                'validation' => 'loose'
            ],
            'plugins.admin.warnings' => [
                'type' => '_parent',
                'name' => 'plugins.admin.warnings',
                'form_field' => false
            ],
            'plugins.admin.warnings.delete_page' => [
                'type' => 'toggle',
                'label' => 'Warn on page delete',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.warnings.delete_page',
                'validation' => 'loose'
            ],
            'plugins.admin.Dashboard' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'plugins.admin.Dashboard',
                'validation' => 'loose'
            ],
            'plugins.admin.widgets' => [
                'type' => '_parent',
                'name' => 'plugins.admin.widgets',
                'form_field' => false
            ],
            'plugins.admin.widgets.dashboard-maintenance' => [
                'type' => 'toggle',
                'label' => 'Maintenance Widget',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.widgets.dashboard-maintenance',
                'validation' => 'loose'
            ],
            'plugins.admin.widgets.dashboard-statistics' => [
                'type' => 'toggle',
                'label' => 'Statistics Widget',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.widgets.dashboard-statistics',
                'validation' => 'loose'
            ],
            'plugins.admin.widgets.dashboard-notifications' => [
                'type' => 'toggle',
                'label' => 'Notifications Feed Widget',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.widgets.dashboard-notifications',
                'validation' => 'loose'
            ],
            'plugins.admin.widgets.dashboard-feed' => [
                'type' => 'toggle',
                'label' => 'News Feed Widget',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.widgets.dashboard-feed',
                'validation' => 'loose'
            ],
            'plugins.admin.widgets.dashboard-pages' => [
                'type' => 'toggle',
                'label' => 'Latest Pages Widget',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.widgets.dashboard-pages',
                'validation' => 'loose'
            ],
            'plugins.admin.Notifications' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'plugins.admin.Notifications',
                'validation' => 'loose'
            ],
            'plugins.admin.notifications' => [
                'type' => '_parent',
                'name' => 'plugins.admin.notifications',
                'form_field' => false
            ],
            'plugins.admin.notifications.feed' => [
                'type' => 'toggle',
                'label' => 'Feed Notifications',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.notifications.feed',
                'validation' => 'loose'
            ],
            'plugins.admin.notifications.dashboard' => [
                'type' => 'toggle',
                'label' => 'Dashboard Notifications',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.notifications.dashboard',
                'validation' => 'loose'
            ],
            'plugins.admin.notifications.plugins' => [
                'type' => 'toggle',
                'label' => 'Plugins Notifications',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.notifications.plugins',
                'validation' => 'loose'
            ],
            'plugins.admin.notifications.themes' => [
                'type' => 'toggle',
                'label' => 'Themes Notifications',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.notifications.themes',
                'validation' => 'loose'
            ],
            'plugins.admin.Popularity' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'plugins.admin.Popularity',
                'validation' => 'loose'
            ],
            'plugins.admin.popularity' => [
                'type' => '_parent',
                'name' => 'plugins.admin.popularity',
                'form_field' => false
            ],
            'plugins.admin.popularity.enabled' => [
                'type' => 'toggle',
                'label' => 'Visitor tracking',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.popularity.enabled',
                'validation' => 'loose'
            ],
            'plugins.admin.dashboard' => [
                'type' => '_parent',
                'name' => 'plugins.admin.dashboard',
                'form_field' => false
            ],
            'plugins.admin.dashboard.days_of_stats' => [
                'type' => 'text',
                'label' => 'Days of stats',
                'append' => 'days',
                'size' => 'x-small',
                'default' => 7,
                'validate' => [
                    'type' => 'int'
                ],
                'name' => 'plugins.admin.dashboard.days_of_stats',
                'validation' => 'loose'
            ],
            'plugins.admin.popularity.ignore' => [
                'type' => 'array',
                'label' => 'Ignore',
                'size' => 'large',
                'default' => [
                    0 => '/test*',
                    1 => '/modular'
                ],
                'value_only' => true,
                'name' => 'plugins.admin.popularity.ignore',
                'validation' => 'loose'
            ],
            'plugins.admin.popularity.history' => [
                'type' => '_parent',
                'name' => 'plugins.admin.popularity.history',
                'form_field' => false
            ],
            'plugins.admin.popularity.history.daily' => [
                'type' => 'hidden',
                'label' => 'Daily history',
                'default' => 30,
                'name' => 'plugins.admin.popularity.history.daily',
                'validation' => 'loose'
            ],
            'plugins.admin.popularity.history.monthly' => [
                'type' => 'hidden',
                'label' => 'Monthly history',
                'default' => 12,
                'name' => 'plugins.admin.popularity.history.monthly',
                'validation' => 'loose'
            ],
            'plugins.admin.popularity.history.visitors' => [
                'type' => 'hidden',
                'label' => 'Visitors history',
                'default' => 20,
                'name' => 'plugins.admin.popularity.history.visitors',
                'validation' => 'loose'
            ],
            'plugins.archives' => [
                'form' => [
                    'validation' => 'strict'
                ],
                'type' => '_root',
                'form_field' => false
            ],
            'plugins.archives.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.archives.enabled',
                'validation' => 'strict'
            ],
            'plugins.archives.built_in_css' => [
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
                ],
                'name' => 'plugins.archives.built_in_css',
                'validation' => 'strict'
            ],
            'plugins.archives.date_display_format' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Date Format',
                'default' => 'jS M Y',
                'options' => [
                    'F jS Y' => 'January 1st 2014',
                    'l jS of F' => 'Monday 1st of January',
                    'D, m M Y' => 'Mon, 01 Jan 2014',
                    'd-m-y' => '01-01-14',
                    'jS M Y' => '10th Feb 2014'
                ],
                'name' => 'plugins.archives.date_display_format',
                'validation' => 'strict'
            ],
            'plugins.archives.show_count' => [
                'type' => 'toggle',
                'label' => 'Show Count',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.archives.show_count',
                'validation' => 'strict'
            ],
            'plugins.archives.limit' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Count Limit',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'plugins.archives.limit',
                'validation' => 'strict'
            ],
            'plugins.archives.order' => [
                'type' => '_parent',
                'name' => 'plugins.archives.order',
                'form_field' => false
            ],
            'plugins.archives.order.dir' => [
                'type' => 'toggle',
                'label' => 'Order Direction',
                'highlight' => 'asc',
                'default' => 'desc',
                'options' => [
                    'asc' => 'Ascending',
                    'desc' => 'Descending'
                ],
                'name' => 'plugins.archives.order.dir',
                'validation' => 'strict'
            ],
            'plugins.archives.order.by' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Order Type',
                'options' => [
                    'default' => 'Default - based on folder name',
                    'folder' => 'Folder - based on prefix-less folder name',
                    'title' => 'Title - based on title field in header',
                    'date' => 'Date - based on date field in header'
                ],
                'name' => 'plugins.archives.order.by',
                'validation' => 'strict'
            ],
            'plugins.archives.filters' => [
                'type' => '_parent',
                'name' => 'plugins.archives.filters',
                'form_field' => false
            ],
            'plugins.archives.filters.category' => [
                'type' => 'selectize',
                'label' => 'Category filter',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'plugins.archives.filters.category',
                'validation' => 'strict'
            ],
            'plugins.archives.filter_combinator' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Filter Combinator',
                'default' => 'and',
                'options' => [
                    'and' => 'And - Boolean &&',
                    'or' => 'Or - Boolean ||'
                ],
                'name' => 'plugins.archives.filter_combinator',
                'validation' => 'strict'
            ],
            'plugins.breadcrumbs' => [
                'form' => [
                    'validation' => 'strict'
                ],
                'type' => '_root',
                'form_field' => false
            ],
            'plugins.breadcrumbs.enabled' => [
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
                ],
                'name' => 'plugins.breadcrumbs.enabled',
                'validation' => 'strict'
            ],
            'plugins.breadcrumbs.show_all' => [
                'type' => 'toggle',
                'label' => 'Show even with one item',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.breadcrumbs.show_all',
                'validation' => 'strict'
            ],
            'plugins.breadcrumbs.built_in_css' => [
                'type' => 'toggle',
                'label' => 'Use built in CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.breadcrumbs.built_in_css',
                'validation' => 'strict'
            ],
            'plugins.breadcrumbs.include_home' => [
                'type' => 'toggle',
                'label' => 'Include Home',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.breadcrumbs.include_home',
                'validation' => 'strict'
            ],
            'plugins.breadcrumbs.icon_home' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'Icon Home',
                'default' => '',
                'name' => 'plugins.breadcrumbs.icon_home',
                'validation' => 'strict'
            ],
            'plugins.breadcrumbs.icon_divider_classes' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'Icon Divider Classes',
                'default' => 'fa fa-angle-right',
                'name' => 'plugins.breadcrumbs.icon_divider_classes',
                'validation' => 'strict'
            ],
            'plugins.breadcrumbs.link_trailing' => [
                'type' => 'toggle',
                'label' => 'Link Trailing',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.breadcrumbs.link_trailing',
                'validation' => 'strict'
            ],
            'plugins.comments' => [
                'form' => [
                    'validation' => 'loose'
                ],
                'type' => '_root',
                'form_field' => false
            ],
            'plugins.comments.enabled' => [
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
                ],
                'name' => 'plugins.comments.enabled',
                'validation' => 'loose'
            ],
            'plugins.email' => [
                'form' => [
                    'validation' => 'loose'
                ],
                'type' => '_root',
                'form_field' => false
            ],
            'plugins.email.enabled' => [
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
                ],
                'name' => 'plugins.email.enabled',
                'validation' => 'loose'
            ],
            'plugins.email.mailer' => [
                'type' => '_parent',
                'name' => 'plugins.email.mailer',
                'form_field' => false
            ],
            'plugins.email.mailer.engine' => [
                'type' => 'select',
                'label' => 'Mail Engine',
                'size' => 'medium',
                'options' => [
                    'none' => 'Disabled',
                    'smtp' => 'SMTP',
                    'sendmail' => 'Sendmail',
                    'mail' => 'PHP Mail'
                ],
                'name' => 'plugins.email.mailer.engine',
                'validation' => 'loose'
            ],
            'plugins.email.content_type' => [
                'type' => 'select',
                'label' => 'Content type',
                'size' => 'medium',
                'default' => 'text/html',
                'options' => [
                    'text/plain' => 'Plain text',
                    'text/html' => 'HTML'
                ],
                'name' => 'plugins.email.content_type',
                'validation' => 'loose'
            ],
            'plugins.email.from' => [
                'type' => 'email',
                'size' => 'medium',
                'label' => 'Email from',
                'validate' => [
                    'required' => true,
                    'type' => 'email'
                ],
                'name' => 'plugins.email.from',
                'validation' => 'loose'
            ],
            'plugins.email.from_name' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'Email from name',
                'name' => 'plugins.email.from_name',
                'validation' => 'loose'
            ],
            'plugins.email.to' => [
                'type' => 'email',
                'size' => 'medium',
                'label' => 'Email to',
                'multiple' => true,
                'validate' => [
                    'required' => true,
                    'type' => 'email'
                ],
                'name' => 'plugins.email.to',
                'validation' => 'loose'
            ],
            'plugins.email.to_name' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'Email to name',
                'name' => 'plugins.email.to_name',
                'validation' => 'loose'
            ],
            'plugins.email.mailer.smtp' => [
                'type' => '_parent',
                'name' => 'plugins.email.mailer.smtp',
                'form_field' => false
            ],
            'plugins.email.mailer.smtp.server' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'SMTP server',
                'name' => 'plugins.email.mailer.smtp.server',
                'validation' => 'loose'
            ],
            'plugins.email.mailer.smtp.port' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'SMTP port',
                'validate' => [
                    'type' => 'number',
                    'min' => 1,
                    'max' => 65535
                ],
                'name' => 'plugins.email.mailer.smtp.port',
                'validation' => 'loose'
            ],
            'plugins.email.mailer.smtp.encryption' => [
                'type' => 'select',
                'size' => 'medium',
                'label' => 'SMTP encryption',
                'options' => [
                    'none' => 'None',
                    'ssl' => 'SSL',
                    'tls' => 'TLS'
                ],
                'name' => 'plugins.email.mailer.smtp.encryption',
                'validation' => 'loose'
            ],
            'plugins.email.mailer.smtp.user' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'SMTP login name',
                'name' => 'plugins.email.mailer.smtp.user',
                'validation' => 'loose'
            ],
            'plugins.email.mailer.smtp.password' => [
                'type' => 'password',
                'size' => 'medium',
                'label' => 'SMTP password',
                'name' => 'plugins.email.mailer.smtp.password',
                'validation' => 'loose'
            ],
            'plugins.email.mailer.sendmail' => [
                'type' => '_parent',
                'name' => 'plugins.email.mailer.sendmail',
                'form_field' => false
            ],
            'plugins.email.mailer.sendmail.bin' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'Path to sendmail',
                'name' => 'plugins.email.mailer.sendmail.bin',
                'validation' => 'loose'
            ],
            'plugins.email.debug' => [
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
                ],
                'name' => 'plugins.email.debug',
                'validation' => 'loose'
            ],
            'plugins.error' => [
                'form' => [
                    'validation' => 'strict'
                ],
                'type' => '_root',
                'form_field' => false
            ],
            'plugins.error.enabled' => [
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
                ],
                'name' => 'plugins.error.enabled',
                'validation' => 'strict'
            ],
            'plugins.error.routes' => [
                'type' => '_parent',
                'name' => 'plugins.error.routes',
                'form_field' => false
            ],
            'plugins.error.routes.404' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => '404 Route',
                'default' => '/error',
                'name' => 'plugins.error.routes.404',
                'validation' => 'strict'
            ],
            'plugins.feed' => [
                'form' => [
                    'validation' => 'strict'
                ],
                'type' => '_root',
                'form_field' => false
            ],
            'plugins.feed.enabled' => [
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
                ],
                'name' => 'plugins.feed.enabled',
                'validation' => 'strict'
            ],
            'plugins.feed.limit' => [
                'type' => 'text',
                'label' => 'Feed count',
                'validate' => [
                    'type' => 'number',
                    'min' => 10,
                    'max' => 1000
                ],
                'name' => 'plugins.feed.limit',
                'validation' => 'strict'
            ],
            'plugins.feed.description' => [
                'type' => 'textarea',
                'label' => 'Description',
                'name' => 'plugins.feed.description',
                'validation' => 'strict'
            ],
            'plugins.feed.lang' => [
                'type' => 'text',
                'label' => 'Feed language code',
                'default' => 'en',
                'validate' => [
                    'pattern' => '[a-zA-Z]{2,3}(-[a-zA-Z]{2,3})?'
                ],
                'name' => 'plugins.feed.lang',
                'validation' => 'strict'
            ],
            'plugins.feed.length' => [
                'type' => 'text',
                'label' => 'Feed Length',
                'validate' => [
                    'type' => 'number',
                    'min' => 10,
                    'max' => 10000
                ],
                'name' => 'plugins.feed.length',
                'validation' => 'strict'
            ],
            'plugins.form' => [
                'form' => [
                    'validation' => 'strict'
                ],
                'type' => '_root',
                'form_field' => false
            ],
            'plugins.form.enabled' => [
                'type' => 'hidden',
                'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.form.enabled',
                'validation' => 'strict'
            ],
            'plugins.form.built_in_css' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_FORM.USE_BUILT_IN_CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.form.built_in_css',
                'validation' => 'strict'
            ],
            'plugins.form.general' => [
                'type' => 'section',
                'name' => 'plugins.form.general',
                'validation' => 'strict'
            ],
            'plugins.form.files' => [
                'type' => 'section',
                'name' => 'plugins.form.files',
                'validation' => 'strict'
            ],
            'plugins.form.files.multiple' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_FORM.ALLOW_MULTIPLE',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.form.files.multiple',
                'validation' => 'strict'
            ],
            'plugins.form.files.destination' => [
                'type' => 'text',
                'label' => 'PLUGIN_FORM.DESTINATION',
                'default' => '@self',
                'name' => 'plugins.form.files.destination',
                'validation' => 'strict'
            ],
            'plugins.form.files.accept' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_FORM.ACCEPT',
                'classes' => 'fancy',
                'default' => [
                    0 => 'image/*'
                ],
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'plugins.form.files.accept',
                'validation' => 'strict'
            ],
            'plugins.form.recaptcha' => [
                'type' => 'section',
                'name' => 'plugins.form.recaptcha',
                'validation' => 'strict'
            ],
            'plugins.form.recaptcha.site_key' => [
                'type' => 'text',
                'label' => 'PLUGIN_FORM.RECAPTCHA_SITE_KEY',
                'default' => '',
                'name' => 'plugins.form.recaptcha.site_key',
                'validation' => 'strict'
            ],
            'plugins.form.recaptcha.secret_key' => [
                'type' => 'text',
                'label' => 'PLUGIN_FORM.RECAPTCHA_SECRET_KEY',
                'default' => '',
                'name' => 'plugins.form.recaptcha.secret_key',
                'validation' => 'strict'
            ],
            'plugins.ganalytics' => [
                'form' => [
                    'validation' => 'strict'
                ],
                'type' => '_root',
                'form_field' => false
            ],
            'plugins.ganalytics.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_GANALYTICS.PLUGIN_STATUS',
                'hightlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_GANALYTICS.ENABLED',
                    0 => 'PLUGIN_GANALYTICS.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.ganalytics.enabled',
                'validation' => 'strict'
            ],
            'plugins.ganalytics.trackingId' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_GANALYTICS.TACKING_ID',
                'validate' => [
                    'required' => true
                ],
                'name' => 'plugins.ganalytics.trackingId',
                'validation' => 'strict'
            ],
            'plugins.ganalytics.position' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_GANALYTICS.POSITION',
                'hightlight' => 1,
                'default' => 'head',
                'options' => [
                    'head' => 'PLUGIN_GANALYTICS.POSITION_HEAD',
                    'body' => 'PLUGIN_GANALYTICS.POSITION_BODY'
                ],
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.ganalytics.position',
                'validation' => 'strict'
            ],
            'plugins.ganalytics.objectName' => [
                'type' => 'text',
                'label' => 'PLUGIN_GANALYTICS.OBJECT_NAME',
                'size' => 'small',
                'default' => 'ga',
                'name' => 'plugins.ganalytics.objectName',
                'validation' => 'strict'
            ],
            'plugins.ganalytics.async' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_GANALYTICS.ASYNC',
                'hightlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_GANALYTICS._YES',
                    0 => 'PLUGIN_GANALYTICS._NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.ganalytics.async',
                'validation' => 'strict'
            ],
            'plugins.ganalytics.forceSsl' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_GANALYTICS.FORCE_SSL',
                'hightlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_GANALYTICS._YES',
                    0 => 'PLUGIN_GANALYTICS._NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.ganalytics.forceSsl',
                'validation' => 'strict'
            ],
            'plugins.ganalytics.anonymizeIp' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_GANALYTICS.ANONYMIZE_IP',
                'hightlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_GANALYTICS._YES',
                    0 => 'PLUGIN_GANALYTICS._NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.ganalytics.anonymizeIp',
                'validation' => 'strict'
            ],
            'plugins.ganalytics.blockedIps' => [
                'type' => 'array',
                'size' => 'large',
                'label' => 'PLUGIN_GANALYTICS.BLOCKED_IPS',
                'value_only' => true,
                'name' => 'plugins.ganalytics.blockedIps',
                'validation' => 'strict'
            ],
            'plugins.ganalytics.advanced' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'plugins.ganalytics.advanced',
                'validation' => 'strict'
            ],
            'plugins.ganalytics.configuration' => [
                'type' => 'tab',
                'name' => 'plugins.ganalytics.configuration',
                'validation' => 'strict'
            ],
            'plugins.ganalytics.cookieConfig' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_GANALYTICS.COOKIE_CONFIG',
                'hightlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_GANALYTICS._YES',
                    0 => 'PLUGIN_GANALYTICS._NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.ganalytics.cookieConfig',
                'validation' => 'strict'
            ],
            'plugins.ganalytics.cookieName' => [
                'type' => 'text',
                'label' => 'PLUGIN_GANALYTICS.COOKIE_NAME',
                'size' => 'small',
                'default' => '_ga',
                'name' => 'plugins.ganalytics.cookieName',
                'validation' => 'strict'
            ],
            'plugins.ganalytics.cookieDomain' => [
                'type' => 'text',
                'label' => 'PLUGIN_GANALYTICS.COOKIE_DOMAIN',
                'size' => 'medium',
                'name' => 'plugins.ganalytics.cookieDomain',
                'validation' => 'strict'
            ],
            'plugins.ganalytics.cookieExpires' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_GANALYTICS.COOKIE_EXPIRES',
                'append' => 'PLUGIN_GANALYTICS.SECONDS',
                'default' => 63072000,
                'validate' => [
                    'type' => 'number',
                    'min' => 0
                ],
                'name' => 'plugins.ganalytics.cookieExpires',
                'validation' => 'strict'
            ],
            'plugins.ganalytics.cookie' => [
                'type' => 'tab',
                'name' => 'plugins.ganalytics.cookie',
                'validation' => 'strict'
            ],
            'plugins.ganalytics.debugStatus' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_GANALYTICS.DEBUG_STATUS',
                'hightlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_GANALYTICS.ENABLED',
                    0 => 'PLUGIN_GANALYTICS.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.ganalytics.debugStatus',
                'validation' => 'strict'
            ],
            'plugins.ganalytics.debugTrace' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_GANALYTICS.DEBUG_TRACE',
                'hightlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_GANALYTICS.ENABLED',
                    0 => 'PLUGIN_GANALYTICS.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.ganalytics.debugTrace',
                'validation' => 'strict'
            ],
            'plugins.ganalytics.debug' => [
                'type' => 'tab',
                'name' => 'plugins.ganalytics.debug',
                'validation' => 'strict'
            ],
            'plugins.ganalytics.tabs' => [
                'type' => 'tabs',
                'active' => 1,
                'class' => 'subtle',
                'name' => 'plugins.ganalytics.tabs',
                'validation' => 'strict'
            ],
            'plugins.login' => [
                'form' => [
                    'validation' => 'loose'
                ],
                'type' => '_root',
                'form_field' => false
            ],
            'plugins.login.enabled' => [
                'type' => 'hidden',
                'label' => 'PLUGIN_LOGIN.PLUGIN_STATUS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.enabled',
                'validation' => 'loose'
            ],
            'plugins.login.built_in_css' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.BUILTIN_CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.built_in_css',
                'validation' => 'loose'
            ],
            'plugins.login.route' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_LOGIN.ROUTE',
                'name' => 'plugins.login.route',
                'validation' => 'loose'
            ],
            'plugins.login.redirect_after_login' => [
                'type' => 'text',
                'label' => 'PLUGIN_LOGIN.REDIRECT_AFTER_LOGIN',
                'name' => 'plugins.login.redirect_after_login',
                'validation' => 'loose'
            ],
            'plugins.login.route_forgot' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_LOGIN.ROUTE_FORGOT',
                'name' => 'plugins.login.route_forgot',
                'validation' => 'loose'
            ],
            'plugins.login.route_reset' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_LOGIN.ROUTE_RESET',
                'name' => 'plugins.login.route_reset',
                'validation' => 'loose'
            ],
            'plugins.login.route_profile' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_LOGIN.ROUTE_PROFILE',
                'name' => 'plugins.login.route_profile',
                'validation' => 'loose'
            ],
            'plugins.login.parent_acl' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.USE_PARENT_ACL_LABEL',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.parent_acl',
                'validation' => 'loose'
            ],
            'plugins.login.protect_protected_page_media' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.PROTECT_PROTECTED_PAGE_MEDIA_LABEL',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.protect_protected_page_media',
                'validation' => 'loose'
            ],
            'plugins.login.rememberme' => [
                'type' => 'section',
                'name' => 'plugins.login.rememberme',
                'validation' => 'loose'
            ],
            'plugins.login.rememberme.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ENABLED',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.rememberme.enabled',
                'validation' => 'loose'
            ],
            'plugins.login.rememberme.timeout' => [
                'type' => 'text',
                'size' => 'small',
                'default' => 604800,
                'label' => 'PLUGIN_ADMIN.TIMEOUT',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'plugins.login.rememberme.timeout',
                'validation' => 'loose'
            ],
            'plugins.login.rememberme.name' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.NAME',
                'name' => 'plugins.login.rememberme.name',
                'validation' => 'loose'
            ],
            'plugins.login.login' => [
                'type' => 'tab',
                'name' => 'plugins.login.login',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration' => [
                'type' => '_parent',
                'name' => 'plugins.login.user_registration',
                'form_field' => false
            ],
            'plugins.login.user_registration.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ENABLED',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.user_registration.enabled',
                'validation' => 'loose'
            ],
            'plugins.login.route_register' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_LOGIN.ROUTE_REGISTER',
                'name' => 'plugins.login.route_register',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.redirect_after_registration' => [
                'type' => 'text',
                'label' => 'PLUGIN_LOGIN.REDIRECT_AFTER_REGISTRATION',
                'name' => 'plugins.login.user_registration.redirect_after_registration',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.redirect_after_activation' => [
                'type' => 'text',
                'label' => 'PLUGIN_LOGIN.REDIRECT_AFTER_ACTIVATION',
                'name' => 'plugins.login.user_registration.redirect_after_activation',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.fields' => [
                'type' => 'array',
                'value_only' => true,
                'label' => 'PLUGIN_LOGIN.REGISTRATION_FIELDS',
                'name' => 'plugins.login.user_registration.fields',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.default_values' => [
                'type' => 'array',
                'label' => 'PLUGIN_LOGIN.DEFAULT_VALUES',
                'name' => 'plugins.login.user_registration.default_values',
                'validation' => 'loose'
            ],
            'plugins.login.registration_fields' => [
                'type' => 'section',
                'name' => 'plugins.login.registration_fields',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.groups' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.GROUPS',
                '@data-options' => '\\Grav\\User\\Groups::groups',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'plugins.login.user_registration.groups',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.access' => [
                'type' => '_parent',
                'name' => 'plugins.login.user_registration.access',
                'form_field' => false
            ],
            'plugins.login.user_registration.access.site' => [
                'type' => 'array',
                'label' => 'PLUGIN_ADMIN.SITE_ACCESS',
                'multiple' => false,
                'validate' => [
                    'type' => 'array'
                ],
                'name' => 'plugins.login.user_registration.access.site',
                'validation' => 'loose'
            ],
            'plugins.login.access_levels' => [
                'type' => 'section',
                'security' => 'admin.super',
                'name' => 'plugins.login.access_levels',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.options' => [
                'type' => '_parent',
                'name' => 'plugins.login.user_registration.options',
                'form_field' => false
            ],
            'plugins.login.user_registration.options.validate_password1_and_password2' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.VALIDATE_PASSWORD1_AND_PASSWORD2',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.user_registration.options.validate_password1_and_password2',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.options.set_user_disabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.SET_USER_DISABLED',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.user_registration.options.set_user_disabled',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.options.login_after_registration' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.LOGIN_AFTER_REGISTRATION',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.user_registration.options.login_after_registration',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.options.send_activation_email' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.SEND_ACTIVATION_EMAIL',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.user_registration.options.send_activation_email',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.options.send_notification_email' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.SEND_NOTIFICATION_EMAIL',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.user_registration.options.send_notification_email',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.options.send_welcome_email' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.SEND_WELCOME_EMAIL',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'name' => 'plugins.login.user_registration.options.send_welcome_email',
                'validation' => 'loose'
            ],
            'plugins.login.options' => [
                'type' => 'section',
                'name' => 'plugins.login.options',
                'validation' => 'loose'
            ],
            'plugins.login.registration' => [
                'type' => 'tab',
                'name' => 'plugins.login.registration',
                'validation' => 'loose'
            ],
            'plugins.login.max_pw_resets_count' => [
                'type' => 'number',
                'size' => 'x-small',
                'label' => 'PLUGIN_LOGIN.MAX_RESETS_COUNT',
                'append' => 'PLUGIN_LOGIN.RESETS',
                'validate' => [
                    'type' => 'number',
                    'min' => 0
                ],
                'name' => 'plugins.login.max_pw_resets_count',
                'validation' => 'loose'
            ],
            'plugins.login.max_pw_resets_interval' => [
                'type' => 'number',
                'size' => 'x-small',
                'label' => 'PLUGIN_LOGIN.MAX_RESETS_INTERVAL',
                'append' => 'PLUGIN_LOGIN.SECONDS',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'plugins.login.max_pw_resets_interval',
                'validation' => 'loose'
            ],
            'plugins.login.max_login_count' => [
                'type' => 'number',
                'size' => 'x-small',
                'label' => 'PLUGIN_LOGIN.MAX_LOGINS_COUNT',
                'append' => 'PLUGIN_LOGIN.ATTEMPTS',
                'validate' => [
                    'type' => 'number',
                    'min' => 0
                ],
                'name' => 'plugins.login.max_login_count',
                'validation' => 'loose'
            ],
            'plugins.login.max_login_interval' => [
                'type' => 'number',
                'size' => 'x-small',
                'label' => 'PLUGIN_LOGIN.MAX_LOGINS_INTERVAL',
                'append' => 'PLUGIN_LOGIN.SECONDS',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'plugins.login.max_login_interval',
                'validation' => 'loose'
            ],
            'plugins.login.Security' => [
                'type' => 'tab',
                'name' => 'plugins.login.Security',
                'validation' => 'loose'
            ],
            'plugins.login.tabs' => [
                'type' => 'tabs',
                'active' => 1,
                'class' => 'subtle',
                'name' => 'plugins.login.tabs',
                'validation' => 'loose'
            ],
            'plugins.pagination' => [
                'form' => [
                    'validation' => 'strict'
                ],
                'type' => '_root',
                'form_field' => false
            ],
            'plugins.pagination.enabled' => [
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
                ],
                'name' => 'plugins.pagination.enabled',
                'validation' => 'strict'
            ],
            'plugins.pagination.delta' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Delta',
                'default' => 0,
                'validate' => [
                    'type' => 'number',
                    'min' => 0
                ],
                'name' => 'plugins.pagination.delta',
                'validation' => 'strict'
            ],
            'plugins.pagination.built_in_css' => [
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
                ],
                'name' => 'plugins.pagination.built_in_css',
                'validation' => 'strict'
            ],
            'plugins.problems' => [
                'form' => [
                    'validation' => 'strict'
                ],
                'type' => '_root',
                'form_field' => false
            ],
            'plugins.problems.enabled' => [
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
                ],
                'name' => 'plugins.problems.enabled',
                'validation' => 'strict'
            ],
            'plugins.problems.built_in_css' => [
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
                ],
                'name' => 'plugins.problems.built_in_css',
                'validation' => 'strict'
            ],
            'plugins.simplesearch' => [
                'form' => [
                    'validation' => 'strict'
                ],
                'type' => '_root',
                'form_field' => false
            ],
            'plugins.simplesearch.enabled' => [
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
                ],
                'name' => 'plugins.simplesearch.enabled',
                'validation' => 'strict'
            ],
            'plugins.simplesearch.built_in_css' => [
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
                ],
                'name' => 'plugins.simplesearch.built_in_css',
                'validation' => 'strict'
            ],
            'plugins.simplesearch.display_button' => [
                'type' => 'toggle',
                'label' => 'Display Search Button',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.simplesearch.display_button',
                'validation' => 'strict'
            ],
            'plugins.simplesearch.ignore_accented_characters' => [
                'type' => 'toggle',
                'label' => 'Ignore accented characters',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.simplesearch.ignore_accented_characters',
                'validation' => 'strict'
            ],
            'plugins.simplesearch.min_query_length' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Minimum query length',
                'validate' => [
                    'type' => 'number',
                    'min' => 0
                ],
                'name' => 'plugins.simplesearch.min_query_length',
                'validation' => 'strict'
            ],
            'plugins.simplesearch.route' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'Route',
                'default' => '/random',
                'name' => 'plugins.simplesearch.route',
                'validation' => 'strict'
            ],
            'plugins.simplesearch.template' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'Template',
                'default' => 'simplesearch_results',
                'name' => 'plugins.simplesearch.template',
                'validation' => 'strict'
            ],
            'plugins.simplesearch.filters' => [
                'type' => '_parent',
                'name' => 'plugins.simplesearch.filters',
                'form_field' => false
            ],
            'plugins.simplesearch.filters.category' => [
                'type' => 'selectize',
                'label' => 'Category filter',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'plugins.simplesearch.filters.category',
                'validation' => 'strict'
            ],
            'plugins.simplesearch.filter_combinator' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Filter Combinator',
                'default' => 'and',
                'options' => [
                    'and' => 'And - Boolean &&',
                    'or' => 'Or - Boolean ||'
                ],
                'name' => 'plugins.simplesearch.filter_combinator',
                'validation' => 'strict'
            ],
            'plugins.simplesearch.order' => [
                'type' => '_parent',
                'name' => 'plugins.simplesearch.order',
                'form_field' => false
            ],
            'plugins.simplesearch.order.by' => [
                'type' => 'select',
                'size' => 'long',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.DEFAULT_ORDERING',
                'options' => [
                    'default' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_DEFAULT',
                    'folder' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_FOLDER',
                    'title' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_TITLE',
                    'date' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_DATE'
                ],
                'name' => 'plugins.simplesearch.order.by',
                'validation' => 'strict'
            ],
            'plugins.simplesearch.order.dir' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.DEFAULT_ORDER_DIRECTION',
                'highlight' => 'asc',
                'default' => 'desc',
                'options' => [
                    'asc' => 'PLUGIN_ADMIN.ASCENDING',
                    'desc' => 'PLUGIN_ADMIN.DESCENDING'
                ],
                'name' => 'plugins.simplesearch.order.dir',
                'validation' => 'strict'
            ],
            'plugins.sitemap' => [
                'form' => [
                    'validation' => 'strict'
                ],
                'type' => '_root',
                'form_field' => false
            ],
            'plugins.sitemap.enabled' => [
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
                ],
                'name' => 'plugins.sitemap.enabled',
                'validation' => 'strict'
            ],
            'plugins.sitemap.route' => [
                'type' => 'text',
                'label' => 'Route to sitemap',
                'validate' => [
                    'pattern' => '/([a-z\\-_]+/?)+'
                ],
                'name' => 'plugins.sitemap.route',
                'validation' => 'strict'
            ],
            'plugins.sitemap.ignores' => [
                'type' => 'array',
                'label' => 'Ignore',
                'value_only' => true,
                'name' => 'plugins.sitemap.ignores',
                'validation' => 'strict'
            ],
            'plugins.sitemap.additions' => [
                'type' => 'list',
                'label' => 'Additional URLs',
                'name' => 'plugins.sitemap.additions',
                'validation' => 'strict'
            ],
            'plugins.sitemap.additions.location' => [
                'type' => 'text',
                'label' => 'The URL location',
                'name' => 'plugins.sitemap.additions.location',
                'validation' => 'strict'
            ],
            'plugins.sitemap.additions.lastmod' => [
                'type' => 'text',
                'label' => 'Last modification e.g. 2017-04-06',
                'name' => 'plugins.sitemap.additions.lastmod',
                'validation' => 'strict'
            ],
            'plugins.taxonomylist' => [
                'form' => [
                    'validation' => 'strict'
                ],
                'type' => '_root',
                'form_field' => false
            ],
            'plugins.taxonomylist.enabled' => [
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
                ],
                'name' => 'plugins.taxonomylist.enabled',
                'validation' => 'strict'
            ],
            'plugins.taxonomylist.route' => [
                'type' => 'text',
                'label' => 'Route to blog',
                'validate' => [
                    'pattern' => '/([a-z\\-_]+/?)+'
                ],
                'name' => 'plugins.taxonomylist.route',
                'validation' => 'strict'
            ],
            'plugins.themer' => [
                'form' => [
                    'validation' => 'strict'
                ],
                'type' => '_root',
                'form_field' => false
            ],
            'plugins.themer.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGINS.THEMER.PLUGIN_STATUS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.themer.enabled',
                'validation' => 'strict'
            ],
            'plugins.themer.templates' => [
                'type' => 'themeselect',
                'label' => 'PLUGINS.THEMER.TEMPLATES',
                'selectize' => true,
                'multiple' => true,
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'plugins.themer.templates',
                'validation' => 'strict'
            ],
            'plugins.twigfeeds' => [
                'form' => [
                    'validation' => 'loose'
                ],
                'type' => '_root',
                'form_field' => false
            ],
            'plugins.twigfeeds.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin Status',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.twigfeeds.enabled',
                'validation' => 'loose'
            ],
            'plugins.twigfeeds.cache' => [
                'type' => 'toggle',
                'label' => 'Cache Feeds',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.twigfeeds.cache',
                'validation' => 'loose'
            ],
            'plugins.twigfeeds.static_cache' => [
                'type' => 'toggle',
                'label' => 'Static Cache',
                'description' => 'Saves feeds in /user/data rather than in /cache.',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.twigfeeds.static_cache',
                'validation' => 'loose'
            ],
            'plugins.twigfeeds.debug' => [
                'type' => 'toggle',
                'label' => 'Debug',
                'description' => 'Enables Debug-mode, which logs to Grav\'s Debugger and log-file.',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.twigfeeds.debug',
                'validation' => 'loose'
            ],
            'plugins.twigfeeds.twig_feeds' => [
                'name' => 'plugins.twigfeeds.twig_feeds',
                'type' => 'list',
                'array' => true,
                'style' => 'vertical',
                'label' => 'Feeds',
                'validation' => 'loose'
            ],
            'plugins.twigfeeds.twig_feeds.*' => [
                'type' => '_parent',
                'name' => 'plugins.twigfeeds.twig_feeds.*',
                'form_field' => false
            ],
            'plugins.twigfeeds.twig_feeds.*.source' => [
                'type' => 'text',
                'label' => 'Source',
                'description' => 'URL to RSS or Atom feed.',
                'validate' => [
                    'required' => true
                ],
                'name' => 'plugins.twigfeeds.twig_feeds.*.source',
                'validation' => 'loose'
            ],
            'plugins.twigfeeds.twig_feeds.*.name' => [
                'type' => 'text',
                'label' => 'Name',
                'description' => 'Name of the feed.',
                'name' => 'plugins.twigfeeds.twig_feeds.*.name',
                'validation' => 'loose'
            ],
            'plugins.twigfeeds.twig_feeds.*.start' => [
                'type' => 'text',
                'label' => 'Item start',
                'description' => 'Start of feed results. Must be a number between 0 and 500.',
                'validate' => [
                    'type' => 'int',
                    'min' => 0,
                    'max' => 500
                ],
                'name' => 'plugins.twigfeeds.twig_feeds.*.start',
                'validation' => 'loose'
            ],
            'plugins.twigfeeds.twig_feeds.*.end' => [
                'type' => 'text',
                'label' => 'Item end',
                'description' => 'End of feed results. Must be a number between 0 and 500.',
                'validate' => [
                    'type' => 'int',
                    'min' => 0,
                    'max' => 500
                ],
                'name' => 'plugins.twigfeeds.twig_feeds.*.end',
                'validation' => 'loose'
            ],
            'plugins.twigfeeds.twig_feeds.*.cache_time' => [
                'type' => 'text',
                'label' => 'Cache Time',
                'description' => 'Time, in seconds, to wait before caching data again.',
                'validate' => [
                    'type' => 'int',
                    'min' => 0
                ],
                'name' => 'plugins.twigfeeds.twig_feeds.*.cache_time',
                'validation' => 'loose'
            ],
            'plugins.webmention' => [
                'form' => [
                    'validation' => 'strict'
                ],
                'type' => '_root',
                'form_field' => false
            ],
            'plugins.webmention.enabled' => [
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
                ],
                'name' => 'plugins.webmention.enabled',
                'validation' => 'strict'
            ]
        ],
        'rules' => [
            
        ],
        'nested' => [
            'media' => 'media',
            'site' => [
                'content' => 'site.content',
                'title' => 'site.title',
                'default_lang' => 'site.default_lang',
                'author' => [
                    'name' => 'site.author.name',
                    'email' => 'site.author.email'
                ],
                'taxonomies' => 'site.taxonomies',
                'summary' => [
                    'enabled' => 'site.summary.enabled',
                    'size' => 'site.summary.size',
                    'format' => 'site.summary.format',
                    'delimiter' => 'site.summary.delimiter'
                ],
                'metadata' => 'site.metadata',
                'routes' => 'site.routes',
                'redirects' => 'site.redirects'
            ],
            'streams' => [
                'schemes' => [
                    'xxx' => 'streams.schemes.xxx'
                ]
            ],
            'system' => [
                'content' => 'system.content',
                'home' => [
                    'alias' => 'system.home.alias',
                    'hide_in_urls' => 'system.home.hide_in_urls'
                ],
                'pages' => [
                    'theme' => 'system.pages.theme',
                    'process' => 'system.pages.process',
                    'dateformat' => [
                        'default' => 'system.pages.dateformat.default',
                        'short' => 'system.pages.dateformat.short',
                        'long' => 'system.pages.dateformat.long'
                    ],
                    'order' => [
                        'by' => 'system.pages.order.by',
                        'dir' => 'system.pages.order.dir'
                    ],
                    'list' => [
                        'count' => 'system.pages.list.count'
                    ],
                    'publish_dates' => 'system.pages.publish_dates',
                    'events' => 'system.pages.events',
                    'append_url_extension' => 'system.pages.append_url_extension',
                    'redirect_default_route' => 'system.pages.redirect_default_route',
                    'redirect_default_code' => 'system.pages.redirect_default_code',
                    'redirect_trailing_slash' => 'system.pages.redirect_trailing_slash',
                    'ignore_hidden' => 'system.pages.ignore_hidden',
                    'ignore_files' => 'system.pages.ignore_files',
                    'ignore_folders' => 'system.pages.ignore_folders',
                    'url_taxonomy_filters' => 'system.pages.url_taxonomy_filters',
                    'twig_first' => 'system.pages.twig_first',
                    'never_cache_twig' => 'system.pages.never_cache_twig',
                    'frontmatter' => [
                        'process_twig' => 'system.pages.frontmatter.process_twig',
                        'ignore_fields' => 'system.pages.frontmatter.ignore_fields'
                    ],
                    'expires' => 'system.pages.expires',
                    'last_modified' => 'system.pages.last_modified',
                    'etag' => 'system.pages.etag',
                    'vary_accept_encoding' => 'system.pages.vary_accept_encoding',
                    'markdown' => [
                        'extra' => 'system.pages.markdown.extra',
                        'auto_line_breaks' => 'system.pages.markdown.auto_line_breaks',
                        'auto_url_links' => 'system.pages.markdown.auto_url_links',
                        'escape_markup' => 'system.pages.markdown.escape_markup'
                    ]
                ],
                'timezone' => 'system.timezone',
                'languages' => [
                    'supported' => 'system.languages.supported',
                    'include_default_lang' => 'system.languages.include_default_lang',
                    'translations' => 'system.languages.translations',
                    'translations_fallback' => 'system.languages.translations_fallback',
                    'session_store_active' => 'system.languages.session_store_active',
                    'http_accept_language' => 'system.languages.http_accept_language',
                    'override_locale' => 'system.languages.override_locale'
                ],
                'http_headers' => 'system.http_headers',
                'markdown' => 'system.markdown',
                'caching' => 'system.caching',
                'cache' => [
                    'enabled' => 'system.cache.enabled',
                    'check' => [
                        'method' => 'system.cache.check.method'
                    ],
                    'driver' => 'system.cache.driver',
                    'prefix' => 'system.cache.prefix',
                    'cli_compatibility' => 'system.cache.cli_compatibility',
                    'lifetime' => 'system.cache.lifetime',
                    'gzip' => 'system.cache.gzip',
                    'allow_webserver_gzip' => 'system.cache.allow_webserver_gzip',
                    'memcache' => [
                        'server' => 'system.cache.memcache.server',
                        'port' => 'system.cache.memcache.port'
                    ],
                    'memcached' => [
                        'server' => 'system.cache.memcached.server',
                        'port' => 'system.cache.memcached.port'
                    ],
                    'redis' => [
                        'socket' => 'system.cache.redis.socket',
                        'server' => 'system.cache.redis.server',
                        'port' => 'system.cache.redis.port'
                    ]
                ],
                'twig' => [
                    'cache' => 'system.twig.cache',
                    'debug' => 'system.twig.debug',
                    'auto_reload' => 'system.twig.auto_reload',
                    'autoescape' => 'system.twig.autoescape',
                    'umask_fix' => 'system.twig.umask_fix'
                ],
                'assets' => [
                    'css_pipeline' => 'system.assets.css_pipeline',
                    'css_pipeline_include_externals' => 'system.assets.css_pipeline_include_externals',
                    'css_pipeline_before_excludes' => 'system.assets.css_pipeline_before_excludes',
                    'css_minify' => 'system.assets.css_minify',
                    'css_minify_windows' => 'system.assets.css_minify_windows',
                    'css_rewrite' => 'system.assets.css_rewrite',
                    'js_pipeline' => 'system.assets.js_pipeline',
                    'js_pipeline_include_externals' => 'system.assets.js_pipeline_include_externals',
                    'js_pipeline_before_excludes' => 'system.assets.js_pipeline_before_excludes',
                    'js_minify' => 'system.assets.js_minify',
                    'enable_asset_timestamp' => 'system.assets.enable_asset_timestamp',
                    'collections' => 'system.assets.collections'
                ],
                'errors' => [
                    'display' => 'system.errors.display',
                    'log' => 'system.errors.log'
                ],
                'debugger' => [
                    'enabled' => 'system.debugger.enabled',
                    'shutdown' => [
                        'close_connection' => 'system.debugger.shutdown.close_connection'
                    ]
                ],
                'media' => [
                    'upload_limit' => 'system.media.upload_limit',
                    'enable_media_timestamp' => 'system.media.enable_media_timestamp',
                    'allowed_fallback_types' => 'system.media.allowed_fallback_types',
                    'unsupported_inline_types' => 'system.media.unsupported_inline_types'
                ],
                'images' => [
                    'default_image_quality' => 'system.images.default_image_quality',
                    'cache_all' => 'system.images.cache_all',
                    'cache_perms' => 'system.images.cache_perms',
                    'debug' => 'system.images.debug',
                    'auto_fix_orientation' => 'system.images.auto_fix_orientation'
                ],
                'session' => [
                    'enabled' => 'system.session.enabled',
                    'timeout' => 'system.session.timeout',
                    'name' => 'system.session.name',
                    'secure' => 'system.session.secure',
                    'httponly' => 'system.session.httponly',
                    'path' => 'system.session.path',
                    'split' => 'system.session.split'
                ],
                'advanced' => 'system.advanced',
                'gpm' => [
                    'releases' => 'system.gpm.releases',
                    'proxy_url' => 'system.gpm.proxy_url',
                    'method' => 'system.gpm.method',
                    'official_gpm_only' => 'system.gpm.official_gpm_only',
                    'verify_peer' => 'system.gpm.verify_peer'
                ],
                'reverse_proxy_setup' => 'system.reverse_proxy_setup',
                'username_regex' => 'system.username_regex',
                'pwd_regex' => 'system.pwd_regex',
                'wrapped_site' => 'system.wrapped_site',
                'absolute_urls' => 'system.absolute_urls',
                'param_sep' => 'system.param_sep',
                'force_ssl' => 'system.force_ssl',
                'custom_base_url' => 'system.custom_base_url'
            ],
            'plugins' => [
                'aboutme' => [
                    'enabled' => 'plugins.aboutme.enabled',
                    'built_in_css' => 'plugins.aboutme.built_in_css',
                    'name' => 'plugins.aboutme.name',
                    'title' => 'plugins.aboutme.title',
                    'description' => 'plugins.aboutme.description',
                    'Profile Picture' => 'plugins.aboutme.Profile Picture',
                    'picture_src' => 'plugins.aboutme.picture_src',
                    'Gravatar' => 'plugins.aboutme.Gravatar',
                    'gravatar' => [
                        'enabled' => 'plugins.aboutme.gravatar.enabled',
                        'email' => 'plugins.aboutme.gravatar.email',
                        'size' => 'plugins.aboutme.gravatar.size'
                    ],
                    'Social Pages' => 'plugins.aboutme.Social Pages',
                    'social_pages' => [
                        'enabled' => 'plugins.aboutme.social_pages.enabled',
                        'use_font_awesome' => 'plugins.aboutme.social_pages.use_font_awesome',
                        'pages' => [
                            'facebook' => [
                                'icon' => 'plugins.aboutme.social_pages.pages.facebook.icon',
                                'url' => 'plugins.aboutme.social_pages.pages.facebook.url',
                                'title' => 'plugins.aboutme.social_pages.pages.facebook.title',
                                'position' => 'plugins.aboutme.social_pages.pages.facebook.position'
                            ],
                            'twitter' => [
                                'icon' => 'plugins.aboutme.social_pages.pages.twitter.icon',
                                'url' => 'plugins.aboutme.social_pages.pages.twitter.url',
                                'title' => 'plugins.aboutme.social_pages.pages.twitter.title',
                                'position' => 'plugins.aboutme.social_pages.pages.twitter.position'
                            ],
                            'google_plus' => [
                                'icon' => 'plugins.aboutme.social_pages.pages.google_plus.icon',
                                'url' => 'plugins.aboutme.social_pages.pages.google_plus.url',
                                'title' => 'plugins.aboutme.social_pages.pages.google_plus.title',
                                'position' => 'plugins.aboutme.social_pages.pages.google_plus.position'
                            ],
                            'github' => [
                                'icon' => 'plugins.aboutme.social_pages.pages.github.icon',
                                'url' => 'plugins.aboutme.social_pages.pages.github.url',
                                'title' => 'plugins.aboutme.social_pages.pages.github.title',
                                'position' => 'plugins.aboutme.social_pages.pages.github.position'
                            ],
                            'linkedin' => [
                                'icon' => 'plugins.aboutme.social_pages.pages.linkedin.icon',
                                'url' => 'plugins.aboutme.social_pages.pages.linkedin.url',
                                'title' => 'plugins.aboutme.social_pages.pages.linkedin.title',
                                'position' => 'plugins.aboutme.social_pages.pages.linkedin.position'
                            ],
                            'instagram' => [
                                'icon' => 'plugins.aboutme.social_pages.pages.instagram.icon',
                                'url' => 'plugins.aboutme.social_pages.pages.instagram.url',
                                'title' => 'plugins.aboutme.social_pages.pages.instagram.title',
                                'position' => 'plugins.aboutme.social_pages.pages.instagram.position'
                            ]
                        ]
                    ],
                    'social_pages_types_spacer' => 'plugins.aboutme.social_pages_types_spacer',
                    'social_pages_types' => 'plugins.aboutme.social_pages_types',
                    'facebook' => 'plugins.aboutme.facebook',
                    'twitter' => 'plugins.aboutme.twitter',
                    'google_plus' => 'plugins.aboutme.google_plus',
                    'github' => 'plugins.aboutme.github',
                    'linkedin' => 'plugins.aboutme.linkedin',
                    'instagram' => 'plugins.aboutme.instagram'
                ],
                'admin' => [
                    'Basics' => 'plugins.admin.Basics',
                    'enabled' => 'plugins.admin.enabled',
                    'cache_enabled' => 'plugins.admin.cache_enabled',
                    'route' => 'plugins.admin.route',
                    'logo_text' => 'plugins.admin.logo_text',
                    'content_padding' => 'plugins.admin.content_padding',
                    'body_classes' => 'plugins.admin.body_classes',
                    'sidebar' => [
                        'activate' => 'plugins.admin.sidebar.activate',
                        'hover_delay' => 'plugins.admin.sidebar.hover_delay',
                        'size' => 'plugins.admin.sidebar.size'
                    ],
                    'theme' => 'plugins.admin.theme',
                    'edit_mode' => 'plugins.admin.edit_mode',
                    'google_fonts' => 'plugins.admin.google_fonts',
                    'show_beta_msg' => 'plugins.admin.show_beta_msg',
                    'show_github_msg' => 'plugins.admin.show_github_msg',
                    'enable_auto_updates_check' => 'plugins.admin.enable_auto_updates_check',
                    'session' => [
                        'timeout' => 'plugins.admin.session.timeout'
                    ],
                    'warnings' => [
                        'delete_page' => 'plugins.admin.warnings.delete_page'
                    ],
                    'Dashboard' => 'plugins.admin.Dashboard',
                    'widgets' => [
                        'dashboard-maintenance' => 'plugins.admin.widgets.dashboard-maintenance',
                        'dashboard-statistics' => 'plugins.admin.widgets.dashboard-statistics',
                        'dashboard-notifications' => 'plugins.admin.widgets.dashboard-notifications',
                        'dashboard-feed' => 'plugins.admin.widgets.dashboard-feed',
                        'dashboard-pages' => 'plugins.admin.widgets.dashboard-pages'
                    ],
                    'Notifications' => 'plugins.admin.Notifications',
                    'notifications' => [
                        'feed' => 'plugins.admin.notifications.feed',
                        'dashboard' => 'plugins.admin.notifications.dashboard',
                        'plugins' => 'plugins.admin.notifications.plugins',
                        'themes' => 'plugins.admin.notifications.themes'
                    ],
                    'Popularity' => 'plugins.admin.Popularity',
                    'popularity' => [
                        'enabled' => 'plugins.admin.popularity.enabled',
                        'ignore' => 'plugins.admin.popularity.ignore',
                        'history' => [
                            'daily' => 'plugins.admin.popularity.history.daily',
                            'monthly' => 'plugins.admin.popularity.history.monthly',
                            'visitors' => 'plugins.admin.popularity.history.visitors'
                        ]
                    ],
                    'dashboard' => [
                        'days_of_stats' => 'plugins.admin.dashboard.days_of_stats'
                    ]
                ],
                'archives' => [
                    'enabled' => 'plugins.archives.enabled',
                    'built_in_css' => 'plugins.archives.built_in_css',
                    'date_display_format' => 'plugins.archives.date_display_format',
                    'show_count' => 'plugins.archives.show_count',
                    'limit' => 'plugins.archives.limit',
                    'order' => [
                        'dir' => 'plugins.archives.order.dir',
                        'by' => 'plugins.archives.order.by'
                    ],
                    'filters' => [
                        'category' => 'plugins.archives.filters.category'
                    ],
                    'filter_combinator' => 'plugins.archives.filter_combinator'
                ],
                'breadcrumbs' => [
                    'enabled' => 'plugins.breadcrumbs.enabled',
                    'show_all' => 'plugins.breadcrumbs.show_all',
                    'built_in_css' => 'plugins.breadcrumbs.built_in_css',
                    'include_home' => 'plugins.breadcrumbs.include_home',
                    'icon_home' => 'plugins.breadcrumbs.icon_home',
                    'icon_divider_classes' => 'plugins.breadcrumbs.icon_divider_classes',
                    'link_trailing' => 'plugins.breadcrumbs.link_trailing'
                ],
                'comments' => [
                    'enabled' => 'plugins.comments.enabled'
                ],
                'email' => [
                    'enabled' => 'plugins.email.enabled',
                    'mailer' => [
                        'engine' => 'plugins.email.mailer.engine',
                        'smtp' => [
                            'server' => 'plugins.email.mailer.smtp.server',
                            'port' => 'plugins.email.mailer.smtp.port',
                            'encryption' => 'plugins.email.mailer.smtp.encryption',
                            'user' => 'plugins.email.mailer.smtp.user',
                            'password' => 'plugins.email.mailer.smtp.password'
                        ],
                        'sendmail' => [
                            'bin' => 'plugins.email.mailer.sendmail.bin'
                        ]
                    ],
                    'content_type' => 'plugins.email.content_type',
                    'from' => 'plugins.email.from',
                    'from_name' => 'plugins.email.from_name',
                    'to' => 'plugins.email.to',
                    'to_name' => 'plugins.email.to_name',
                    'debug' => 'plugins.email.debug'
                ],
                'error' => [
                    'enabled' => 'plugins.error.enabled',
                    'routes' => [
                        404 => 'plugins.error.routes.404'
                    ]
                ],
                'feed' => [
                    'enabled' => 'plugins.feed.enabled',
                    'limit' => 'plugins.feed.limit',
                    'description' => 'plugins.feed.description',
                    'lang' => 'plugins.feed.lang',
                    'length' => 'plugins.feed.length'
                ],
                'form' => [
                    'enabled' => 'plugins.form.enabled',
                    'general' => 'plugins.form.general',
                    'built_in_css' => 'plugins.form.built_in_css',
                    'files' => [
                        'multiple' => 'plugins.form.files.multiple',
                        'destination' => 'plugins.form.files.destination',
                        'accept' => 'plugins.form.files.accept'
                    ],
                    'recaptcha' => [
                        'site_key' => 'plugins.form.recaptcha.site_key',
                        'secret_key' => 'plugins.form.recaptcha.secret_key'
                    ]
                ],
                'ganalytics' => [
                    'tabs' => 'plugins.ganalytics.tabs',
                    'configuration' => 'plugins.ganalytics.configuration',
                    'enabled' => 'plugins.ganalytics.enabled',
                    'trackingId' => 'plugins.ganalytics.trackingId',
                    'advanced' => 'plugins.ganalytics.advanced',
                    'position' => 'plugins.ganalytics.position',
                    'objectName' => 'plugins.ganalytics.objectName',
                    'async' => 'plugins.ganalytics.async',
                    'forceSsl' => 'plugins.ganalytics.forceSsl',
                    'anonymizeIp' => 'plugins.ganalytics.anonymizeIp',
                    'blockedIps' => 'plugins.ganalytics.blockedIps',
                    'cookie' => 'plugins.ganalytics.cookie',
                    'cookieConfig' => 'plugins.ganalytics.cookieConfig',
                    'cookieName' => 'plugins.ganalytics.cookieName',
                    'cookieDomain' => 'plugins.ganalytics.cookieDomain',
                    'cookieExpires' => 'plugins.ganalytics.cookieExpires',
                    'debug' => 'plugins.ganalytics.debug',
                    'debugStatus' => 'plugins.ganalytics.debugStatus',
                    'debugTrace' => 'plugins.ganalytics.debugTrace'
                ],
                'login' => [
                    'tabs' => 'plugins.login.tabs',
                    'login' => 'plugins.login.login',
                    'enabled' => 'plugins.login.enabled',
                    'built_in_css' => 'plugins.login.built_in_css',
                    'route' => 'plugins.login.route',
                    'redirect_after_login' => 'plugins.login.redirect_after_login',
                    'route_forgot' => 'plugins.login.route_forgot',
                    'route_reset' => 'plugins.login.route_reset',
                    'route_profile' => 'plugins.login.route_profile',
                    'parent_acl' => 'plugins.login.parent_acl',
                    'protect_protected_page_media' => 'plugins.login.protect_protected_page_media',
                    'rememberme' => [
                        'enabled' => 'plugins.login.rememberme.enabled',
                        'timeout' => 'plugins.login.rememberme.timeout',
                        'name' => 'plugins.login.rememberme.name'
                    ],
                    'registration' => 'plugins.login.registration',
                    'user_registration' => [
                        'enabled' => 'plugins.login.user_registration.enabled',
                        'redirect_after_registration' => 'plugins.login.user_registration.redirect_after_registration',
                        'redirect_after_activation' => 'plugins.login.user_registration.redirect_after_activation',
                        'fields' => 'plugins.login.user_registration.fields',
                        'default_values' => 'plugins.login.user_registration.default_values',
                        'groups' => 'plugins.login.user_registration.groups',
                        'access' => [
                            'site' => 'plugins.login.user_registration.access.site'
                        ],
                        'options' => [
                            'validate_password1_and_password2' => 'plugins.login.user_registration.options.validate_password1_and_password2',
                            'set_user_disabled' => 'plugins.login.user_registration.options.set_user_disabled',
                            'login_after_registration' => 'plugins.login.user_registration.options.login_after_registration',
                            'send_activation_email' => 'plugins.login.user_registration.options.send_activation_email',
                            'send_notification_email' => 'plugins.login.user_registration.options.send_notification_email',
                            'send_welcome_email' => 'plugins.login.user_registration.options.send_welcome_email'
                        ]
                    ],
                    'route_register' => 'plugins.login.route_register',
                    'registration_fields' => 'plugins.login.registration_fields',
                    'access_levels' => 'plugins.login.access_levels',
                    'options' => 'plugins.login.options',
                    'Security' => 'plugins.login.Security',
                    'max_pw_resets_count' => 'plugins.login.max_pw_resets_count',
                    'max_pw_resets_interval' => 'plugins.login.max_pw_resets_interval',
                    'max_login_count' => 'plugins.login.max_login_count',
                    'max_login_interval' => 'plugins.login.max_login_interval'
                ],
                'pagination' => [
                    'enabled' => 'plugins.pagination.enabled',
                    'delta' => 'plugins.pagination.delta',
                    'built_in_css' => 'plugins.pagination.built_in_css'
                ],
                'problems' => [
                    'enabled' => 'plugins.problems.enabled',
                    'built_in_css' => 'plugins.problems.built_in_css'
                ],
                'simplesearch' => [
                    'enabled' => 'plugins.simplesearch.enabled',
                    'built_in_css' => 'plugins.simplesearch.built_in_css',
                    'display_button' => 'plugins.simplesearch.display_button',
                    'ignore_accented_characters' => 'plugins.simplesearch.ignore_accented_characters',
                    'min_query_length' => 'plugins.simplesearch.min_query_length',
                    'route' => 'plugins.simplesearch.route',
                    'template' => 'plugins.simplesearch.template',
                    'filters' => [
                        'category' => 'plugins.simplesearch.filters.category'
                    ],
                    'filter_combinator' => 'plugins.simplesearch.filter_combinator',
                    'order' => [
                        'by' => 'plugins.simplesearch.order.by',
                        'dir' => 'plugins.simplesearch.order.dir'
                    ]
                ],
                'sitemap' => [
                    'enabled' => 'plugins.sitemap.enabled',
                    'route' => 'plugins.sitemap.route',
                    'ignores' => 'plugins.sitemap.ignores',
                    'additions' => [
                        'location' => 'plugins.sitemap.additions.location',
                        'lastmod' => 'plugins.sitemap.additions.lastmod'
                    ]
                ],
                'taxonomylist' => [
                    'enabled' => 'plugins.taxonomylist.enabled',
                    'route' => 'plugins.taxonomylist.route'
                ],
                'themer' => [
                    'enabled' => 'plugins.themer.enabled',
                    'templates' => 'plugins.themer.templates'
                ],
                'twigfeeds' => [
                    'enabled' => 'plugins.twigfeeds.enabled',
                    'cache' => 'plugins.twigfeeds.cache',
                    'static_cache' => 'plugins.twigfeeds.static_cache',
                    'debug' => 'plugins.twigfeeds.debug',
                    'twig_feeds' => [
                        '*' => [
                            'source' => 'plugins.twigfeeds.twig_feeds.*.source',
                            'name' => 'plugins.twigfeeds.twig_feeds.*.name',
                            'start' => 'plugins.twigfeeds.twig_feeds.*.start',
                            'end' => 'plugins.twigfeeds.twig_feeds.*.end',
                            'cache_time' => 'plugins.twigfeeds.twig_feeds.*.cache_time'
                        ]
                    ]
                ],
                'webmention' => [
                    'enabled' => 'plugins.webmention.enabled'
                ]
            ]
        ],
        'dynamic' => [
            'system.timezone' => [
                'options' => [
                    'action' => 'data',
                    'params' => '\\Grav\\Common\\Utils::timezones'
                ]
            ],
            'system.pages.dateformat.default' => [
                'options' => [
                    'action' => 'data',
                    'params' => '\\Grav\\Common\\Utils::dateFormats'
                ]
            ],
            'plugins.login.user_registration.groups' => [
                'options' => [
                    'action' => 'data',
                    'params' => '\\Grav\\User\\Groups::groups'
                ]
            ]
        ],
        'filter' => [
            'validation' => true
        ]
    ]
];
