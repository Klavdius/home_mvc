<?php

namespace App\Controller\Library;

class RecordController extends \Core\Controller\Controller
{


    public function listAction()
    {
        var_dump($this->getRequest()->getGet());
    }


}