<?php

namespace Controller\Admin;
class Admin extends \Controller\Core\Admin{
    public function gridAction(){
        $grid = \Leisure::getBlock('Admin\Grid')->toHtml();
        $this->makeResponse($grid);
    }
}

?>