<?php

use TypiCMS\Modules\Core\Models\Page;

return [
    /*
    |--------------------------------------------------------------------------
    | Webmaster email
    |--------------------------------------------------------------------------
    |
    | For mail notifications
    |
    */
    'webmaster_email' => env('WEBMASTER_EMAIL'),

    /*
    |--------------------------------------------------------------------------
    | Locales
    |--------------------------------------------------------------------------
    |
    | Available locales
    |
    */
    'locales' => [
        'en' => 'en_US',
        'fr' => 'fr_FR',
        'nl' => 'nl_NL',
    ],

    /*
    |--------------------------------------------------------------------------
    | You can choose not to have main locale in URLs
    |--------------------------------------------------------------------------
    |
    | If set to false, the main locale (the first in the above array)
    | will not appears in URLs.
    |
    */
    'main_locale_in_url' => true,

    /*
    |--------------------------------------------------------------------------
    | Max file upload size allowed
    |--------------------------------------------------------------------------
    */
    'max_file_upload_size' => env('MAX_FILE_UPLOAD_SIZE', 10000),

    /*
    |--------------------------------------------------------------------------
    | Welcome message url present in Dashboard
    |--------------------------------------------------------------------------
    */
    'welcome_message_url' => env('WELCOME_MESSAGE_URL'),

    /*
    |--------------------------------------------------------------------------
    | Folder to find template files for pages.
    | This folder is a subfolder of /resources/views/vendor/pages
    |--------------------------------------------------------------------------
    */
    'template_dir' => 'public',

    /*
    |--------------------------------------------------------------------------
    | If you use MariaDB, set this value to true
    |--------------------------------------------------------------------------
    */
    'mariadb' => false,

    /*
    |--------------------------------------------------------------------------
    | The following IP’s can visit the website without login when
    | the website is protected by a login and a password.
    |--------------------------------------------------------------------------
    */
    'authorized_ips' => [
        // '127.0.0.1',
    ],

    /*
    |--------------------------------------------------------------------------
    | Search engine configuration.
    |--------------------------------------------------------------------------
    */
    'search' => [
        'pages' => [
            'model' => Page::class,
            'columns' => [
                'title',
                'body',
            ],
        ],
        // 'news' => [
        //     'model' => News::class,
        //     'columns' => [
        //         'title',
        //         'body',
        //     ],
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Modules configuration.
    |--------------------------------------------------------------------------
    */
    'modules' => [
        'news' => [
            // 'per_page' => 30
        ],
    ],
];
