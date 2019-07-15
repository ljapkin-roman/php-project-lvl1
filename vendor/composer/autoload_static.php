<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita9700f6bd40352d3cc7344d716841ee7
{
    public static $files = array (
        'be01b9b16925dcb22165c40b46681ac6' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/cli.php',
        '1aba6747de7d083fc542636fff8bbfe6' => __DIR__ . '/../..' . '/src/cli.php',
        'f1aee5825934e03fcbb1d1ad6ce4ae1b' => __DIR__ . '/../..' . '/src/games/check-fairness.php',
    );

    public static $prefixesPsr0 = array (
        'c' => 
        array (
            'cli' => 
            array (
                0 => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInita9700f6bd40352d3cc7344d716841ee7::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
