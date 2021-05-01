<?php

namespace Block\User;
class Profile extends \Block\Core\Template{
    protected $user = null;
    public function __construct(){
        $this->setTemplate('View/user/profile.php');
    }
}

?>