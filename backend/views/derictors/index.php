<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DerictorsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Derictors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="derictors-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Derictors', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
             'name_uz',
            // 'name_ru',
            // 'name_en',
            'about_uz',
            //'about_ru',
            //'about_en',
            //'image',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
