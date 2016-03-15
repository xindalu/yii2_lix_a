<?php
namespace frontend\modules\test\controllers;

use yii\web\Controller;

class HelloWorldController extends Controller
{
    public function actionSayHello()
    {
        echo 'Hello';
    }
}