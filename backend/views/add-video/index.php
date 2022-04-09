<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AddVideoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Add Videos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="add-video-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Add Video', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            // 'Url_from_youtobe:url',
            // 'facelogo_image',
            'title_uz',
            // 'title_ru',
            //'title_en',
            'content_uz',
            //'content_ru',
            //'content_en',
            //'type_menu',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
