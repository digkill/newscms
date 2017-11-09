<?php
/**
 * Created by PhpStorm.
 * User: edifanov
 * Date: 10.11.17
 * Time: 0:11
 */

namespace app\modules\user;

use yii\base\BootstrapInterface;
use Yii;

class Bootstrap implements BootstrapInterface
{
    public function bootstrap($app)
    {
        $app->i18n->translations['modules/user/*'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'forceTranslation' => true,
            'basePath' => '@app/modules/user/messages',
            'fileMap' => [
                'modules/user/module' => 'module.php',
            ],
        ];
    }
}