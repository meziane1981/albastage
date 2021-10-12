<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit342595810aa6264e6bb5ad426bf8457b
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit342595810aa6264e6bb5ad426bf8457b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit342595810aa6264e6bb5ad426bf8457b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit342595810aa6264e6bb5ad426bf8457b::$classMap;

        }, null, ClassLoader::class);
    }
}
