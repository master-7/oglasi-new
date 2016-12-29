<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CategoryFilter */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-filter-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'filter')->textarea() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
