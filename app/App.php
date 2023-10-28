<?php
namespace Company\Utility;
use Company\Utility\Controller\MainController;
class App{
    public static function init(){
        echo "APP is working.";
        $controller = new MainController();
        $controller->show();
    }
}