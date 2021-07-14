<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit567c3d15231a81951c6fc89400c66e5e
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Model\\' => 6,
        ),
        'C' => 
        array (
            'Controller\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/model',
        ),
        'Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controller',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit567c3d15231a81951c6fc89400c66e5e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit567c3d15231a81951c6fc89400c66e5e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit567c3d15231a81951c6fc89400c66e5e::$classMap;

        }, null, ClassLoader::class);
    }
}