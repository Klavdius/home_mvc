<?php

namespace Core\Controller;

use \Core\Model\Request;

class Front
{

    private $request;

    public function __construct()
    {
        $this->request = new Request();
    }

    /**
     * @return Request
     */
    public function getRequest()
    {
        return $this->request;
    }


    public function dispatch()
    {

        $nameController = '\\App\\Controller\\' . ucwords(mb_strtolower(str_replace('_', '\\', $this->getRequest()->getControllerName()  )), '\\') . 'Controller';
        $nameAction = $this->getRequest()->getActionName();

        if (!class_exists($nameController)) {
            $nameController = '\\App\\Controller\\ErrorController';
            $nameAction = 'e404';
        }

        $controller = new $nameController();
        $controller->setRequest($this->getRequest());
        $nameAction = $nameAction . 'Action';
        $controller->{$nameAction}();
    }
}