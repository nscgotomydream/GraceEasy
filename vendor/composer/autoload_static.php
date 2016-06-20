<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita09fe342191855bc80f5bff0f5d1dd90
{
    public static $files = array (
        '88a9766f7d285def60c92a9664e37cee' => __DIR__ . '/../..' . '/src/Helper.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'L' => 
        array (
            'Lulu\\' => 5,
        ),
        'G' => 
        array (
            'Grace\\' => 6,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'Lulu\\' => 
        array (
            0 => __DIR__ . '/..' . '/lulu/db-driver/src',
        ),
        'Grace\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita09fe342191855bc80f5bff0f5d1dd90::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita09fe342191855bc80f5bff0f5d1dd90::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
