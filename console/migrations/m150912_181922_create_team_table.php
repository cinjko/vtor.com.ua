<?php

use yii\db\Schema;
use yii\db\Migration;

class m150912_181922_create_team_table extends Migration
{
    public function up()
    {
        $this->createTable('tbl_team', [
            'id'        => Schema::TYPE_PK,
            'full_name' => Schema::TYPE_STRING.' NOT NULL',
            'position'  => Schema::TYPE_STRING.' NOT NULL',
            'image'     => Schema::TYPE_STRING.' NOT NULL',
        ]);
    }

    public function down()
    {
        $this->dropTable('tbl_team');
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
