<?php

namespace std;

class Autoloader
{
    private static $instance;

    private function __construct() {
    }
    
    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            $className = __CLASS__;
            self::$instance = new $className;
        }
        return self::$instance;
    }

    public static function load($className) {
        Autoloader::getInstance()->loadClass($className);
    }
    
    private function loadClass($className) {
        require_once str_replace(
            array('std\\', '\\'),
            array('', DIRECTORY_SEPARATOR),
            $className) . '.php';
    }
}