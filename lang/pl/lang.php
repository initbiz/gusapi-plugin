<?php

return [
    'plugin' => [
        'name' => 'GusApi',
        'description' => 'PHP GUS API to biblioteka do pobierania informacji z bazy REGON używając oficjalnego API bazy REGON'
    ],
    'settings' => [
        'menu_category' => 'GUS',
        'menu_gusapi_label' => 'GUS API',
        'menu_gusapi_description' => 'Ustawienia GUS API',
        'gus_api_key' => 'Klucz API',
        'gus_api_key_comment' => 'Wpisz tutaj swój klucz. Domyślnie jest ustawiony testowy: abcde12345abcde12345',
    ],
];
