<?php

namespace Controller\User;
class Profile extends \Controller\Core\Admin{
    public function profileAction(){
        $profile = \Leisure::getBlock('User\Profile')->toHtml();
        $this->makeResponse($profile);
    }

    public function editFormAction(){
        $profile = \Leisure::getBlock('User\Edit')->toHtml();
        $this->makeResponse($profile);
    }

    public function resaveAction(){
        $user = $this->getRequest()->getPost('user');
        $userModel = \Leisure::getModel('User')->load($user['email'],'emailId');

      
        if($profilePicture = $_FILES['profilePicture']){
            $name = $profilePicture['name'];
            $extension = strtolower(substr($name, strpos($name,'.')+1));
            $name = $user['email'].'_'.$user['firstName'].'.'.$extension;
            $type = $profilePicture['type'];
            $tmp_name = $profilePicture['tmp_name'];
            $location = 'Skin/img/profiles/';
            if($extension == 'jpeg' || $extension == 'jpg'){
                unlink($userModel->profilePicture);
                move_uploaded_file($tmp_name,$location.$name);
                //$userModel->profilePicture = $location.$name;
            }
        }
        $userModel->firstName = ucfirst($user['firstName']);
        $userModel->lastName = ucfirst($user['lastName']);
        $userModel->emailId = $user['email'];
        $userModel->description = $user['description'];
        $userModel->password = md5($user['password']);
        $userModel->city = ucfirst($user['city']);
        if($userModel->save()){
            $this->getMessage()->setSuccess('Saved');
        }
        $profile = \Leisure::getBlock('User\Profile')->toHtml();
        $message = \Leisure::getBlock('Core\Layout\Message')->toHtml();
        $this->makeResponse($profile,$message);
    }
    public function logOutAction(){
        $session = \Leisure::getModel('core\session')->destroy();
        $this->getMessage()->setSuccess('Logged Out');
        $login = \Leisure::getBlock('Login')->toHtml();
        $message = \Leisure::getBlock('Core\Layout\Message')->toHtml();
        $this->makeResponse($login,$message);
    }

    public function acceptRequestAction(){
       $userId = $this->getRequest()->getGet('userId');
       $requestId = $this->getRequest()->getGet('requestId');
       $userRequestId= $this->getRequest()->getGet('userRequestId');

       $userFriend = \Leisure::getModel('UserFriend');
       $userFriend->userId = $userId;
       $userFriend->friendId = $requestId;
        if($userFriend->save()){
            $userRequest = \Leisure::getModel('UserRequest');
            $userRequest = $userRequest->load($userRequestId);
            $userRequest->delete();

            $user = \Leisure::getModel('User')->load($userId);
            $connection = $user->connection;
            $connection = $connection + 1;
            $user->connections = $connection;
            $user->save();

            $user = \Leisure::getModel('User')->load($requestId);
            $connection = $user->connection;
            $connection = $connection + 1;
            $user->connections = $connection;
            $user->save();
        }
    }

    public function rejectRequestAction(){
        $userRequestId= $this->getRequest()->getGet('userRequestId');
        $userRequest = \Leisure::getModel('UserRequest');
        $userRequest->load($userRequestId)->delete();
    }

    public function addHobbyAction(){
        $hobbyform = \Leisure::getBlock('User\HobbyForm')->toHtml();
        $this->makeResponse($hobbyform);
    }

    public function saveHobbyAction(){
        $hobbyIds = $this->getRequest()->getPost('hobby');
        $userId = \Leisure::getModel('Core\Session')->userId;
        $user = \Leisure::getModel('User')->load($userId);
        
        $userHobbies = $user->getUserHobby();
        $oldHobby = [];
        if($userHobbies){
            foreach($userHobbies->getData() as $key=>$hobby){
                $oldHobby[$hobby->userHobbyId] = $hobby->hobbyId;
            }
        }
        if($hobbyIds){
            foreach($hobbyIds as $id=>$value){
                if(in_array($id,$oldHobby)){
                    unset($oldHobby[array_search($id,$oldHobby)]);
                    continue;
                }
                $userHobbyModel = \Leisure::getModel('UserHobby');
                $userHobbyModel->userId = $userId;
                $userHobbyModel->hobbyId = $id;
                $userHobbyModel->save();
            }
        }

        if($oldHobby){
            foreach($oldHobby as $key=>$id){
                $userHobbyModel = \Leisure::getModel('UserHobby')->load($key)->delete();
            }
        }

        $profile = \Leisure::getBlock('User\Profile')->toHtml();
        $this->makeResponse($profile);
    }
}

?>