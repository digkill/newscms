<?php

namespace app\modules\news\models;

use app\modules\user\models\User;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\helpers\ArrayHelper;
use yii\web\UploadedFile;

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
 * @property string $image
 *
 * @property User $author
 */
class News extends \yii\db\ActiveRecord
{
    public $file;
    public $del_img;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    const STATUS_PUBLISHED = 1;
    const STATUS_UNPUBLISHED = 2;

    public function getStatusName()
    {
        return ArrayHelper::getValue(self::getStatusesArray(), $this->status);
    }

    public static function getStatusesArray()
    {
        return [
            self::STATUS_PUBLISHED => 'Опубликовано',
            self::STATUS_UNPUBLISHED => 'Не опубликована',
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'alias', 'notice', 'author_id'], 'required'],
            [['created_at', 'updated_at', 'author_id', 'status'], 'integer'],
            [['notice', 'body'], 'string'],
            [['title', 'alias', 'image'], 'string', 'max' => 255],
            [['author_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['author_id' => 'id']],
            [['file'], 'file', 'extensions' => 'png, jpg'],
            [['del_img'], 'boolean'],
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
            'image' => Yii::t('news', 'Image'),
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
