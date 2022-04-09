<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\EventsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="events-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title_uz') ?>

    <?= $form->field($model, 'title_ru') ?>

    <?= $form->field($model, 'title_en') ?>

    <?= $form->field($model, 'moreinformation_uz') ?>

    <?php // echo $form->field($model, 'moreinformation_ru') ?>

    <?php // echo $form->field($model, 'moreinformation_en') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'where_uz') ?>

    <?php // echo $form->field($model, 'where_ru') ?>

    <?php // echo $form->field($model, 'where_en') ?>

    <?php // echo $form->field($model, 'video') ?>

    <?php // echo $form->field($model, 'facelogo_video') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
