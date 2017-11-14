<?php

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Статьи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>

<h1><?= $model->title ?></h1>

<p>
    <?= $model->body ?>
</p>