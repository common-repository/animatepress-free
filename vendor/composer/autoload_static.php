<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita1d744b37ba2d061ccabc5918db89e99
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'AnimatePressFree\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'AnimatePressFree\\' => 
        array (
            0 => '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita1d744b37ba2d061ccabc5918db89e99::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita1d744b37ba2d061ccabc5918db89e99::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita1d744b37ba2d061ccabc5918db89e99::$classMap;

        }, null, ClassLoader::class);
    }
}
