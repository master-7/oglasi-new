<?php

use yii\db\Migration;

class m161229_101344_create_table_ogl_category_filter extends Migration
{
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
        $this->execute("
            CREATE TABLE IF NOT EXISTS `ogl_category_filter` (
              `id` INT NOT NULL AUTO_INCREMENT,
              `filter` JSON NOT NULL,
              `edate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              PRIMARY KEY (`id`))
            ENGINE = InnoDB DEFAULT CHARACTER SET utf8;
        ");
    }

    public function safeDown()
    {
        $this->execute("
            DROP TABLE IF EXISTS `ogl_category_filter`
        ");
    }
}