<?php

namespace Model;
class UserHobby extends \Model\Core\Table{
    public function __construct(){
        $this->setTableName('user_hobby');
        $this->setPrimaryKey('userHobbyId');
    }

}

?>