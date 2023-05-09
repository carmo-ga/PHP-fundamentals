<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitd5952d8b32b82d8e5fab33fbe8aa59cf
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

        spl_autoload_register(array('ComposerAutoloaderInitd5952d8b32b82d8e5fab33fbe8aa59cf', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitd5952d8b32b82d8e5fab33fbe8aa59cf', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitd5952d8b32b82d8e5fab33fbe8aa59cf::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
