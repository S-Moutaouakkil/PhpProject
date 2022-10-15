<?php

namespace App;

class Autoloader
{

    public static function register()
    {
        spl_autoload_register(array(new self,'autoload'));
    }

    public function autoload($class)
    {
        if (strpos($class, __NAMESPACE__."\\") === 0) {
            $class = str_replace([__NAMESPACE__."\\", "\\"], ["", DIRECTORY_SEPARATOR], $class);
            require_once (__DIR__.DIRECTORY_SEPARATOR.$class.".php");
        }
    }
}
