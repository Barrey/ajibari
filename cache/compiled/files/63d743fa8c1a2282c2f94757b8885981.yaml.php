<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp7/htdocs/ajibari.com/user/config/site.yaml',
    'modified' => 1503242352,
    'data' => [
        'title' => 'Ajibari.com',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Ridwan Aji Bari',
            'email' => 'ajibari@gmail.com'
        ],
        'taxonomies' => [
            0 => 'tag'
        ],
        'metadata' => [
            'description' => 'My Personal Blog'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
