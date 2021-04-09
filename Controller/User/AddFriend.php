<?php

namespace Controller\User;
class AddFriend extends \Controller\Core\Admin{
    public function friendListAction(){
        $addFriend = \Leisure::getBlock('User\AddFriend')->toHtml();
        $this->makeResponse($addFriend);
    }
}

?>