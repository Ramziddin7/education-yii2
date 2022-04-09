<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\EventsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Events';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="events-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Events', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'title_uz',
            // 'title_ru',
            // 'title_en',
            'moreinformation_uz',
            //'moreinformation_ru',
            //'moreinformation_en',
            'date',
            //'where_uz',
            //'where_ru',
            //'where_en',
            //'video',
            //'facelogo_video',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
