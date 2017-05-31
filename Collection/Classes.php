<?php
/**
 * Created by PhpStorm.
 * User: qtvha
 * Date: 5/31/2017
 * Time: 6:49 PM
 */

namespace Ezpage\Dom\Collection;


use Illuminate\Support\Collection;

class Classes extends Collection
{
    public function __toString()
    {
        return implode(' ', $this->items);
    }
}
