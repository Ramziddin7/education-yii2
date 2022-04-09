<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\tabs\TabsX;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model backend\models\Teachers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teachers-form">

    <?php $form = ActiveForm::begin(); ?>

    <? $uzb = 
         $form->field($model, 'name_uz')->textInput(['maxlength' => true]).
         $form->field($model, 'field_uz')->textInput(['maxlength' => true]);
         
     ?>
     <? $rus = 
        $form->field($model, 'name_ru')->textInput(['maxlength' => true]).
        $form->field($model, 'field_ru')->textInput(['maxlength' => true]);
         
     ?>
     <? $eng = 
        $form->field($model, 'name_en')->textInput(['maxlength' => true]).
        $form->field($model, 'field_en')->textInput(['maxlength' => true]);
     
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
           'position'=>TabsX::POS_ABOVE,
           'encodeLabels'=>false
       ]);
       ?>

       <? echo $form->field($model, 'image')->widget(FileInput::classname(), [
            'options' => ['accept' => 'image/*'],
        ]);?>

    <?= $form->field($model, 'telegram')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'facebook')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'instagram')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->dropDownList(['1'=>'Asosiy (Basic)','2' => 'Asosiy Emas (not Basic),'],['prompt'=>'O`qituvchi Katigoryasini tanlang !(choose cotigory of teacher )']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
