<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\CategoryFilterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Category Filters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-filter-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Category Filter', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'filter',
            'edate',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
