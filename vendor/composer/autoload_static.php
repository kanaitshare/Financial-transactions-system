<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita03a6b4ca7e25f71e8062f45a5bb5f80
{
    public static $files = array (
        '9b38cf48e83f5d8f60375221cd213eee' => __DIR__ . '/..' . '/phpstan/phpstan/bootstrap.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInita03a6b4ca7e25f71e8062f45a5bb5f80::$classMap;

        }, null, ClassLoader::class);
    }
}
