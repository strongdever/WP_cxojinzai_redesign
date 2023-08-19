<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb462338fb66be23595d68a93345c9e3d_jetpack_searchⓥ1_4_1
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

        spl_autoload_register(array('ComposerAutoloaderInitb462338fb66be23595d68a93345c9e3d_jetpack_searchⓥ1_4_1', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitb462338fb66be23595d68a93345c9e3d_jetpack_searchⓥ1_4_1', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitb462338fb66be23595d68a93345c9e3d_jetpack_searchⓥ1_4_1::getInitializer($loader));

        $loader->setClassMapAuthoritative(true);
        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInitb462338fb66be23595d68a93345c9e3d_jetpack_searchⓥ1_4_1::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequireb462338fb66be23595d68a93345c9e3d_jetpack_searchⓥ1_4_1($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequireb462338fb66be23595d68a93345c9e3d_jetpack_searchⓥ1_4_1($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
