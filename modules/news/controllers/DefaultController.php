<?php

namespace app\modules\news\controllers;

use app\modules\news\models\News;
use yii\data\Pagination;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;
use yii\web\Controller;

/**
 * Default controller for the `news` module
 */
class DefaultController extends Controller
{

    /**
     * @return array Контроль доступа
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['index'],
                        'roles' => ['?'],
                    ],
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $model = News::find()->orderBy(['id' => 'DESC']);

        $limit = 10; // PageSize::findOne(['id' => 1])->value;

        $pagination = new Pagination([
            'totalCount' => $model->count(),
            'pageSize' => $limit
        ]);

        $model
            ->limit($limit)
            ->offset(ArrayHelper::getValue($_GET, 'per-page', 0));

        $linkPager =  \yii\widgets\LinkPager::widget([
            'pagination' => $pagination,
        ]);

        return $this->render('index', [
            'model' => $model,
            'linkPager' => $linkPager
        ]);
    }

    /**
     * Просмотр увеодомления
     * @param $id Первичный_ключ
     * @return string
     */
    public function actionView($id)
    {
        $model = News::findOne(['id' => $id]);

        return $this->render('view', [
            'model' => $model
        ]);
    }
}
