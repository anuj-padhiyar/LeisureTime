<?php

namespace Model;
class User extends \Model\Core\Table{
    public function __construct(){
        $this->setTableName('user');
        $this->setPrimaryKey('userId');
    }
}

?>