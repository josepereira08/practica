<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit499be90aac43254754149ee844e051c6
{
    public static $files = array (
        '20e5b683b957de0f823a5a9aa17c1984' => __DIR__ . '/../..' . '/src/extra.php',
    );

    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Batalla\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Batalla\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit499be90aac43254754149ee844e051c6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit499be90aac43254754149ee844e051c6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
