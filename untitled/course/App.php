<?php

define('BD', dirname(__DIR__));
define('DS', DIRECTORY_SEPARATOR);

spl_autoload_register(function ($className) {
$fileName = BD . DS . 'course' . DS . 'class' . DS . str_replace('\\',DS, trim($className,"\\")) . '.php';
if(file_exists($fileName)) {
    require_once $fileName;
}
});


class App
{
    //model view Controller
    //   базовый урл / имя контроллера / имя экшена
    public function run()
    {
      $dispatcher= new \Core\Controller\Front();
      $dispatcher->dispatch();
//        phpinfo();

    }

}


