<?php
declare(strict_types=1);

namespace Fx\HyperfHttpAuth;

use Hyperf\Utils\Context;
use Hyperf\Di\Annotation\AnnotationCollector;

/**
 * Class Config
 * @package Fx\HyperfHttpAuth
 */
class Config
{
    /**
     * @var array
     */
    protected static $annotations = [];

    /**
     * @param string $name
     * @param string $value
     * @param string $abstract
     * @return void
     */
    public static function setAnnotation($name, $value, $abstract)
    {
        self::$annotations[$abstract][$name] = $value;
    }

    /**
     * @param $name
     * @param $abstract
     * @return mixed|null
     */
    public static function getAnnotation($name, $abstract)
    {
        return self::$annotations[$abstract][$name] ?? null;
    }

    /**
     * @return array
     */
    public static function annotations()
    {
        return self::$annotations;
    }
}