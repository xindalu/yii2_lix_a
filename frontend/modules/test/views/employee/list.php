<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = '员工列表';
$this->params['breadcrumbs'][] = $this->title;
?>

<div>

</div>

<h1><?= Html::encode($this->title) ?></h1>
<ul>
<?php foreach ($employees as $employee): ?>
    <li>
        <?= Html::encode("{$employee->cname} ({$employee->num})") ?>:
        <?= $employee->ename ?>
    </li>
<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>
