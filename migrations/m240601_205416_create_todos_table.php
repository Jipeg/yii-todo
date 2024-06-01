<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%todos}}`.
 */
class m240601_205416_create_todos_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%todos}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(11),
            'task' => $this->string(128)->notNull(),
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%todos}}');
    }
}
