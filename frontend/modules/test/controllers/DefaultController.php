<?php

namespace frontend\modules\test\controllers;

use yii;
use yii\web\Controller;
use yii\web\Response;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        echo $_SERVER["HTTP_HOST"];
        //global_test();die; // 全局函数：common/components/GlobalFunctions.php
        // 日志
        //Yii::info('123', 'info');
        Yii::error('456', __METHOD__);die;
        
        // 常用数据
        //echo Yii::$app->request->getPort();die;
        //echo Yii::$app->request->userIP;die;
        
        echo '<pre>';print_r(\yii\BaseYii::$aliases);die;
        echo Yii::getAlias('@common');
        die;
        // 绝对调用
        //echo \yii::getAlias('@' . str_replace('\\', '/', 'yii\web\Controller') . '.php', false);die;
        echo Yii::getAlias('@app');
        die;
        return $this->render('index');
    }
    
    public function actionTestAlias()
    {
        // 设置了根别名，可以衍生新的别名
        Yii::setAlias('@aaa', 'path/aaa');
        echo Yii::getAlias('@aaa/bbb') . '<br>';
        die;
        
        
        Yii::setAlias('@bar/qux', 'path/to/bar/qux2');
        
        /**
         * 新增：krsort（abc优先ab，而不是abc优先bc）
         * BaseYii::aliases['@bar'] = [
         *     '@bar/qux' => 'path/to/bar/qux2',
         *     '@bar/foo' => 'path/to/bar/foo',
         * ];
        */
        Yii::setAlias('@bar/foo', 'path/to/bar/foo');
        echo '<pre>';print_r(Yii::$aliases);die;
        
        echo '============== 设置别名 ==============<br>';
        /* [@foo] => Array
        (
            [@foo/bar] => path/to/foo/bar
            [@foo] => path/to/foo
        ) */
        Yii::setAlias('@foo', 'path/to/foo');
        Yii::setAlias('@foo/bar', 'path/to/foo/bar');
        echo '<pre>';print_r(Yii::$aliases); // BaseYii::$aliases

        echo '============== 使用别名 ==============<br>';
        // 使用別名的2种方式
        echo Yii::$aliases['@webroot'] . '<br>';
        echo Yii::getAlias('@webroot') . '<br>';
    }
    
    public function actionXml()
    {
        Yii::$app->response->format = Response::FORMAT_XML;
        
        return [
            "ToUserName"=>$postObject->FromUserName,
            "FromUserName"=>$postObject->ToUserName,
            "CreateTime"=>time(),
            "MsgType"=>"music",
            "Music"=>[
                "Title"=>'aaa',
                "Description"=>'bbb',
                "MusicUrl"=>'ccc',
                "HQMusicUrl"=>'ddd',
            ]
        ];
    }
}
