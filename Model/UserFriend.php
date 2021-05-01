<?php

namespace Model;
class UserFriend extends \Model\Core\Table{
    public function __construct(){
        $this->setTableName('user_friend');
        $this->setPrimaryKey('userFriendId');
    }

}

?>