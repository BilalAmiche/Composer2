<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitefd69d28e50727b51d47313f163e863b
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wilder\\Composer\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wilder\\Composer\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitefd69d28e50727b51d47313f163e863b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitefd69d28e50727b51d47313f163e863b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitefd69d28e50727b51d47313f163e863b::$classMap;

        }, null, ClassLoader::class);
    }
}
