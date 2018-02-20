<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/dev/Boulot/Context/Ateliers Kennedy/ateliers-kennedy/user/plugins/email/email.yaml',
    'modified' => 1512528472,
    'data' => [
        'enabled' => true,
        'from' => NULL,
        'from_name' => NULL,
        'to' => NULL,
        'to_name' => NULL,
        'mailer' => [
            'engine' => 'sendmail',
            'smtp' => [
                'server' => 'localhost',
                'port' => 25,
                'encryption' => 'none',
                'user' => '',
                'password' => ''
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail -bs'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false
    ]
];
