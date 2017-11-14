<?php
/**
 * Created by PhpStorm.
 * User: edifanov
 * Date: 10.11.17
 * Time: 0:11
 */

namespace app\modules\admin;

use yii\base\BootstrapInterface;
use Yii;

class Bootstrap implements BootstrapInterface
{
    public function bootstrap($app)
    {
        $app->i18n->translations['modules/admin/*'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'forceTranslation' => true,
            'basePath' => '@app/modules/admin/messages',
            'fileMap' => [
                'modules/admin/module' => 'module.php',
            ],
        ];
    }
}