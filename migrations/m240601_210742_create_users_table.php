<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%users}}`.
 */
class m240601_210742_create_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%users}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string(64)->notNull(),
            'email' => $this->string(128)->notNull(),
            'password_hash' => $this->string(255)->notNull(),
            'auth_key' => $this->string(32)->notNull(),
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%users}}');
    }
}
