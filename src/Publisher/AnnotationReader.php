<?php
namespace Headsnet\LivingDocumentation\Publisher;

use Doctrine\Common\Annotations\AnnotationReader as DocReader;

/**
 * Helper AnnotationReader
 */
class AnnotationReader
{
    /**
     * @param $class
     * @return null|\StdClass
     */
    public static function getClass($class)
    {
        $reader = new DocReader();
        $reflector = new \ReflectionClass($class);

        return $reader->getClassAnnotations($reflector);
    }

    /**
     * @param $class
     * @param $property
     * @return array
     */
    public static function getProperty($class, $property)
    {
        $reader = new DocReader();
        $reflector = new \ReflectionProperty($class, $property);

        return $reader->getPropertyAnnotations($reflector);
    }

    /**
     * @param $class
     * @param $method
     * @return array
     */
    public static function getMethod($class, $method)
    {
        $reader = new DocReader();
        $reflector = new \ReflectionMethod($class, $method);

        return $reader->getMethodAnnotations($reflector);
    }
}
