<?php

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Статьи';
$this->params['breadcrumbs'][] = $this->title;

?>

<table class="table table-striped">
    <thead><th>Статьи</th></thead>
    <tbody>
    <?php foreach($model->all() as $item): ?>
        <tr>
            <td>
                <a href="<?= Url::home().'news/view?id='.$item->id ?>">
                    <?= Html::encode($item->title) ?>
                </a>
            </td>
        </tr>
    <?php endforeach ?>
    </tbody>
</table>

<?= $linkPager ?>



<div class="news-default-index">
    <h1><?= $this->context->action->uniqueId ?></h1>
    <p>
        This is the view content for action "<?= $this->context->action->id ?>".
        The action belongs to the controller "<?= get_class($this->context) ?>"
        in the "<?= $this->context->module->id ?>" module.
    </p>
    <p>
        You may customize this page by editing the following file:<br>
        <code><?= __FILE__ ?></code>
    </p>
</div>
