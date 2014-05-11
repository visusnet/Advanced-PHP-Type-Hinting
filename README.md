# Advanced PHP Type Hinting

PHP supports type hinting for defined classes but not for primitive types. This project demonstrates how PHP doc comments can be used to ensure strongly-typed method signatures. I do not recommend to use this approach in production systems due to its negative performance implications. You might want to take a look at Facebook's new programming language [Hack](http://hacklang.org/) if you intend to implement strongly-typed methods.

## Example Usage

Define a class whose method calls should be checked for correct parameter types. Note the type definition in the doc comment.

    namespace std\ocl;
    
    class Example
    {
        /**
         * @param int $arg
         */
        public function callMethodWithEnforcedParameter($arg) {
            // This method will only be called if $arg is of type int.
        }
    }

You need to use the supplied factory to create an instance of this class:

    $example = CoreFactory::get(
        'std\\ocl',
        'Example'
    );

The following call will fail because `'foo'` is a string:

    $example->callMethodWithEnforcedParameter('foo');

However, this will work:

    $example->callMethodWithEnforcedParameter(42);

