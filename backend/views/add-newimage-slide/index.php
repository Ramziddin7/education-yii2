<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Add Newimage Slides';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="add-newimage-slide-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Add Newimage Slide', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            [
                'label'=>'image',
                'content'=>function($model){
                    /**@var\common\models\newImageSlide $model */
                    return Html::img($model->getImageUrl(),['style'=>'width:100px']);
                }
            
            ],
            'content_uz',
            // 'content_ru',
            // 'content_en',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
