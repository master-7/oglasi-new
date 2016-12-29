<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Addvert */

$this->title = 'Update Addvert: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Addverts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="addvert-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
