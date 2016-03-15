<?php
namespace backend\controllers;

use yii\web\Controller;

class TestController extends Controller
{
    public function actionIndex()
    {
        echo 'index';
    }
    
    public function actionHelloWorld()
    {
        echo 'hello';
    }
}