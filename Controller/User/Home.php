<?php

namespace Controller\User;
class Home extends \Controller\Core\Admin{
    public function homeAction(){
        $home = \Leisure::getBlock('User\Home')->toHtml();
        $this->makeResponse($home);
    }
}

?>