<?php

use yii\db\Schema;
use yii\db\Migration;

class m150911_165343_create_benefits_table extends Migration
{
    public function up()
    {
        $this->createTable('tbl_benefits', [
            'id'           => Schema::TYPE_PK,
            'title'        => Schema::TYPE_STRING.' NOT NULL',
            'title_number' => Schema::TYPE_INTEGER,
            'text'         => Schema::TYPE_TEXT,
        ]);
    }

    public function down()
    {
        $this->dropTable('tbl_benefits');
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
