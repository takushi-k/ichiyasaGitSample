<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit05f53c5607d428b1c16c913d63b0ff54
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LINE\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LINE\\' => 
        array (
            0 => __DIR__ . '/..' . '/linecorp/line-bot-sdk/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit05f53c5607d428b1c16c913d63b0ff54::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit05f53c5607d428b1c16c913d63b0ff54::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
