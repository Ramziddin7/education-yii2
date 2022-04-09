<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Allertlinks */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="allertlinks-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'location_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'location_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'location_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telegram')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'facebook')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'instagram')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'youtobe')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
