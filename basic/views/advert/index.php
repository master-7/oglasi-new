<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AdvertSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Adverts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="advert-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Advert', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'cat_id',
            'filter',
            'title',
            'text:ntext',
            // 'price',
            // 'city_id',
            // 'map_coordinates',
            // 'type',
            // 'expdate',
            // 'active',
            // 'creator_id',
            // 'video_id',
            // 'cdate',
            // 'edate',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
