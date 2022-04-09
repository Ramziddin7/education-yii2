<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\tabs\TabsX;
use kartik\file\FileInput;
/* @var $this yii\web\View */
/* @var $model backend\models\AddVideo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="add-video-form">

    <?php $form = ActiveForm::begin(); ?>
     <? $uzb = 
         $form->field($model, 'title_uz')->textInput(['maxlength' => true]).
         $form->field($model, 'content_uz')->textInput(['maxlength' => true]);
     ?>
     <? $rus = 
         $form->field($model, 'title_ru')->textInput(['maxlength' => true]).
         $form->field($model, 'content_ru')->textInput(['maxlength' => true]);
     
     ?>
     <? $eng = 
          $form->field($model, 'title_en')->textInput(['maxlength' => true]).
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
           'position'=>TabsX::POS_ABOVE,
           'encodeLabels'=>false
       ]);
     ?>
    <?= $form->field($model, 'Url_from_youtobe')->textInput(['maxlength' => true]) ?>

    <? echo $form->field($model, 'facelogo_image')->widget(FileInput::classname(), [
            'options' => ['accept' => 'image/*'],
        ]);?>

    <?= $form->field($model, 'type_menu')->dropDownList(['1' => 'Bosh sahifa(about school)','2'=>'Kurs bo`limiga(about course)','3'=>'O`qituvchilar(About teachers)','4'=>'  Tadbirlar(Event)','5'=>'Biz haqimizda (about us)'],['prompt'=>'Qaysi Sahifaga (Which page)']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
