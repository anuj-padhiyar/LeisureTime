<?php

namespace Model\Core;

class Session{
    protected $nameSpace;

    public function __construct(){
        $this->start();
    }
    public function start(){
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
        return $this;
    }
    public function destroy(){
        session_destroy();
        return $this;
    }

    public function __set($key,$value){
        $_SESSION[$key] = $value;
        return $this;
    }
    public function __get($key){
        if(array_key_exists($key, $_SESSION)){
            return $_SESSION[$key];
        }
        return null;
    }
    public function __unset($key){
        if(array_key_exists($key,$_SESSION)){
            unset($_SESSION[$key]);
        }
        return $this;
    }

    public function getId(){
        return session_id();
    }
    public function regenerateId(){
        return session_regenerate_id();
    }

}

?>