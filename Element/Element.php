<?php
/**
 * Created by PhpStorm.
 * User: haonx
 * Date: 5/30/2017
 * Time: 1:38 PM
 */

namespace Ezpage\Dom\Element;


use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\Support\Jsonable;

class Element  implements Htmlable,Jsonable
{

    /**
     * Get content as a string of HTML.
     *
     * @return string
     */
    public function toHtml()
    {
        return '';
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
}
