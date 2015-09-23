<?php

use yii\db\Schema;
use yii\db\Migration;

class m150918_205216_create_purchases_table extends Migration
{
    public function up()
    {
        $this->createTable('tbl_purcheses',[
           'id' => Schema::TYPE_PK,
            'title_ua'       => Schema::TYPE_STRING.' NOT NULL',
            'title_ru'       => Schema::TYPE_STRING.' NOT NULL',
            'title_en'       => Schema::TYPE_STRING.' NOT NULL',
            'description_ua' => Schema::TYPE_TEXT,
            'description_ru' => Schema::TYPE_TEXT,
            'description_en' => Schema::TYPE_TEXT,
            'image'          => Schema::TYPE_STRING.' NOT NULL'
        ]);
    }

    public function down()
    {
        $this->dropTable('tbl_purcheses');
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
