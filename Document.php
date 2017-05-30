<?php
/**
 * Created by PhpStorm.
 * User: qtvha
 * Date: 5/29/2017
 * Time: 9:45 PM
 */

namespace Ezpage\Dom;


use Ezpage\Dom\Element\Root;
use Illuminate\Contracts\Support\Htmlable;

class Document implements Htmlable
{
    /**
     * @var Root
     */
    private $root;

    /**
     * Get content as a string of HTML.
     *
     * @return string
     */
    public function toHtml()
    {
        return '';
    }

    public function setRootElement(Root $root)
    {
        $this->setRoot($root);
    }

    /**
     * @param mixed $root
     * @return Document
     */
    public function setRoot($root)
    {
        $this->root = $root;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRoot()
    {
        return $this->root;
    }
}
