<?php
/**
 * Created by PhpStorm.
 * User: edifanov
 * Date: 10.11.17
 * Time: 0:11
 */

namespace app\modules\notification;

use yii\base\BootstrapInterface;
use Yii;

class Bootstrap implements BootstrapInterface
{
    public function bootstrap($app)
    {
        $app->i18n->translations['modules/notification/*'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'forceTranslation' => true,
            'basePath' => '@app/modules/notification/messages',
            'fileMap' => [
                'modules/notification/module' => 'module.php',
            ],
        ];
    }
}