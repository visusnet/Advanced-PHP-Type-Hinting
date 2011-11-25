<?php

namespace std\factory;

use std\factory\constraint\Parser as ConstraintParser;

class Container
{
    private $obj;
    private $className;
    
    public function __construct($obj) {
        $this->obj = $obj;
        $this->className = get_class($obj);
    }
    
    public function __call($name, array $arguments = null) {
        if ($arguments === null) {
            call_user_func(
                array(
                    $this->obj,
                    $name
                )
            );
        } else {
            $this->checkMethodCall($name, $arguments);
            
            call_user_func_array(
                array(
                    $this->obj,
                    $name
                ),
                $arguments
            );
        }
    }
    
    public static function __callStatic($name, array $arguments = null) {
        if ($arguments === null) {
            call_user_func(
                array(
                    $this->className,
                    $name
                )
            );
        } else {
            $this->checkMethodCall($name, $arguments);

            call_user_func_array(
                array(
                    $this->className,
                    $name
                ),
                $arguments
            );
        }
    }
    
    public function __set($name, $value) {
        $this->obj->$name = $value;
        return $this;
    }
    
    public function __get($name) {
        return $this->obj->$name;
    }
    
    public function __isset($name) {
        return isset($this->obj->$name);
    }
    
    public function __unset($name) {
        unset($this->obj->$name);
    }
    
    protected function checkMethodCall($name, array $arguments) {
        $parser = new ConstraintParser($this->className);
        $parameters = $parser->getParametersByMethod($name);
        
        for ($i = 0; $i < count($arguments); $i++) {
            $argument = $arguments[$i];
            $parameter = $parameters[$i];
            
            if (!$this->isTypeCorrect($argument, $parameter)) {
                throw new \Exception(
                    'The parameter #' . ($i + 1)
                    . ' (' . $parameter[1] . ')'
                    . ' of the method ' . $name
                    . ' must have the type ' . $parameter[0]
                    . ' but is ' . (is_object($argument) ? get_class($argument) : gettype($argument))
                );
            }
        }
    }
    
    protected function isTypeCorrect($argument, array $parameter) {
        $argumentType = $this->equalizeTypeName(gettype($argument));
        $parameterType = $this->equalizeTypeName($parameter[0]);
        if ($argumentType === null) {
            return true;
        } else if (
            !is_object($argument)
            && $argumentType === $parameterType
            || is_object($argument)
            && (
                get_class($argument) === $parameter[0]
                || $argumentType == 'object' && $parameterType == 'object'
            )
        ) {
            return true;
        }
        return false;
    }
    
    protected function equalizeTypeName($typeName) {
        $map = array(
            'integer' => 'int',
            'boolean' => 'bool',
            'double' => 'float',
            'unknown type' => null,
            'resource' => null,
            'NULL' => null
        );
        return str_replace(array_keys($map), $map, $typeName);
    }
}