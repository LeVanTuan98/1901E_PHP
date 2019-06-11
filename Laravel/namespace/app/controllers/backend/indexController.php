<?php
namespace app\controllers\backend;
use app\controllers\fontend\indexController as FIC; // Khi bị trùng tên class thì dùng as để tạo bí danh
use app\models\commonModels;
use vendor\vendor1\src\console\http;
/*
 * Khi import namespace thì phải import đến tận tên class
 */

class indexController {
    public function indexAction(){
        echo "<br> ".__METHOD__;
        $this -> useOtherNamespace();
    }
    public function useOtherNamespace(){
        $controllerF = new FIC();
        $controllerF->indexAction();

        $model = new commonModels();
        $model->indexAction();

        $test = new http();
        $test->indexAction();
    }

}