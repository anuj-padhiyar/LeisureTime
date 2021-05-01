<?php
namespace Block\User;
class HobbyForm extends \Block\Core\Template{
    protected $hobbies = null;

    public function __construct(){
        $this->setTemplate('View/user/hobbyForm.php');
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
}
?>
