<?php

namespace Model;
class User extends \Model\Core\Table{
    public function __construct(){
        $this->setTableName('user');
        $this->setPrimaryKey('userId');
    }

    public function getUserHobby(){
        if(!$this->userId){
            return false;
        }
        $sql = "SELECT * FROM `user_hobby` WHERE `userId` = {$this->userId}";
        $hobbies = \Leisure::getModel('Hobby')->fetchAll($sql);
        if(!$hobbies){
            return null;
        }
        return $hobbies;
    }

}

?>