<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\CategoryFilter;
use app\models\Category;
use yii\widgets;
use yii\widgets\MaskedInput;
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
                echo Html::tag('div', Html::encode($val->name), ['class' => 'base']);
                foreach ($val->values as $k => $v) {
                    echo Html::checkbox('year', false, ['label' => $k, 'options'=>['class'=>'form-group custom-class_wrapper1']]);
                }
                break;
            case "select":
                echo Html::tag('div', Html::encode($val->name), ['class' => 'base']);
                    echo Html::dropDownList('model', $list, $val->values);
                break;
            case "select-checkbox-1":
                echo Html::tag('div', Html::encode($val->name), ['class' => 'base extremum-click']);
                echo Html::beginTag('div', ['class' => 'base2 extremum-slide']);
                foreach ($val->values1 as $k => $v) {
                        echo '<div class="col-md-6">'. Html::checkbox('kuzov', false, ['label' => $v, 'class'=>'base3']).'</div>';
                }
                foreach ($val->values2 as $k => $v) {
                    echo '<div class="col-md-6">'. Html::checkbox('kuzov', false, ['label' => $v, 'class'=>'base3']).'</div>';
                }
                echo Html::endTag('div');
                break;
            case "select-checkbox-2":
                echo Html::tag('div', Html::encode($val->name), ['class' => 'base extremum-click2']);
                echo Html::beginTag('div', ['class' => 'base3 extremum-slide2']);
                foreach ($val->values as $k => $v) {
                    echo Html::checkbox('transmission', false, ['label' => $v, 'class'=>'base3']);
                }
                echo Html::endTag('div');
                break;

            default:
                ?>
<!--                    <input type="--><?//=$val->type?><!--">-->
                <?php
                break;
        }
    }
}

echo '<br /><div id="slider_price_new" class="">'. yii\jui\Slider::widget([

    'clientOptions' => [
        'min' => 1,
        'max' => 10,
    ],
]).'</div>';
?>

<br />
<div id='options'>
    <h3>Цена:</h3>
    <form method='post'>
        <label for='price'>
            От:
            <input type="text" name="price" id="price" maxlength="10">
        </label>
        <label for='price2'>
            До:
            <input type="text" name="price" id="price2" maxlength="10">
        </label>
    </form>
</div>

<div id="slider_price"></div>

<h3>цена</h3>
<input type="text" class="param-number-filed param-number-filed-from" placeholder="от">
    <span class="separator">—</span>
<input type="text" class="param-number-filed param-number-filed-from" placeholder="до">
<?//= MaskedInput::widget(['name' => 'price', 'mask' => '9999']) ?><!-- -->
<span class="currency">
<span class="form-fieldset__postfix font_arial-rub">₽</span>
</span>
<br /><br />
<?= Html::submitButton('Отправить', ['class' => 'submit']) ?>

<?= Html::resetButton('Сбросить', ['class' => 'reset']) ?>


