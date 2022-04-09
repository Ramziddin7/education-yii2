<?php

use yii\helpers\Html;
use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Allertlinks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="allertlinks-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Allertlinks', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'location_uz',
            // 'location_ru',
            // 'location_en',
            'telegram',
            'phone',
            //'email:email',
            //'facebook',
            //'instagram',
            //'youtobe',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
