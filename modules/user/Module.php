<?php

namespace app\modules\user;
use Yii;

/**
 * user module definition class
 */
class Module extends \yii\base\Module
{

    public $passwordResetTokenExpire = 3600;

    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\user\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }

    public static function t($category, $message, $params = [], $language = null)
    {
        return Yii::t('modules/user/' . $category, $message, $params, $language);
    }
}
