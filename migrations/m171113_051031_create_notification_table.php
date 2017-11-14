

<?php

use yii\db\Migration;

/**
 * Handles the creation of table `notification`.
 */
class m171113_051031_create_notification_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%notification}}', [
            'id' => $this->primaryKey(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'title' => $this->string()->notNull(),
            'body' => $this->text(),
            'user_id' => $this->integer(),
            'notification_type_id' => $this->integer(),
            'status' => $this->integer(1),
        ], $tableOptions);

        $this->addForeignKey(
            'fk_notification_user',
            '{{%notification}}',
            'user_id',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk_notification_notification_type',
            '{{%notification}}',
            'notification_type_id',
            '{{%notification_type}}',
            'id',
            'CASCADE'
        );

    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropForeignKey(
            'fk_notification_notification_type',
            '{{%notification}}'
        );

        $this->dropForeignKey(
            'fk_notification_user',
            '{{%notification}}'
        );
        $this->dropTable('{{%notification}}');
    }
}
