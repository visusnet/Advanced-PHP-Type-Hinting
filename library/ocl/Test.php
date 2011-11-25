<?php

namespace std\ocl;

class Test
{
    /**
     * @param int $arg
     */
    public function intTest($arg) {
        echo __METHOD__ . '<br />';
    }
    
    /**
     * @param float $arg
     */
    public function floatTest($arg) {
        echo __METHOD__ . '<br />';
    }
    
    /**
     * @param string $arg
     */
    public function stringTest($arg) {
        echo __METHOD__ . '<br />';
    }
    
    /**
     * @param array $arg
     */
    public function arrayTest($arg) {
        echo __METHOD__ . '<br />';
    }
    
    /**
     * @param object $arg
     */
    public function objectTest($arg) {
        echo __METHOD__ . '<br />';
    }
    
    /**
     * @param std\ocl\Test $arg
     */
    public function someClassTest($arg) {
        echo __METHOD__ . '<br />';
    }
    
    /**
     * @param NULL $arg
     */
    public function nullTest($arg) {
        echo __METHOD__ . '<br />';
    }
}