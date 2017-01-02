<?php
use yii\helpers\Html;

/* @var $category app\models\Category */
/* @var $filter app\models\Category */

if (isset($category)) {
    foreach ($category as $key => $val) {
        ?>
        <div style="font-size: 28px">
            <a href="/category/index/<?= $val["name"] ?>"><?= $val["name"] ?></a>
        </div>
        <div style="font-size: 28px">
            <?= $val["title"] ?>
        </div>
        <?php
    }
} else {
    foreach ($filter as $key => $val) {
        switch ($val->type) {
            case "checkbox":
                foreach ($val->values as $k => $v) {
                    ?>
                        <label><?= $k ?>
                            <input type="<?= $val->type ?>" name="<?= $k ?>" value="<?= $v ?>">
                        </label>
                    <?php
                }
                break;
            case "select":
                break;
            default:
                ?>
                    <input type="<?=$val->type?>">
                <?php
                break;
        }
    }
}