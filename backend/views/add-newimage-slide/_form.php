<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model backend\models\AddNewimageSlide */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="add-newimage-slide-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <? echo $form->field($model, 'image')->widget(FileInput::classname(), [
            'options' => ['accept' => 'image/*'],
        ]);?>
  
    <?= $form->field($model, 'content_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content_en')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
