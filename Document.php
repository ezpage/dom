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
        return '<!doctype html>'.$this->getRoot()->toHtml();
    }
    /**
     * @param Root $root
     * @return Document
     */
    public function setRoot(Root$root)
    {
        $this->root = $root;
        return $this;
    }

    /**
     * @return Root
     */
    public function getRoot()
    {
        return $this->root;
    }
}
