<?php

namespace std;

require_once 'library/Autoloader.php';

use std\factory\Core as CoreFactory;

spl_autoload_register(__NAMESPACE__ . '\Autoloader::load');

$oclTest = CoreFactory::get(
    'std\\ocl',
    'Test'
);

try {
    $oclTest->intTest(123);
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}
try {
    $oclTest->intTest(1.23);
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}
try {
    $oclTest->intTest('string');
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}
try {
    $oclTest->intTest(new \stdClass());
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}
try {
    $oclTest->intTest(new ocl\Test());
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}
try {
    $oclTest->intTest(array());
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}
try {
    $oclTest->intTest(true);
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}
try {
    $oclTest->intTest(null);
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}



try {
    $oclTest->floatTest(123);
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}
try {
    $oclTest->floatTest(1.23);
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}
try {
    $oclTest->floatTest('string');
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}
try {
    $oclTest->floatTest(new \stdClass());
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}
try {
    $oclTest->floatTest(new ocl\Test());
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}
try {
    $oclTest->floatTest(array());
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}
try {
    $oclTest->floatTest(true);
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}
try {
    $oclTest->floatTest(null);
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}



try {
    $oclTest->stringTest(123);
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}
try {
    $oclTest->stringTest(1.23);
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}
try {
    $oclTest->stringTest('string');
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}
try {
    $oclTest->stringTest(new \stdClass());
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}
try {
    $oclTest->stringTest(new ocl\Test());
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}
try {
    $oclTest->stringTest(array());
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}
try {
    $oclTest->stringTest(true);
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}
try {
    $oclTest->stringTest(null);
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}



try {
    $oclTest->arrayTest(123);
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}
try {
    $oclTest->arrayTest(1.23);
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}
try {
    $oclTest->arrayTest('string');
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}
try {
    $oclTest->arrayTest(new \stdClass());
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}
try {
    $oclTest->arrayTest(new ocl\Test());
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}
try {
    $oclTest->arrayTest(array());
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}
try {
    $oclTest->arrayTest(true);
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}
try {
    $oclTest->arrayTest(null);
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}



try {
    $oclTest->objectTest(123);
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}
try {
    $oclTest->objectTest(1.23);
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}
try {
    $oclTest->objectTest('string');
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}
try {
    $oclTest->objectTest(new \stdClass());
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}
try {
    $oclTest->objectTest(new ocl\Test());
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}
try {
    $oclTest->objectTest(array());
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}
try {
    $oclTest->objectTest(true);
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}
try {
    $oclTest->objectTest(null);
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}



try {
    $oclTest->someClassTest(123);
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}
try {
    $oclTest->someClassTest(1.23);
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}
try {
    $oclTest->someClassTest('string');
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}
try {
    $oclTest->someClassTest(new \stdClass());
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}
try {
    $oclTest->someClassTest(new ocl\Test());
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}
try {
    $oclTest->someClassTest(array());
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}
try {
    $oclTest->someClassTest(true);
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}
try {
    $oclTest->someClassTest(null);
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}


try {
    $oclTest->nullTest(123);
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}
try {
    $oclTest->nullTest(1.23);
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}
try {
    $oclTest->nullTest('string');
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}
try {
    $oclTest->nullTest(new \stdClass());
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}
try {
    $oclTest->nullTest(new ocl\Test());
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}
try {
    $oclTest->nullTest(array());
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}
try {
    $oclTest->nullTest(true);
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}
try {
    $oclTest->nullTest(null);
} catch (\Exception $e) {
    echo $e->getMessage() . '<br />';
}