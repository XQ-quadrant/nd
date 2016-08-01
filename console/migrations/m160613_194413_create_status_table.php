<?php

use yii\db\Migration;
use yii\db\mysql\Schema;
/**
 * Handles the creation for table `status_table`.
 */
class m160613_194413_create_status_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
         $tableOptions = null;
        /*$this->createTable('status_table', [
            'id' => $this->primaryKey(),
        ]);*/
        $this->createTable('{{%status}}', [
              'id' => Schema::TYPE_PK,
              'message' => Schema::TYPE_TEXT.' NOT NULL DEFAULT ""',
              'permissions' => Schema::TYPE_SMALLINT . ' NOT NULL DEFAULT 0',
              'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
              'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
          ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('status_table');
    }
}
