<?php

use yii\db\Migration;

/**
 * Handles the creation of table `news`.
 */
class m171109_105706_create_news_table extends Migration
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

        $this->createTable('{{%news}}', [
            'id' => $this->primaryKey(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'title' => $this->string()->notNull(),
            'alias' => $this->string()->notNull(),
            'notice' => $this->text()->notNull(),
            'body' => $this->text(),
            'author_id' => $this->integer()->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(0),
        ], $tableOptions);

        $this->addForeignKey(
            'fk_news_users',
            '{{%news}}',
            'author_id',
                '{{%user}}',
            'id',
            'CASCADE'
        );

        $this->createIndex('idx-news-title', '{{%news}}', 'title');
        $this->createIndex('idx-news-alias', '{{%news}}', 'alias');
        $this->createIndex('idx-news-status', '{{%news}}', 'status');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropForeignKey(
            'fk_news_users',
            '{{%news}}'
        );
        $this->dropTable('{{%news}}');
    }
}
