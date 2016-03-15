<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\test\models\dao\DaoEmployee */

$this->title = 'Update Dao Employee: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Dao Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dao-employee-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
