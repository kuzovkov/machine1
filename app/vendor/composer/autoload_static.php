<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit34a50a2491985bd1414004d4fafdde7a
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'mindplay\\annotations\\' => 21,
        ),
        'U' => 
        array (
            'Ubiquity\\' => 9,
        ),
        'T' => 
        array (
            'Twig\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'A' => 
        array (
            'Ajax\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'mindplay\\annotations\\' => 
        array (
            0 => __DIR__ . '/..' . '/mindplay/annotations/src/annotations',
        ),
        'Ubiquity\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmv/ubiquity/src/Ubiquity',
            1 => __DIR__ . '/..' . '/phpmv/ubiquity-dev/src/Ubiquity',
            2 => __DIR__ . '/..' . '/phpmv/ubiquity-webtools/src/Ubiquity',
        ),
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'Ajax\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmv/php-mv-ui/Ajax',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/app',
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Cz\\Git\\GitException' => __DIR__ . '/..' . '/czproject/git-php/src/IGit.php',
        'Cz\\Git\\GitRepository' => __DIR__ . '/..' . '/czproject/git-php/src/GitRepository.php',
        'Cz\\Git\\IGit' => __DIR__ . '/..' . '/czproject/git-php/src/IGit.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit34a50a2491985bd1414004d4fafdde7a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit34a50a2491985bd1414004d4fafdde7a::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit34a50a2491985bd1414004d4fafdde7a::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit34a50a2491985bd1414004d4fafdde7a::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit34a50a2491985bd1414004d4fafdde7a::$classMap;

        }, null, ClassLoader::class);
    }
}
