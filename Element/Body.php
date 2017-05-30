<?php
/**
 * Created by PhpStorm.
 * User: haonx
 * Date: 5/30/2017
 * Time: 1:53 PM
 */

namespace Ezpage\Dom\Element;


class Body extends Element
{

    public function __construct()
    {
        parent::__construct();
        $this->setTagName('body');
    }
}
