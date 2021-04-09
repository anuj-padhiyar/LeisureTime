<?php

namespace Model;
class Hobby extends \Model\Core\Table{
    public function __construct(){
        $this->setTableName('hobby');
        $this->setPrimaryKey('hobbyId');
    }
}

?>