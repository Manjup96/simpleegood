<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit859834962150d6eee88b214b7d2c97ca
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MetaBox\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MetaBox\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit859834962150d6eee88b214b7d2c97ca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit859834962150d6eee88b214b7d2c97ca::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit859834962150d6eee88b214b7d2c97ca::$classMap;

        }, null, ClassLoader::class);
    }
}
