<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf7dd388bdb982b41dd0323ac3d86fef8
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MF\\' => 3,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MF\\' => 
        array (
            0 => __DIR__ . '/..' . '/MF',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf7dd388bdb982b41dd0323ac3d86fef8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf7dd388bdb982b41dd0323ac3d86fef8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf7dd388bdb982b41dd0323ac3d86fef8::$classMap;

        }, null, ClassLoader::class);
    }
}