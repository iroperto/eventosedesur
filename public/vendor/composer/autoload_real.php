<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb89428524d7db17173c8a508a5a7e74b
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

        spl_autoload_register(array('ComposerAutoloaderInitb89428524d7db17173c8a508a5a7e74b', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitb89428524d7db17173c8a508a5a7e74b', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitb89428524d7db17173c8a508a5a7e74b::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}