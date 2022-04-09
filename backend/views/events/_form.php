<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use kartik\tabs\TabsX;
use dosamigos\datepicker\DatePicker;
/* @var $this yii\web\View */
/* @var $model backend\models\Events */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="events-form">

    <?php $form = ActiveForm::begin(); ?>

    <? $uzb = 
         $form->field($model, 'title_uz')->textInput(['maxlength' => true]).
         $form->field($model, 'moreinformation_uz')->textInput(['maxlength' => true]).
         $form->field($model, 'where_uz')->textInput(['maxlength' => true]);
         
     ?>
     <? $rus = 
         $form->field($model, 'title_ru')->textInput(['maxlength' => true]).
         $form->field($model, 'moreinformation_ru')->textInput(['maxlength' => true]).
         $form->field($model, 'where_ru')->textInput(['maxlength' => true]);
         
     
     ?>
     <? $eng = 
         $form->field($model, 'title_en')->textInput(['maxlength' => true]).
         $form->field($model, 'moreinformation_en')->textInput(['maxlength' => true]).
         $form->field($model, 'where_en')->textInput(['maxlength' => true])
     
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
       
        <?= $form->field($model, 'date')->widget(
            DatePicker::className(), [
                // inline too, not bad
                'inline' => false, 
                // modify template for custom rendering
               // 'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
                'clientOptions' => [
                    'autoclose' => true,
                    'format' => 'dd-mm-yyyy'
                ]
        ]);?>


    <?= $form->field($model, 'video')->textInput(['maxlength' => true]) ?>

    <? echo $form->field($model, 'facelogo_video')->widget(FileInput::classname(), [
            'options' => ['accept' => 'image/*'],
        ]);?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
