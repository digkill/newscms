<?php

use yii\db\Migration;

/**
 * Handles the creation of table `notification_type`.
 */
class m171113_051016_create_notification_type_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%notification_type}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()
        ], $tableOptions);

    }

    /**
     * @inheritdoc
     */
    public function down()
    {

        $this->dropTable('{{%notification_type}}');
    }
}



