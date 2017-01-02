<?php

use yii\db\Migration;

/**
 * Handles the creation of table `advert`.
 */
class m170102_214805_create_advert_table extends Migration
{

    public function safeUp()
    {
        $this->execute("
        CREATE TABLE IF NOT EXISTS `ogl_advert` (
          `id` INT NOT NULL AUTO_INCREMENT,
          `cat_id` INT NOT NULL,
          `filter` JSON NOT NULL,
          `title` VARCHAR(255) NOT NULL,
          `text` TEXT NOT NULL,
          `price` INT(11) NOT NULL,
          `city_id` INT NOT NULL,
          `map_coordinates` JSON NOT NULL,
          `type` INT NOT NULL DEFAULT 1,
          `expdate` DATETIME NOT NULL,
          `active` TINYINT(1) NOT NULL DEFAULT 0,
          `creator_id` INT NOT NULL,
          `video_id` INT NULL,
          `cdate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
          `edate` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
          PRIMARY KEY (`id`))
        ENGINE = InnoDB DEFAULT CHARACTER SET utf8;
    ");
    }

    public function safeDown()
    {
        $this->execute("
        DROP TABLE IF EXISTS `ogl_advert` ;
    ");
    }
}
