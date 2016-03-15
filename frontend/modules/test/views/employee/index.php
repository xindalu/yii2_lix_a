<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\test\models\LogicEmployee */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '员工列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dao-employee-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('添加员工', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'num',
            'sex',
            'cname',
            'ename',
            'email:email',
            //'remark',
            //['label' => '创建时间', 'value' => 'create_time', 'format' => ['date', 'php: Y-m-d H:i:s']],
            //'update_time:datetime',
            [
                'class' => 'yii\grid\ActionColumn',
                'header' => '操作',
                'template' => '{view} {delete} {update}',//只需要展示删除和更新
                'headerOptions' => ['width' => '100'],
                'buttons' => [
                    'delete' => function($url, $model, $key){
                        return Html::a('<i class="fa fa-ban"></i> 删除',
                            ['del', 'id' => $key],
                            [
                                'class' => 'btn btn-default btn-xs',
                                'data' => ['confirm' => '确定删除？',]
                            ]
                        );
                    },
                ],
            ],
        ],
        'layout'=> '{items}<div class="text-right tooltip-demo">{pager}</div>', // 靠右显示分页栏
        'pager'=>[
            //'options'=>['class'=>'hidden']//关闭分页
            'firstPageLabel'=>"首页",
            'prevPageLabel'=>'上一页',
            'nextPageLabel'=>'下一页',
            'lastPageLabel'=>'末页',
         ],
    ]); ?>

</div>
