<?php
namespace Block\User;
class Home extends \Block\Core\Template{
    protected $hobbies = null;
    protected $user = null;

    public function __construct(){
        $this->setTemplate('View/user/home.php');
    }
    
    public function setHobbies($hobbies = null){
        if(!$hobbies){
            $hobbies = \Leisure::getModel('Hobby')->fetchAll();
        }
        $this->hobbies = $hobbies;
        return $this;
    }
    public function getHobbies(){
        if(!$this->hobbies){
            $this->setHobbies();
        }
        return $this->hobbies;
    }

    public function setUser($user = null){
        if(!$user){
            $userId = \Leisure::getModel('Core\Session')->userId;
            $user = \Leisure::getModel('User')->load($userId);
        }
        $this->user = $user;
        return $this;
    }
    public function getUser(){
        if(!$this->user){
            $this->setUser();
        }
        return $this->user;
    }
}
?>
