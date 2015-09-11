<?php

use yii\db\Schema;
use yii\db\Migration;

class m150911_204444_create_comments_table extends Migration
{
    public function up()
    {
        $this->createTable('tbl_comments', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING.' NOT NULL',
            'comments' => Schema::TYPE_TEXT
        ]);
    }

    public function down()
    {
        $this->dropTable('tbl_comments');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
