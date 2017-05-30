<?php
/**
 * Created by PhpStorm.
 * User: haonx
 * Date: 5/30/2017
 * Time: 1:55 PM
 */

namespace Ezpage\Dom\Collection;


use Ezpage\Dom\Element\Element;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\Collection;

class Elements extends Collection implements Htmlable
{

    /**
     * Get content as a string of HTML.
     *
     * @return string
     */
    public function toHtml()
    {
        $elements_html = $this->transform(function (Element $element){
            return $element->toHtml();
        })->toArray();

        return implode($elements_html);
    }
}
