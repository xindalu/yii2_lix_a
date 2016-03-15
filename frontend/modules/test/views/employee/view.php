<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\modules\test\models\dao\DaoEmployee */

$this->title = '员工: ' . $model->cname;
$this->params['breadcrumbs'][] = ['label' => '员工列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$msg = isset($_REQUEST['msg']) ? $_REQUEST['msg'] : '';
?>
<div class="dao-employee-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('修改', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '确认删除当前用户？',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('测试邮件', ['send-mail', 'id' => $model->id], [
            'class' => 'btn btn-info',
            'data' => [
                'confirm' => '确认发送测试邮件给当前用户？',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a($msg) ?>
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
            ['attribute' => 'create_time', 'format' => ['date', 'php:Y-m-d H:i:s']],
            ['attribute' => 'update_time', 'format' => ['date', 'php:Y-m-d H:i:s']],
        ],
    ]) ?>

</div>
