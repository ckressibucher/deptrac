<?php

namespace DependencyTracker\DependencyResult;

class Dependency
{
    protected $classA;

    protected $classALine;

    protected $classB;

    protected $classInheritedOver;

    protected $classInheritedOverLine;

    /**
     * Dependency constructor.
     * @param $classA
     * @param $classALine
     * @param $classB
     */
    public function __construct($classA, $classALine, $classB, $classInheritedOver = null, $classInheritedOverLine = null)
    {
        $this->classA = $classA;
        $this->classALine = $classALine;
        $this->classB = $classB;
        $this->classInheritedOver = $classInheritedOver;
        $this->classInheritedOverLine = $classInheritedOverLine;
    }

    /**
     * @return mixed
     */
    public function getClassA()
    {
        return $this->classA;
    }

    /**
     * @return mixed
     */
    public function getClassALine()
    {
        return $this->classALine;
    }

    /**
     * @return mixed
     */
    public function getClassB()
    {
        return $this->classB;
    }

    /**
     * @return mixed
     */
    public function getClassInheritedOver()
    {
        return $this->classInheritedOver;
    }

    /**
     * @return mixed
     */
    public function getClassInheritedOverLine()
    {
        return $this->classInheritedOverLine;
    }

}