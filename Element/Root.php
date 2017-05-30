<?php
/**
 * Created by PhpStorm.
 * User: haonx
 * Date: 5/30/2017
 * Time: 1:38 PM
 */

namespace Ezpage\Dom\Element;


class Root extends Element
{

    public function __construct()
    {
        parent::__construct();
        $this->setTagName('html');
    }
}
