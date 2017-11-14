<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\notification\models\NotificationType */

$this->title = Yii::t('notification', 'Create Notification Type');
$this->params['breadcrumbs'][] = ['label' => Yii::t('notification', 'Notification Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="notification-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
