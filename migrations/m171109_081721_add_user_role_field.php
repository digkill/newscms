<?php

use yii\db\Migration;

/**
 * Class m171109_081721_add_user_role_field
 */
class m171109_081721_add_user_role_field extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->addColumn('{{%user}}', 'role', $this->string(64));
        $this->update('{{%user}}', ['role' => 'user']);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropColumn('{{%user}}', 'role');
    }

}
