<?php

namespace Model\Core;
class Request{
    public function getPost($key = null, $option = null){
        if(!$key){
            return $_POST;
        }
        if(!array_key_exists($key, $_POST)){
            return $option;
        }
        return $_POST[$key];
    }
    public function getGet($key = null, $option = null){
        if(!$key){
            return $_GET;
        }
        if(!array_key_exists($key, $_GET)){
            return $option;
        }
        return $_GET[$key];
    }

    public function isPost(){
        if($_SERVER['REQUEST_METHOD'] != 'POST'){
            return false;
        }
        return true;
    }
    public function isGet(){
        if($_SERVER['REQUEST_METHOD'] != 'GET'){
            return false;
        }
        return true;
    }

    public function getControllerName(){
        if(!$this->getGet('c')){
            return 'Login';
        }
        return $this->getGet('c');
    }
    public function getActionName(){
        if(!$this->getGet('a')){
            return 'index';
        }
        return $this->getGet('a');
    }
}

?>