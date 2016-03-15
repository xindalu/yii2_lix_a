<?php

namespace frontend\modules\test\controllers;

use Yii;
use frontend\modules\test\models\dao\DaoEmployee;
use frontend\modules\test\models\LogicEmployee;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use yii\base\Exception;

/**
 * EmployeeController implements the CRUD actions for DaoEmployee model.
 */
class EmployeeController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all DaoEmployee models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new LogicEmployee();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    
    public function actionTest($content = 'test')
    {
        if (yii::$app->request->getIsAjax()) {
            echo 'is ajax';
        } else {
            echo 'is not ajax';
        }
        
        echo '<br>';
        
        echo $content;
    }
    
    public function actionSetDept($id, $deptId)
    {
        echo 'id: ' . $id . '<br>deptId: ' . $deptId;
    }
    
    public function actionList()
    {
        $model = new LogicEmployee();
        
        $query = $model->find();
        $pagination = new Pagination([
            'defaultPageSize'   => 5,
            'totalCount'        => $query->count(),
        ]);
        $employees = $query->orderBy('num ASC')->offset($pagination->offset)->limit($pagination->limit)->all();
        //echo '<pre>';print_r($employees);die;
        return $this->render('list', [
            'employees'     => $employees,
            'pagination'    => $pagination,
        ]);
    }

    /**
     * Displays a single DaoEmployee model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new DaoEmployee model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new DaoEmployee();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }
    
    /**
     * 发送邮件
     * @param int $id
     */
    public function actionSendMail($id)
    {
        if (($model = DaoEmployee::findOne($id)) === null) {
            $result = '用户不存在，发送失败！';
        } else {
            $result = '发送邮件成功';
            
            try {
                // 动态配置发送
                /* $mail = Yii::$app->mailer;
                $mail->transport = $mail->transport->newInstance('mail.camera360.com', 25, 'tls');
                $mail->transport->setUsername('test');
                $mail->transport->setPassword('Aa654321');
                $mail->setTo($model->email);
                $mail->setSubject("测试邮件");
                $mail->setHtmlBody("<br>yyyyyyyyy");
                $mail->send(); */
                
                // 系统配置发送
                // 使用模板时不用setTextBody、setHtmlBody，否则模板会被覆盖
                $mail= Yii::$app->mailer->compose(['html' => 'test'], ['user' => $model, 'token' => 'aaa', 'content' => 'xxxxxxxxxxxxx']);
                $mail->setTo($model->email);
                $mail->setSubject("测试邮件");
                //$mail->setTextBody('xxxxxxxxxx '); // 发布纯文字文本
                //$mail->setHtmlBody("<br>yyyyyyyyy"); // 发布可以带html标签的文本
                $mail->send();
            } catch (Exception $e) {
                $result = '发送邮件失败: [' . $e->getCode() . '] [' . $e->getMessage() . ']';
            }
        }
        
        return $this->redirect(['view', 'id' => $id, 'msg' =>$result]);
    }

    /**
     * Updates an existing DaoEmployee model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing DaoEmployee model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DaoEmployee model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return DaoEmployee the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DaoEmployee::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
