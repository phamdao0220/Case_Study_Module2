<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite72c49ca2cdd912a8a13f1bd7fd7c97b
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite72c49ca2cdd912a8a13f1bd7fd7c97b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite72c49ca2cdd912a8a13f1bd7fd7c97b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}