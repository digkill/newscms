<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user_notification_type`.
 */
class m171113_060756_create_user_notification_type_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user_notification_type}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'notification_type_id' => $this->integer()
        ], $tableOptions);

        $this->addForeignKey('fk_user_notification_type_user', '{{%user_notification_type}}', 'user_id', '{{%user}}', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_user_notification_type_user_notification_type', '{{%user_notification_type}}', 'notification_type_id', '{{%notification_type}}', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {

        $this->dropForeignKey(
            'fk_user_notification_type_user',
            '{{%user_notification_type}}'
        );
        $this->dropForeignKey(
            'fk_user_notification_type_user_notification_type',
            '{{%user_notification_type}}'
        );

        $this->dropTable('{{%user_notification_type}}');
    }
}
