<?php
namespace Headsnet\LivingDocumentation\Services;

use Doctrine\Common\Annotations\AnnotationException;
use Doctrine\Common\Annotations\AnnotationReader as DocReader;

/**
 * Helper AnnotationReader
 */
class AnnotationReader
{
    /**
     * @param string $class
     *
     * @return array
     * @throws \ReflectionException
     * @throws AnnotationException
     */
    public static function getClass(string $class)
    {
        $reader = new DocReader();
        $reflector = new \ReflectionClass($class);

        return $reader->getClassAnnotations($reflector);
    }

    /**
     * @param string $class
     * @param string $property
     *
     * @return array
     * @throws \ReflectionException
     * @throws AnnotationException
     */
    public static function getProperty($class, $property)
    {
        $reader = new DocReader();
        $reflector = new \ReflectionProperty($class, $property);

        return $reader->getPropertyAnnotations($reflector);
    }

    /**
     * @param string $class
     * @param string $method
     *
     * @return array
     * @throws \ReflectionException
     * @throws AnnotationException
     */
    public static function getMethod($class, $method)
    {
        $reader = new DocReader();
        $reflector = new \ReflectionMethod($class, $method);

        return $reader->getMethodAnnotations($reflector);
    }
}
