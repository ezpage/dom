<?php
/**
 * Created by PhpStorm.
 * User: haonx
 * Date: 5/31/2017
 * Time: 1:56 PM
 */

namespace Ezpage\Dom;


class Attribute
{
    private $name;
    private $value;
    function __toString()
    {
        $value = $this->getValue();
        $name = $this->getName();
        return "$name='$value'";
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

}
