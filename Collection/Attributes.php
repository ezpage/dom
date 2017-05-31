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
        $attributesArray = $this->map($fnBuildAttribute)->toArray();
        return implode(' ', $attributesArray);
    }
}
