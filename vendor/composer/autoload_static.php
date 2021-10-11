<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit09d4564242198031e0cb47e37e6149ca
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit09d4564242198031e0cb47e37e6149ca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit09d4564242198031e0cb47e37e6149ca::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit09d4564242198031e0cb47e37e6149ca::$classMap;

        }, null, ClassLoader::class);
    }
}
