<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf52675a9ea05bc6b0ac60085544cfeb1
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf52675a9ea05bc6b0ac60085544cfeb1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf52675a9ea05bc6b0ac60085544cfeb1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
