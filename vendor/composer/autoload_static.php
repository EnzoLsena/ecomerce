<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0dd7058b39efb8a22b1644e475e555aa
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'H' => 
        array (
            'Hcode\\DB\\' => 9,
            'Hcode\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Hcode\\DB\\' => 
        array (
            0 => __DIR__ . '/..' . '/hcodebr/php-classes/src/DB',
        ),
        'Hcode\\' => 
        array (
            0 => __DIR__ . '/..' . '/hcodebr/php-classes/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0dd7058b39efb8a22b1644e475e555aa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0dd7058b39efb8a22b1644e475e555aa::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit0dd7058b39efb8a22b1644e475e555aa::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit0dd7058b39efb8a22b1644e475e555aa::$classMap;

        }, null, ClassLoader::class);
    }
}
