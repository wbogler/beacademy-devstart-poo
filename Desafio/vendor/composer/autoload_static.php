<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite9bf136f7f6f082ed64608e5c9fe50ce
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite9bf136f7f6f082ed64608e5c9fe50ce::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite9bf136f7f6f082ed64608e5c9fe50ce::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite9bf136f7f6f082ed64608e5c9fe50ce::$classMap;

        }, null, ClassLoader::class);
    }
}
