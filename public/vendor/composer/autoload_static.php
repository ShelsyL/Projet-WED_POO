<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1d803b116f30d123090a2b21389cec03
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Noyau\\Classes\\' => 14,
        ),
        'A' => 
        array (
            'App\\Modeles\\' => 12,
            'App\\Controleurs\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Noyau\\Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/noyau/classes',
        ),
        'App\\Modeles\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/modeles',
        ),
        'App\\Controleurs\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/controleurs',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1d803b116f30d123090a2b21389cec03::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1d803b116f30d123090a2b21389cec03::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1d803b116f30d123090a2b21389cec03::$classMap;

        }, null, ClassLoader::class);
    }
}
