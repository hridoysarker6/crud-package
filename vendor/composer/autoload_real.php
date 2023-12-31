<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit89ed0bd913af5a41a1f5b993b20ffa2c
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit89ed0bd913af5a41a1f5b993b20ffa2c', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit89ed0bd913af5a41a1f5b993b20ffa2c', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit89ed0bd913af5a41a1f5b993b20ffa2c::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
