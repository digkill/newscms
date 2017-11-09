<?php

namespace app\modules\news\models;

use app\modules\user\models\User;
use Yii;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $title
 * @property string $alias
 * @property string $notice
 * @property string $body
 * @property integer $author_id
 * @property integer $status
 *
 * @property User $author
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at', 'title', 'alias', 'notice', 'author_id'], 'required'],
            [['created_at', 'updated_at', 'author_id', 'status'], 'integer'],
            [['notice', 'body'], 'string'],
            [['title', 'alias'], 'string', 'max' => 255],
            [['author_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['author_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('news', 'ID'),
            'created_at' => Yii::t('news', 'Created At'),
            'updated_at' => Yii::t('news', 'Updated At'),
            'title' => Yii::t('news', 'Title'),
            'alias' => Yii::t('news', 'Alias'),
            'notice' => Yii::t('news', 'Notice'),
            'body' => Yii::t('news', 'Body'),
            'author_id' => Yii::t('news', 'Author ID'),
            'status' => Yii::t('news', 'Status'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(User::className(), ['id' => 'author_id']);
    }

    /**
     * @inheritdoc
     * @return NewsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new NewsQuery(get_called_class());
    }
}
