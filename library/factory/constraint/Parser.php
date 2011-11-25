<?php

namespace std\factory\constraint;

class Parser
{
    private $className;
    private $reflectionClass;

    public function __construct($className) {
        $this->className = $className;
        $this->reflectionClass = new \ReflectionClass($className);
    }
    
    public function getParametersByMethod($methodName) {
        $reflectionMethod = $this->reflectionClass->getMethod($methodName);
        $docCommentLines = $this->parseDocComment(
            $reflectionMethod->getDocComment()
        );

        $parameters = array();
        foreach ($docCommentLines as $docCommentLine) {
            if (strpos($docCommentLine, '@param ') === 0) {
                $paramLine = trim(str_replace('@param', '', $docCommentLine));
                $parameters[] = preg_split('/[\s]+/', $paramLine);
            }
        }
        return $parameters;
    }
    
    protected function parseDocComment($docComment) {
        $unparsedLines = explode("\n", $docComment);
        $parsedLines = array();
        foreach ($unparsedLines as $unparsedLine) {
            $parsedLines[] = trim(
                str_replace(
                    array(
                        '/**',
                        '/*',
                        '*',
                        '*/'
                    ),
                    '',
                    $unparsedLine
                )
            );
        }
        return $parsedLines;
    }
}