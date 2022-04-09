<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\AddNewimageSlide */

$this->title = 'Update Add Newimage Slide: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Add Newimage Slides', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="add-newimage-slide-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
