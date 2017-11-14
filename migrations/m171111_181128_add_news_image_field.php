<?php

use yii\db\Migration;

/**
 * Class m171111_181128_add_news_image_field
 */
class m171111_181128_add_news_image_field extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->addColumn('{{%news}}', 'image', $this->string(255));
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropColumn('{{%news}}', 'image');
    }

}
