<?php 

namespace Controller;
class Login extends \Controller\Core\Admin{
    public function indexAction(){
        $layout = $this->getLayout();
        echo $layout->toHtml();
    }

    public function loginAction(){
       try{
            $session = \Leisure::getModel('Core\Session');
            // $session = \Leisure::getModel('Core\Session')->destroy();
            if($session->userId){
                $home = \Leisure::getBlock('User\Home')->toHtml();
                $this->makeResponse($home);
            }else{
                $login = \Leisure::getBlock('Login')->toHtml();
                $this->makeResponse($login);
            }
       }catch(\Exception $e){
            echo $e->getMessage();
       }
    }

    public function validateAction(){
        $user = $this->getrequest()->getPost('user');
        if(!empty($user['email']) && !empty($user['password'])){
            $data = \Leisure::getModel('User')->load($user['email'],'emailId');
            if($data && $data->password == md5($user['password'])){
                $session = \Leisure::getModel('Core\Session');
                $session->userId = $data->userId;
                $this->getMessage()->setSuccess('Logged In');
                $home = \Leisure::getBlock('User\Home')->toHtml();
                $message = \Leisure::getBlock('Core\Layout\Message')->toHtml();
                $this->makeResponse($home,$message);
            }else{
                $this->getMessage()->setFailure('Wrong Data');
                $login = \Leisure::getBlock('Login')->toHtml();
                $message = \Leisure::getBlock('Core\Layout\Message')->toHtml();
                $this->makeResponse($login,$message);
            }
        }else{
            $this->getMessage()->setFailure('Enter Valid Username/Password');
            $login = \Leisure::getBlock('Login')->toHtml();
            $message = \Leisure::getBlock('Core\Layout\Message')->toHtml();
            $this->makeResponse($login,$message);
        }
    }

    public function registerFormAction(){
        $register = \Leisure::getBlock('Register')->toHtml();
        $this->makeResponse($register);
    }

    public function registerAction(){
        $user = $this->getRequest()->getPost('user');
        $profilePicture = $_FILES['profilePicture'];

        $userModel = \Leisure::getModel('User')->load($user['email'],'emailId');
        if(!$userModel){
            $name = $profilePicture['name'];
            $extension = strtolower(substr($name, strpos($name,'.')+1));
            $name = $user['email'].'_'.$user['firstName'].'.'.$extension;
            $type = $profilePicture['type'];
            $tmp_name = $profilePicture['tmp_name'];
            $location = 'Skin/img/profiles/';
            if($extension == 'jpeg' && $type == 'image/jpeg'){
                if(move_uploaded_file($tmp_name,$location.$name)){
                    $userModel = \Leisure::getModel('User');
                    $userModel->firstName = ucfirst($user['firstName']);
                    $userModel->lastName = ucfirst($user['lastName']);
                    $userModel->emailId = $user['email'];
                    $userModel->password = md5($user['password']);
                    $userModel->city = ucfirst($user['city']);
                    $userModel->profilePicture = $location.$name;
                    if($userModel->save()){
                        $this->getMessage()->setSuccess('Registered Successfully');
                    }
                }
            }
        }else{
            $this->getMessage()->setFailure('User Already Registered!');
        }

        $login = \Leisure::getBlock('Login')->toHtml();
        $message = \Leisure::getBlock('Core\Layout\Message')->toHtml();
        $this->makeResponse($login,$message);
    }
}



?>