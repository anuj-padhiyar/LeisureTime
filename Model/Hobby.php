<?php

namespace Model;
class Hobby extends \Model\Core\Table{
    public function __construct(){
        $this->setTableName('hobby');
        $this->setPrimaryKey('hobbyId');
    }

    public function getHobbyNameById(){
        if(!$this->hobbyId){
            return false;
        }
        $hobby = \Leisure::getModel('Hobby')->load($this->hobbyId);
        return $hobby->hobbyName;
    }
}

?>