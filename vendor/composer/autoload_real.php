<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit20e947fcabf5e4d5917df9d86a0cef24
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

        spl_autoload_register(array('ComposerAutoloaderInit20e947fcabf5e4d5917df9d86a0cef24', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit20e947fcabf5e4d5917df9d86a0cef24', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit20e947fcabf5e4d5917df9d86a0cef24::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
