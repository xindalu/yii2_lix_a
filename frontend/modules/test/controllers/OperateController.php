<?php

namespace frontend\modules\test\controllers;

use Yii;
use yii\web\Controller;
use yii\mongodb\Query;
use frontend\modules\test\models\dao\DaoOperate;

/**
 * OperateController
 */
class OperateController extends Controller
{
    public function actionIndex()
    {
        $query = new Query();
        $query->select(['_id', 'operate', 'operateTime']);
        $query->from = DaoOperate::tableName();
        $query->orderBy('_id DESC');
        $query->limit(10);
        $rows = $query->all();
        echo json_encode(array('status' => 200, 'data' => $rows, 'msg' => 'ok'));
    }
    
    public function actionAdd()
    {
        $model = new DaoOperate();
        $query = new Query();
        $query->from = DaoOperate::tableName();
        $model->_id = $query->max('_id') + 1;
        $model->operate = 'test_' . $model->_id;
        $model->operateTime = time();
        
        $ret = $model->save();
        
        echo '<pre>';var_dump($ret);die;
    }
    
    public function actionTest($txt = 'default')
    {
        echo date('Y-m-d H:i:s', strtotime("+1 week 3 days 7 hours 5 seconds"));
        die;
        return $this->render('test', [
            'txt' => $txt,
        ]);
    }
}
