<?php

use yii\db\Schema;
use yii\db\Migration;

class m150907_172937_create_about_table extends Migration
{
    public function up()
    {
        $this->createTable('tbl_about',
            [
                'id'       => Schema::TYPE_PK,
                'title'    => Schema::TYPE_STRING.' NOT NULL',
                'text_ua'  => Schema::TYPE_TEXT,
                'text_en'  => Schema::TYPE_TEXT,
                'text_ru'  => Schema::TYPE_TEXT,
                'image'    => Schema::TYPE_STRING.' NOT NULL',
            ]);
    }

    public function down()
    {
        $this->dropTable('tbl_about');

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
