<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CategoryFilter */

$this->title = 'Create Category Filter';
$this->params['breadcrumbs'][] = ['label' => 'Category Filters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-filter-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
