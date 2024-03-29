<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/grav-admin/user/plugins/webmention-bak/languages.yaml',
    'modified' => 1495361254,
    'data' => [
        'en' => [
            'PLUGIN_WEBMENTION' => [
                'MESSAGES' => [
                    'OK' => 'Your webmention has been received and processed.',
                    'CREATED' => 'Your webmention has been recieved and will be processed later.',
                    'ACCEPTED' => 'Your webmention has been received and will be processed later.',
                    'BAD_REQUEST' => 'Something is wrong with your request. Please do not retry until you have read the following error message and corrected the error.',
                    'BAD_REQUEST_SPEC' => 'Your request did not conform with the specification. Please read the documentation, adjust your request, and try again.',
                    'BAD_REQUEST_BADROUTE' => 'That target does not accept webmentions.',
                    'BAD_REQUEST_MISSING_VOUCH' => 'This target requires that webmentions be accompanied by a valid vouch.',
                    'FORBIDDEN' => 'This sender has been blacklisted. Please do not retry.',
                    'METHOD_NOT_ALLOWED' => 'You may not GET this resource. You may only POST to it as per the Webmention spec.',
                    'INTERNAL_ERROR' => 'Something is wrong on our side. We can\'t process your webmention at this time. Please try again later.',
                    'STATUS_UPDATE' => [
                        'HEADING' => 'Webmention Status',
                        'MENTIONER' => 'Mentioner',
                        'MENTIONEE' => 'Mentionee',
                        'DATE_RECEIVED' => 'Date received',
                        'VALID' => 'Valid',
                        'APPROVED' => 'Approved'
                    ]
                ]
            ]
        ]
    ]
];
