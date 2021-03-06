<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2c6466e1f054db0d10bf09a00f54ec6f
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mini\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mini\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2c6466e1f054db0d10bf09a00f54ec6f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2c6466e1f054db0d10bf09a00f54ec6f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
