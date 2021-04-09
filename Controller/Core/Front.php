<?php

namespace Controller\Core;
class Front{
    public static function init(){
        $request = \Leisure::getModel('Core\Request');
        $controllerName = ucfirst($request->getControllerName());
        $actionName = $request->getActionName().'Action';
        $controllerName = 'Controller\\'.$controllerName;
        $controller = new $controllerName();
        $controller->$actionName();
    }
}





?>