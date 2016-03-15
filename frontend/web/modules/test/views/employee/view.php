<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\modules\test\models\dao\DaoEmployee */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Dao Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dao-employee-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'num',
            'sex',
            'cname',
            'ename',
            'email:email',
            'remark',
        ],
    ]) ?>

</div>
