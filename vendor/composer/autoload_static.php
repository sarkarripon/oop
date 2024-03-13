<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit198908a2af24ded932d6d4c960553470
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit198908a2af24ded932d6d4c960553470::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit198908a2af24ded932d6d4c960553470::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit198908a2af24ded932d6d4c960553470::$classMap;

        }, null, ClassLoader::class);
    }
}
