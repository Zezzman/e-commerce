<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3b2fcde7d1facbe7278391734f1cd866
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'System\\' => 7,
        ),
        'E' => 
        array (
            'ECommerce\\Controllers\\' => 22,
            'ECommerce\\CLI\\' => 14,
            'ECommerce\\API\\' => 14,
            'ECommerce\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'System\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../php-light-framework/src',
        ),
        'ECommerce\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/http/controllers',
        ),
        'ECommerce\\CLI\\' => 
        array (
            0 => __DIR__ . '/../..' . '/cli',
        ),
        'ECommerce\\API\\' => 
        array (
            0 => __DIR__ . '/../..' . '/http/api',
        ),
        'ECommerce\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3b2fcde7d1facbe7278391734f1cd866::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3b2fcde7d1facbe7278391734f1cd866::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
