<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/grav-admin/user/plugins/webmention/languages.yaml',
    'modified' => 1495386412,
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
        ],
        'fr' => [
            'PLUGIN_WEBMENTION' => [
                'MESSAGES' => [
                    'OK' => 'Votre Webmention a été reçue et traitée.',
                    'CREATED' => 'Votre Webmention a été reçue et sera traitée ultérieurement.',
                    'ACCEPTED' => 'Votre Webmention a été reçue et sera traitée ultérieurement.',
                    'BAD_REQUEST' => 'Une erreur s\'est produite lors de votre demande. Veuillez ne pas réessayer avant d\'avoir lu le message d’erreur suivant et corrigé l’erreur.',
                    'BAD_REQUEST_SPEC' => 'Votre demande n’est pas conforme aux exigences. Veuillez consulter la documentation, adapter votre demande, et réessayer.',
                    'BAD_REQUEST_BADROUTE' => 'Cette cible n\'accepte pas les Webmentions.',
                    'BAD_REQUEST_MISSING_VOUCH' => 'Cette cible impose que les Webmentions soient accompagnées d’un garant valable.',
                    'FORBIDDEN' => 'Cet expéditeur a été blacklisté. Veuillez ne pas réessayer.',
                    'METHOD_NOT_ALLOWED' => 'Vous ne pouvez pas utiliser GET pour cette ressource. Vous pouvez uniquement utiliser POST conformément à la spécification Webmention.',
                    'INTERNAL_ERROR' => 'Quelque chose ne va pas de notre côté. Nous ne pouvons pas traiter votre Webmention pour le moment. Veuillez essayer plus tard.',
                    'STATUS_UPDATE' => [
                        'HEADING' => 'Statut de la Webmention',
                        'MENTIONER' => 'Mentionneur',
                        'MENTIONEE' => 'Mentionné',
                        'DATE_RECEIVED' => 'Date de réception',
                        'VALID' => 'Valider',
                        'APPROVED' => 'Approuvé'
                    ]
                ]
            ]
        ]
    ]
];
