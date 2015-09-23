<?php

use yii\db\Schema;
use yii\db\Migration;

class m150920_124826_create_gallery_table extends Migration
{
    public function up()
    {
        $this->createTable('tbl_gallery', [
            'id' => Schema::TYPE_PK,
            'image' => Schema::TYPE_TEXT,
        ]);
    }

    public function down()
    {
        $this->dropTable('tbl_gallery');
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
