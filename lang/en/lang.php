<?php

return [
    'plugin' => [
        'name' => 'GusApi',
        'description' => 'PHP GUS API is an object-oriented library to get information from REGON site based on official REGON SOAP API.'
    ],
    'settings' => [
        'menu_category' => 'GUS',
        'menu_gusapi_label' => 'GUS API',
        'menu_gusapi_description' => 'GUS API Settings',
        'gus_api_key' => 'API Key',
        'gus_api_key_comment' => 'Set your key here. By default the testing one is set: abcde12345abcde12345',
    ],
];
