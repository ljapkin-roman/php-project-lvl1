<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita9700f6bd40352d3cc7344d716841ee7
{
    public static $files = array (
        'be01b9b16925dcb22165c40b46681ac6' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/cli.php',
        '8622eef84537a04da99ad9484ecdf2f4' => __DIR__ . '/../..' . '/src/cli.php',
        '6392a3543a845b20b0ed35bafe19e5da' => __DIR__ . '/../..' . '/src/games/check-fairness.php',
        '0e8170bc5dde3072950daa22763fc3ae' => __DIR__ . '/../..' . '/src/games/intro.php',
        '8f03f3d3a613920e71d1c90971061a3a' => __DIR__ . '/../..' . '/src/games/executeThreeTime.php',
        'f5a37fe41763088eb8a483acf99ef66f' => __DIR__ . '/../..' . '/src/games/calculator.php',
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
