<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\AddVideo */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Add Videos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="add-video-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
    <?= Html::a('Back', ['index'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'Url_from_youtobe:url',
            'facelogo_image',
            'title_uz',
            'title_ru',
            'title_en',
            'content_uz',
            'content_ru',
            'content_en',
            'type_menu',
        ],
    ]) ?>

</div>
