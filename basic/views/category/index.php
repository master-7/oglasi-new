<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\CategoryFilter;
use app\models\Category;
/* @var $category app\models\Category */
/* @var $filter app\models\Category */
global $result;
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
        ?>
        <h3><?=$val->name?></h3>

        <?php
        switch ($val->type) {
            case "checkbox":
                foreach ($val->values as $k => $v) {
                    echo Html::checkbox('year', false, ['label' => $k, 'options'=>['class'=>'form-group custom-class_wrapper1']]);
                }
                break;
            case "select":
                    echo Html::dropDownList('model', $list, $val->values);
                break;
            case "select-checkbox":
                foreach ($val->values as $k => $v) {
                    $result = Html::checkbox('year', false, ['label' => $k, 'options'=>['class'=>'form-group']]);
                    var_dump($result);
                } ?>
                <div class="form" style="">
                <?= Html::dropDownList('transmission', $chlist, $val->values); ?>
                    <h3>цена</h3>
                    <?= Html::input('text', 'username', $user->name, ['class' => $username]) ?>
                    <?= Html::input('text', 'username', $user->name, ['class' => $username]) ?>
                </div>
                <?php
                break;
            default:
                ?>
                    <input type="<?=$val->type?>">
                <?php
                break;
        }
    }
}
?>

