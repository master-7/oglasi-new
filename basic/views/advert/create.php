<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Addvert */

$this->title = 'Create Addvert';
$this->params['breadcrumbs'][] = ['label' => 'Addverts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="addvert-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
