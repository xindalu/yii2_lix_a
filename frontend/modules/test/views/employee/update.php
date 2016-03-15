<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\test\models\dao\DaoEmployee */

$this->title = '修改员工: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => '员工列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="dao-employee-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
