<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'plugins://jscomments/jscomments.yaml',
    'modified' => 1503390098,
    'data' => [
        'enabled' => true,
        'active' => true,
        'provider' => 'disqus',
        'providers' => [
            'discourse' => [
                'host' => ''
            ],
            'disqus' => [
                'shortname' => 'ajibari-com',
                'show_count' => false,
                'language' => 'en'
            ],
            'facebook' => [
                'app_id' => '',
                'num_posts' => 5,
                'colorscheme' => 'light',
                'order_by' => 'social',
                'language' => '',
                'width' => '100%'
            ],
            'googleplus' => [
                'show_count' => false,
                'language' => '',
                'width' => '100%'
            ],
            'intensedebate' => [
                'account_number' => ''
            ],
            'muut' => [
                'forum' => '',
                'channel' => 'General',
                'widget' => false,
                'show_online' => false,
                'show_title' => false,
                'upload' => false,
                'share' => true,
                'language' => ''
            ],
            'hypercomments' => [
                'widget_id' => NULL,
                'social' => [
                    0 => 'vk',
                    1 => 'odnoklassniki',
                    2 => 'yandex',
                    3 => 'mailru',
                    4 => 'google',
                    5 => 'livejournal',
                    6 => 'facebook',
                    7 => 'twitter',
                    8 => 'tumblr'
                ]
            ]
        ]
    ]
];
