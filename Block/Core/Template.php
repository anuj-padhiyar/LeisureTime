<?php
namespace Block\Core;
class Template{
    private $children = [];
    private $template = null;
    protected $controller = null;
    protected $message = null;
    protected $request = null;
    protected $url = null;
    protected $userRequest=null;
    protected $user = null;

    public function createBlock($className){
        return \Leisure::getBlock($className);
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

    public function setUserRequest(){
        $this->userRequest = \Leisure::getModel('userRequest');
        return $this;
    }
    public function getUserRequest(){
        if(!$this->userRequest){
            $this->setUserRequest();
        }
        return $this->userRequest;
    }
    
    public function setTemplate($template){
        $this->template = $template;
        return $this;
    }
    public function getTemplate(){
        if(!$this->template){
            $this->setTemplate();
        }
        return $this->template;
    }

    public function setController(\Controller\Core\Admin $controller){
        $this->controller = $controller;
        return $this;
    }
    public function getController(){
        return $this->controller;
    }

    public function toHtml(){
        ob_start();
        require_once $this->getTemplate();
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }
    
    public function getChildren(){
        return $this->children;
    }
    public function setChildren(array $children = []){
        $this->children = $children;
        return $this;
    }
    public function addChild($child, $key = null){
        if(!$key){
            $key = get_class($child);
        }
        $this->children[$key] = $child;
        return $this;
    }
    public function getChild($key){
        if(!array_key_exists($key,$this->children)){
            return null;
        }
        return $this->children[$key];
    }
    public function removeChildren($key){
        if(!array_key_exists($key,$this->children)){
            unset($this->childern[$key]);
        }
        return $this;
    }

    public function setRequest($request = NULL){
        if(!$request){
            $request = \Leisure::getModel('Core\Request');
        }
        $this->request = $request;
    }
    public function getRequest(){
        if(!$this->request){
           $this->setRequest(); 
        }
        return $this->request;
        
    }

    public function setMessage($message = null){
		$this->message =  \Leisure::getModel('Core\Message');
		return $this;
	}
	public function getMessage(){
		if(!$this->message){
			$this->setMessage();
		}
		return $this->message;
	}

    public function setUrl($url = null){
        if(!$url){
            $url = \Leisure::getModel('Core\Url');
        }
        $this->url = $url;
        return $this;
    }
    public function getUrl() {
        if(!$this->url){
            $this->setUrl();
        }
        return $this->url;
    }

    public function baseUrl($subUrl = null){
        return $this->getUrl()->baseUrl($subUrl);
    }
}

?>