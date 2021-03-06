<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit42b04dc29cfa1ba7427a15a8a87a3e28
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit42b04dc29cfa1ba7427a15a8a87a3e28::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit42b04dc29cfa1ba7427a15a8a87a3e28::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
