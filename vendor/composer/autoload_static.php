<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf077e6e4a9098677a0f75ec7c3c27b99
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf077e6e4a9098677a0f75ec7c3c27b99::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf077e6e4a9098677a0f75ec7c3c27b99::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf077e6e4a9098677a0f75ec7c3c27b99::$classMap;

        }, null, ClassLoader::class);
    }
}
