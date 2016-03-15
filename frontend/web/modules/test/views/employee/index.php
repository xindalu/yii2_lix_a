<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\test\models\LogicEmployee */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dao Employees';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dao-employee-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Dao Employee', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'num',
            'sex',
            'cname',
            'ename',
            // 'email:email',
            // 'remark',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
