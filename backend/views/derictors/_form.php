<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use kartik\tabs\TabsX;
/* @var $this yii\web\View */
/* @var $model backend\models\Derictors */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="derictors-form">

    <?php $form = ActiveForm::begin(); ?>

    <? $uzb = 
         $form->field($model, 'name_uz')->textInput(['maxlength' => true]).
         $form->field($model, 'about_uz')->textInput(['maxlength' => true]);
     ?>
     <? $rus = 
         $form->field($model, 'name_ru')->textInput(['maxlength' => true]).
         $form->field($model, 'about_ru')->textInput(['maxlength' => true]);
     
     ?>
     <? $eng = 
         $form->field($model, 'name_en')->textInput(['maxlength' => true]).
         $form->field($model, 'about_en')->textInput(['maxlength' => true]);
     
     ?>
     <?
       $items = [
           [
               'label'=>'Uzb',
               'content'=>$uzb,
               'active'=> true
           ],
           [
            'label'=>'Rus',
            'content'=>$rus,
           ],
           [
            'label'=>'Eng',
            'content'=>$eng,
           ],
     ];
     ?>
     <?
       echo TabsX::widget([
           'items'=>$items,
           'position'=>TabsX::POS_LEFT,
           'encodeLabels'=>false
       ]);
     ?>

    <? echo $form->field($model, 'image')->widget(FileInput::classname(), [
            'options' => ['accept' => 'image/*'],
        ]);?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
