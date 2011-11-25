<?php

namespace std\factory;

class Core
{
    public static function get($namespace, $className, $variant = null) {
        $name = $namespace . '\\' . $className;
        return new Container(new $name);
    }
}