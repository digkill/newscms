<?php
/**
 * Created by PhpStorm.
 * User: digkill
 * Date: 08.11.17
 * Time: 15:28
 */

namespace app\assets;

use yii\web\AssetBundle;
use yii\web\View;

class RespondAsset extends AssetBundle
{
    public $sourcePath = '@bower/respond/dest';
    public $js = [
        'respond.min.js',
    ];
    public $jsOptions = [
        'condition'=>'lt IE 9',
        'position' => View::POS_HEAD,
    ];
}