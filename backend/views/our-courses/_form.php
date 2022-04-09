<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;    
use kartik\tabs\TabsX;   
use kartik\file\FileInput;                             
/* @var $this yii\web\View */
/* @var $model backend\models\OurCourses */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="our-courses-form">

    <?php $form = ActiveForm::begin(); ?>

    

<? $uzb = 
         $form->field($model, 'name_uz')->textInput(['maxlength' => true]).
         $form->field($model, 'content_uz')->textInput(['maxlength' => true]);
        
     ?>
     <? $rus = 
         $form->field($model, 'name_ru')->textInput(['maxlength' => true]).
         $form->field($model, 'content_ru')->textInput(['maxlength' => true]);
         
     
     ?>
     <? $eng = 
        $form->field($model, 'name_en')->textInput(['maxlength' => true]).
        $form->field($model, 'content_en')->textInput(['maxlength' => true]);
     
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


      <? echo $form->field($model, 'image')->widget(FileInput::classname(), [
            'options' => ['accept' => 'image/*'],
        ]);?>

    <?= $form->field($model, 'type')->dropDownList(['1' => 'Mashxurlaridan','2' => 'Odatiy'],['prompt' => 'Choose '])?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
