<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\AddNewimageSlide */

$this->title = 'Create Add Newimage Slide';
$this->params['breadcrumbs'][] = ['label' => 'Add Newimage Slides', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="add-newimage-slide-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
