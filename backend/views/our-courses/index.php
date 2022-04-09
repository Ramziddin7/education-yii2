<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\OurCoursesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Our Courses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="our-courses-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Our Courses', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            //  'date',
            'name_uz',
            // 'name_ru',
            // 'name_en',
            'content_uz',
            //'content_ru',
            //'content_en',
            //'image',
            //'type',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
