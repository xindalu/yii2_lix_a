<?php

namespace frontend\modules\test\controllers;

use yii\web\Controller;
use yii\helpers\Url;
use yii;

class TestTestController extends Controller
{
    public function actionIndex()
    {
        echo '123';
    }
    
    public function actionTestTest()
    {
        // currently active route
        // /index.php?r=management/default/users
        echo Url::to('') . '<br>';
        
        // same controller, different action
        // /index.php?r=management/default/page&id=contact
        echo Url::toRoute(['page', 'id' => 'contact']) . '<br>';
        
        
        // same module, different controller and action
        // /index.php?r=management/post/index
        echo Url::toRoute('post/index') . '<br>';
        
        // absolute route no matter what controller is making this call
        // /index.php?r=site/index
        echo Url::toRoute('/site/index') . '<br>';
        
        // url for the case sensitive action `actionHiTech` of the current controller
        // /index.php?r=management/default/hi-tech
        echo Url::toRoute('hi-tech') . '<br>';
        
        // url for action the case sensitive controller, `DateTimeController::actionFastForward`
        // /index.php?r=date-time/fast-forward&id=105
        echo Url::toRoute(['/date-time/fast-forward', 'id' => 105]) . '<br>';
        
        // get URL from alias
        // http://google.com/
        Yii::setAlias('@google', 'http://google.com/');
        echo Url::to('@google') . '<br>';
        
        // get home URL
        // /index.php?r=site/index
        echo Url::home() . '<br>';
        
        Url::remember(); // save URL to be used later
        Url::previous(); // get previously saved URL
        
        die;
        
        echo \Yii::$app->urlManager->createUrl(['test/employee/view', 'id' => 1]) . '<br>';
        // /index.php/site/page/id/about/
        echo \Yii::$app->urlManager->createUrl(['test-test/test-test', 'id' => 105]) . '<br>';
        // /index.php?r=date-time/fast-forward&id=105
        echo \Yii::$app->urlManager->createAbsoluteUrl('blog/post/index') . '<br>';
        // http://www.example.com/index.php/blog/post/index/
    }
}
