<?php

use yii\db\Schema;
use yii\db\Migration;

class m150921_202610_create_feedback_table extends Migration
{
    public function up()
    {
        $this->createTable('tbl_feedback', [
            'id'        => Schema::TYPE_PK,
            'name'      => Schema::TYPE_STRING.' NOT NULL',
            'email'     => Schema::TYPE_STRING.' NOT NULL',
            'phone'     => Schema::TYPE_INTEGER,
            'data_time' => Schema::TYPE_DATE,
        ]);
    }

    public function down()
    {
        $this->dropTable('tbl_feedback');
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
