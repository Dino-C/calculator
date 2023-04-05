<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8b82caa1097a6aa70bfaff8a301a9f67
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Katharinadehn\\Calculator\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Katharinadehn\\Calculator\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit8b82caa1097a6aa70bfaff8a301a9f67::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8b82caa1097a6aa70bfaff8a301a9f67::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8b82caa1097a6aa70bfaff8a301a9f67::$classMap;

        }, null, ClassLoader::class);
    }
}
