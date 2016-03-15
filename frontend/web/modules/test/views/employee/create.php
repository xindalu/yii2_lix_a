<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\test\models\dao\DaoEmployee */

$this->title = 'Create Dao Employee';
$this->params['breadcrumbs'][] = ['label' => 'Dao Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dao-employee-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
