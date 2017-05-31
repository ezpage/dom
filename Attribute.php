<?php
/**
 * Created by PhpStorm.
 * User: haonx
 * Date: 5/31/2017
 * Time: 1:56 PM
 */

namespace Ezpage\Dom;


use Ezpage\Dom\Collection\Classes;

class Attribute
{
    private $name;
    private $value;
    function __toString()
    {
        if($this->ignore()){
            return '';
        }

        $value = $this->getValue();
        $name = $this->getName();
        $strAttribute = "$name='$value'";

        return $strAttribute;
    }

    public function __construct($name = null,$value = null)
    {
        $this->setName($name);
        $this->setValue($value);
    }

    /**
     * @param mixed $name
     * @return Attribute
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $value
     * @return Attribute
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    private function ignore()
    {
        $value = $this->getValue();
        if($value instanceof Classes){
            return $value->isEmpty();
        }

        return $this->getValue() === null;
    }

}
