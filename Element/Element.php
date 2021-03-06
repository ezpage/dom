<?php
/**
 * Created by PhpStorm.
 * User: haonx
 * Date: 5/30/2017
 * Time: 1:38 PM
 */

namespace Ezpage\Dom\Element;


use Ezpage\Dom\Collection\Attributes;
use Ezpage\Dom\Collection\Elements;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\Support\Jsonable;

class Element  implements Htmlable,Jsonable
{
    /**
     * @var Elements
     */
    private $children;
    /**
     * @var Attributes
     */
    private $attributes;
    private $tagName;

    public function __construct()
    {
        $this->attributes = new Attributes();
        $this->children = new Elements();

        $this->setTagName('div');
    }

    public function append(...$elements)
    {
        foreach ($elements as $element){
            $this->children->push($element);
        }

        return $this;
    }

    /**
     * @return static
     */

    public static function make()
    {
        $args = func_get_args();
        
        return new static(...$args);
    }

    /**
     * Get content as a string of HTML.
     *
     * @return string
     */
    public function toHtml()
    {
        $tag = $this->getTagName();
        $attributes = strval($this->getAttributes());
        $children = $this->getChildren()->toHtml();
        return "<$tag$attributes>$children</$tag>";
    }

    /**
     * Convert the object to its JSON representation.
     *
     * @param  int $options
     * @return string
     */
    public function toJson($options = 0)
    {
        return json_encode($this);
    }

    /**
     * @param mixed $tagName
     * @return Element
     */
    public function setTagName($tagName)
    {
        $this->tagName = $tagName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTagName()
    {
        return $this->tagName;
    }

    /**
     * @param Attributes $attributes
     * @return Element
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;
        return $this;
    }

    /**
     * @return Attributes
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param Elements $children
     * @return Element
     */
    public function setChildren($children)
    {
        $this->children = $children;
        return $this;
    }

    /**
     * @return Elements
     */
    public function getChildren()
    {
        return $this->children;
    }

    public function addClass(...$classes)
    {
        foreach ($classes as $class){
            $this->getAttributes()->getClasses()->push($class);
        }

        return $this;
    }
}
