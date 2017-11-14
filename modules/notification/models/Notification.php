<?php

namespace app\modules\notification\models;

use app\modules\user\models\User;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "notification".
 *
 * @property integer $id
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $title
 * @property string $body
 * @property integer $user_id
 * @property integer $notification_type_id
 * @property integer $status
 *
 * @property NotificationType $notificationType
 * @property User $user
 */
class Notification extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'notification';
    }

    const STATUS_UNREAD = 0;
    const STATUS_READ = 1;

    public function getStatusName()
    {
        return ArrayHelper::getValue(self::getStatusesArray(), $this->status);
    }

    public static function getStatusesArray()
    {
        return [
            self::STATUS_UNREAD => 'Сообщение прочитано',
            self::STATUS_READ => 'Сообщение не прочитано',
        ];
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['notification_type_id', 'status'], 'integer'],
            [['body'], 'string'],
            [['title'], 'string', 'max' => 255],
            [['notification_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => NotificationType::className(), 'targetAttribute' => ['notification_type_id' => 'id']],
          //  [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'title' => Yii::t('app', 'Title'),
            'body' => Yii::t('app', 'Body'),
            'user_id' => Yii::t('app', 'User ID'),
            'notification_type_id' => Yii::t('app', 'Notification Type ID'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNotificationType()
    {
        return $this->hasOne(NotificationType::className(), ['id' => 'notification_type_id']);
    }

    /**
     * @return array Вывод всех типов уведомлений
     */
    public function getNotificationTypes()
    {
        $model = NotificationType::find()->all();
        return ArrayHelper::map($model, 'id', 'name');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return array Вывод всех юзеров
     */
    public function getUsers()
    {
        $users = User::findAll(['status' => User::STATUS_ACTIVE]);

        return ArrayHelper::map($users, 'id', 'username');
    }

    /**
     * Передача данных для отправки уведомлений
     */
    public function set()
    {

   var_dump($this->user_id);
   die();
        $users = User::findAll(['id' => (array) $this->user_id]);

        foreach($users as $user) {
            $data = [
                'title' => $this->title,
                'body' => $this->body,
                'user_id' => $user->id,
                'user_email' => $user->email,
                'notification_type_id' => $this->notification_type_id
            ];

            $this->saveData($data);
        }

    }

    /**
     * Отправка уведомлений
     * @param $data - Входящие данные
     */
    public function saveData($data)
    {
        $subscribers = UserNotificationType::find()
            ->where([
                'user_id' => $data['user_id'],
                'notification_type_id' => $data['notification_type_id']
            ])
            ->count();




        if($subscribers) {

            $notification = new Notification();

            $notification->title = $data['title'];
            $notification->body = $data['text'];
            $notification->user_id = $data['user_id'];
            $notification->notification_type_id = $data['notification_type_id'];
            $result = $notification->save();

            if ($result) {
                $notification->getErrors();
                die();
            }


        /*
            if($data['notification_type_id'] == 1)
            {
                Yii::$app->mailer->compose()
                    ->setFrom('infosales@openspace.kz')
                    ->setTo($data['user_email'])
                    ->setSubject($data['title'])
                    ->setHtmlBody($data['text'])
                    ->send();
            }
            */
        }
    }
}
