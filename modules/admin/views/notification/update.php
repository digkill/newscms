<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\notification\models\Notification */

$this->title = Yii::t('notification', 'Update {modelClass}: ', [
    'modelClass' => 'Notification',
]) . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('notification', 'Notifications'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('notification', 'Update');
?>
<div class="notification-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
