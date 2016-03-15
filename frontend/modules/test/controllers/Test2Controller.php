<?php
namespace frontend\modules\test\controllers;

use yii\web\Controller;

class Test2Controller extends Controller
{
    public function actionIndex()
    {
        echo 'index';
    }
    
    public function actionSay($word = 'test2')
    {
        echo '[test2]<br>' . $word;
    }
}