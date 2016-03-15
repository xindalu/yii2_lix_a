<?php

/* @var $this yii\web\View */
/* @var $user common\models\User */

$resetLink = Yii::$app->urlManager->createAbsoluteUrl(['test/default', 'token' => $token]);
?>
你好， <?= $user->cname ?>，
<div><?= $content ?></div>
<?= $resetLink ?>
