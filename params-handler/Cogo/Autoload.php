<?php
namespace Cogo;

class Autoload {
    /**
     * Load the class name
     *
     * (from http://groups.google.com/group/php-standards/web/psr-0-final-proposal)
     *
     * @param string $className
     */
    public function load($className) {
        $className = ltrim($className, '\\');
        $fileName  = '';
        $namespace = '';

        if ($lastNsPos = strripos($className, '\\')) {
            $namespace = substr($className, 0, $lastNsPos);
            $className = substr($className, $lastNsPos + 1);
            $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
        }

        $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

        require $fileName;
    }
}

set_include_path(__DIR__ . '/..' . PATH_SEPARATOR . get_include_path());
$autoload = new Autoload();
spl_autoload_register(array($autoload, 'load'));
