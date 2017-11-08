<?php
/**
 * Created by PhpStorm.
 * User: digkill
 * Date: 08.11.17
 * Time: 17:18
 */

namespace app\modules\admin\components;

use app\modules\admin\models\User;
use yii\grid\DataColumn;
use yii\helpers\Html;

class UserStatusColumn extends DataColumn
{
    protected function renderDataCellContent($model, $key, $index)
    {
        /** @var User $model */
        $value = $this->getDataCellValue($model, $key, $index);
        switch ($value) {
            case User::STATUS_ACTIVE:
                $class = 'success';
                break;
            case User::STATUS_WAIT:
                $class = 'warning';
                break;
            case User::STATUS_BLOCKED:
            default:
                $class = 'default';
        };
        $html = Html::tag('span', Html::encode($model->getStatusName()), ['class' => 'label label-' . $class]);
        return $value === null ? $this->grid->emptyCell : $html;
    }
}