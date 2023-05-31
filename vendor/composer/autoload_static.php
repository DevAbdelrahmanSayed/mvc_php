<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit98a40a08ae5ddc6327d3b10b14852e2c
{
    public static $files = array (
        'da253f61703e9c22a5a34f228526f05a' => __DIR__ . '/..' . '/wixel/gump/gump.class.php',
    );

    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'GUMP\\' => 5,
        ),
        'D' => 
        array (
            'Dcblogdev\\PdoWrapper\\' => 21,
        ),
        'B' => 
        array (
            'BLOG\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'GUMP\\' => 
        array (
            0 => __DIR__ . '/..' . '/wixel/gump/src',
        ),
        'Dcblogdev\\PdoWrapper\\' => 
        array (
            0 => __DIR__ . '/..' . '/dcblogdev/pdo-wrapper/src',
        ),
        'BLOG\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit98a40a08ae5ddc6327d3b10b14852e2c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit98a40a08ae5ddc6327d3b10b14852e2c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit98a40a08ae5ddc6327d3b10b14852e2c::$classMap;

        }, null, ClassLoader::class);
    }
}