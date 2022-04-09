<?php

use Faker\Extension\Container;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TeachersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Teachers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teachers-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Teachers', ['create'], ['class' => 'btn btn-success']) ?>
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
            'field_uz',
            // 'field_ru',
            //'field_en',
            //'image',
            //'telegram',
            //'facebook',
            //'instagram',
            //'phone',
            //'type',
    

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
