<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Advert */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Addverts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="addvert-view">

    <h1><?= Html::encode($this->title) ?></h1>

<!--    --><?php //echo var_dump($adverts); ?>

<!--    --><?php //echo debug($adverts); ?>

    <?php foreach ($adverts as $advert): ?>

<!--        <div style="font-size: 28px">-->
<!--            <a href="/advert/view2/--><?//= $advert->filter ?><!--">--><?//= $advert->title ?><!--</a>-->
<!--        </div>-->

        <?= $advert->title ?><br />
        <?= $advert->filter ?><br />

    <?php endforeach; ?>



</div>