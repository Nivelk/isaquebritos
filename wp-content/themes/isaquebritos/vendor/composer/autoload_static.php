<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit38d97cdc58c3795bbd15119420adc94a
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Britos\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Britos\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit38d97cdc58c3795bbd15119420adc94a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit38d97cdc58c3795bbd15119420adc94a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}