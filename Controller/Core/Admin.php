<?php 

namespace Controller\Core;
class Admin{
    protected $request = null;
    protected $layout = null;
    protected $message = null;

    public function __construct(){
        $this->setRequest();
        $this->setLayout();
    }

    public function setRequest(){
        $this->request = \Leisure::getModel('Core\Request');
        return $this;
    }
    public function getRequest(){
        if(!$this->request){
            $this->setrequest();
        }
        return $this->request;
    }

    public function setLayout(\Block\Core\Layout $layout = null){
        if(!$layout){
            $layout = \Leisure::getBlock('Core\Layout');
        }
        $this->layout = $layout;
        return $this->layout;
    }
    public function getLayout(){
        return $this->layout;
    }
    public function renderLayout(){
        echo $this->getLayout()->toHtml();
    }

    public function setMessage(\Model\Core\Message $message = null){
        if(!$message){
            $message = \Leisure::getModel('Core\Message');
        }
        $this->message = $message;
        return $this;
    }
    public function getMessage(){
        if(!$this->message){
            $this->setMessage();
        }
        return $this->message;
    }

    public function redirect($actionName = null, $controllerName = null){
        header("Location:".$this->getUrl($actionName, $controllerName, [],null));
    }

    public function getUrl($actionName = null, $controllerName = null, $params = [], $resetParms = false){
        $final = $this->getRequest()->getGet();
        if($resetParms){
            $final = [];
        }
        if(!$actionName){
            $actionName = $this->getRequest()->getGet('a');
        }
        if(!$controllerName){
            $controllerName = $this->getRequest()->getGet('c');
        }

        $final['c'] = $controllerName;
        $final['a'] = $actionName;

        $final = array_merge($final, $params);
        $queryString = http_build_query($final);
        unset($final);

        return "http://localhost/phpCode/LeisureTime/?{$queryString}";
    }

    public function makeResponse($block,$message = null){
        $response = [
            'status' => 'success',
            'message' =>'this is grid action.',
            'element' =>[
                [
                    'selector' =>'#contentHtml',
                    'html' =>$block
                ],
                [
                    'selector' =>'#messageHtml',
                    'html' =>$message
                ]
            ]
        ];
		header("Content-Type: application/json");
		echo json_encode($response);
	}
}




?>