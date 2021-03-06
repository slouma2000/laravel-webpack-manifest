<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Manifest file.
    |--------------------------------------------------------------------------
    |
    | Manifest json file, generated by webpack-assets plugin. It's path
    | is relative to public directory.
    |
    */
    'file'         => 'assets/manifest.json',

    /*
    |----------------------------------------------------------------------
    | Throw loading exception.
    |----------------------------------------------------------------------
    |
    | When first call of webpack package call occurred it loads manifest
    | file. If no file was created, by default, it will throw exception.
    | Set this to false if you want to prevent exception to be thrown.
    |
    */
    'fail_on_load' => false,
];