<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit826d489e17962b70b2e0562112375642
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'D' => 
        array (
            'Devinfo\\MvcMaison\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Devinfo\\MvcMaison\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit826d489e17962b70b2e0562112375642::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit826d489e17962b70b2e0562112375642::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit826d489e17962b70b2e0562112375642::$classMap;

        }, null, ClassLoader::class);
    }
}
