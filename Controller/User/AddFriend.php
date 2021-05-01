<?php

namespace Controller\User;
class AddFriend extends \Controller\Core\Admin{
    public function friendListAction(){
        $addFriend = \Leisure::getBlock('User\AddFriend')->toHtml();
        $this->makeResponse($addFriend);
    }

    public function sendRequestAction(){
        $requestId = $this->getRequest()->getGet('id');
        $userId = \Leisure::getModel('Core\Session')->userId;
        $userRequest = \Leisure::getModel('UserRequest');
        $requestedUsers = $userRequest->getUserRequests($userId);
        $array = $userRequest->getRequestArray($requestedUsers);

        if(in_array($requestId,$array)){
            $this->getMessage()->setFailure('Request Already Sended!!');
        }else{
            $userRequest->requestId = $requestId;
            $userRequest->userId = $userId;
            $userRequest->save();
            $this->getMessage()->setSuccess('Request Sent');
        }
        $addFriend = \Leisure::getBlock('User\AddFriend')->toHtml();
        $message = \Leisure::getBlock('Core\Layout\Message')->toHtml();
        $this->makeResponse($addFriend,$message);
    }
}

?>