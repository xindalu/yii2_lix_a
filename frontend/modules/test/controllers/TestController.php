<?php
namespace frontend\modules\test\controllers;

use yii\web\Controller;

class TestController extends Controller
{
    public function actionIndex()
    {
        echo 'index';
    }
    
    public function actionSay($word = 'test')
    {
        echo '[test]<br>' . $word;
    }
}