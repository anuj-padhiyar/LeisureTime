<?php
namespace Block\User;
class AddFriend extends \Block\Core\Template{
    protected $users = null;
    public function __construct(){
        $this->setTemplate('View/user/addFriend.php');
    }

    public function setUsers($users = null){
        if(!$users){
            $query = "SELECT * 
                FROM `user` AS u 
                LEFT JOIN `user_hobby` AS h 
                ON u.`userID` = h.`userId`";
            $users = \Leisure::getModel('User')->fetchAll($query);
        }
        $this->users = $users;
        return $this;
    }
    public function getUsers(){
        if(!$this->users){
            $this->setUsers();
        }
        return $this->users;
    }
}

?>