<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4f350e005c4ae9bb681e3ddc64d1d93f
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'classes\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4f350e005c4ae9bb681e3ddc64d1d93f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4f350e005c4ae9bb681e3ddc64d1d93f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4f350e005c4ae9bb681e3ddc64d1d93f::$classMap;

        }, null, ClassLoader::class);
    }
}
