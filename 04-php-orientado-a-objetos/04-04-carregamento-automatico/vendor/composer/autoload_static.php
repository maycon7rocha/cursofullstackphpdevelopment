<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdc73a92cf840abffde4e4f2ad685c4fb
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdc73a92cf840abffde4e4f2ad685c4fb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdc73a92cf840abffde4e4f2ad685c4fb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdc73a92cf840abffde4e4f2ad685c4fb::$classMap;

        }, null, ClassLoader::class);
    }
}
