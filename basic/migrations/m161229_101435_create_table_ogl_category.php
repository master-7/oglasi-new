<?php

use yii\db\Migration;

class m161229_101435_create_table_ogl_category extends Migration
{
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
        $this->execute("
            CREATE TABLE IF NOT EXISTS `ogl_category` (
              `id` INT NOT NULL AUTO_INCREMENT,
              `filter_id` INT NOT NULL,
              `name` VARCHAR(45) NOT NULL,
              `active` TINYINT(1) NOT NULL DEFAULT 1,
              `title` VARCHAR(255) NOT NULL,
              `description` TEXT NOT NULL,
              `cdate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              PRIMARY KEY (`id`),
              UNIQUE INDEX `name_UNIQUE` (`name` ASC),
              UNIQUE INDEX `title_UNIQUE` (`title` ASC),
              INDEX `fk_ogl_category_filter_idx` (`filter_id` ASC),
              CONSTRAINT `fk_ogl_category_filter`
                FOREIGN KEY (`filter_id`)
                REFERENCES `ogl_category_filter` (`id`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION)
            ENGINE = InnoDB DEFAULT CHARACTER SET utf8;
        ");
    }

    public function safeDown()
    {
        $this->execute("
            DROP TABLE IF EXISTS `ogl_category`
        ");
    }
}
