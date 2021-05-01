<?php

namespace Model;
class UserRequest extends \Model\Core\Table{
    public function __construct(){
        $this->setTableName('user_request');
        $this->setPrimaryKey('userRequestId');
    }

    public function getUserRequests($id){
        $query = "SELECT * FROM {$this->getTableName()} WHERE  `userId`={$id}";
        $data = \Leisure::getModel('UserRequest')->fetchAll($query);
        if(!$data){
            return false;
        }
        return $data->getData();
    }

    public function getRequestArray($users){
        $arr = [];
        foreach($users as $key=>$user){
            $arr[] = $user->requestId;
        }
        return $arr;
    }

    public function getAllRequest($id){
        $query = "SELECT * FROM {$this->getTableName()} WHERE  `requestId`={$id}";
        $data = \Leisure::getModel('UserRequest')->fetchAll($query);
        if(!$data){
            return false;
        }
        return $data->getData();
    }

    public function getUserName(){
        $query = "SELECT `firstName`,`lastName` FROM `user` WHERE `userId`={$this->userId}";
        $user = \Leisure::getModel('User')->fetchRow($query);
        return $user->firstName.' '.$user->lastName;
    }

    public function getUserPicture(){
        $query = "SELECT `profilePicture` FROM `user` WHERE `userId`={$this->userId}";
        $user = \Leisure::getModel('User')->fetchRow($query);
        return $user->profilePicture;
    }
    
    public function getUserHobbies(){
        
    }
}

?>