<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita25267d6b70ed26ea72b704db49fc2a3
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInita25267d6b70ed26ea72b704db49fc2a3::$classMap;

        }, null, ClassLoader::class);
    }
}