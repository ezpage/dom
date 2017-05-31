<?php
/**
 * Created by PhpStorm.
 * User: qtvha
 * Date: 5/31/2017
 * Time: 12:42 AM
 */

namespace Ezpage\Dom\Collection;


use Ezpage\Dom\Attribute;
use Illuminate\Support\Collection;

class Attributes extends Collection
{
    public function __toString()
    {
        $fnBuildAttribute = function(Attribute$attribute){
            return strval($attribute);
        };
        $attributes = $this->filter();
        if($attributes->isEmpty()){
            return '';
        }
        $attributesArray = $attributes->map($fnBuildAttribute)->toArray();
        return implode(' ', $attributesArray);
    }

    public function __construct($items = [])
    {
        parent::__construct($items);
        $this->set('class', new Classes());
    }

    public function set($attributeName, $attributeValue)
    {
        $this->put($attributeName, new Attribute($attributeName,$attributeValue));

        return $this;
    }

    /**
     * @return Classes
     */
    public function getClasses()
    {
        return $this->get('class');
    }
}
