<?php
/**
 * Created by PhpStorm.
 * User: qtvha
 * Date: 5/29/2017
 * Time: 9:45 PM
 */

namespace Ezpage\Dom;


use Illuminate\Contracts\Support\Htmlable;

class Document implements Htmlable
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
}
