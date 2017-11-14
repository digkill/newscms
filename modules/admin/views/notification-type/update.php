<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\notification\models\NotificationType */

$this->title = Yii::t('notification', 'Update {modelClass}: ', [
    'modelClass' => 'Notification Type',
]) . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('notification', 'Notification Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('notification', 'Update');
?>
<div class="notification-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
