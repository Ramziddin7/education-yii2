<?php
use backend\models\OurCourses;
use yii\helpers\Url;

   $lang = Yii::$app->language;//three language web site
  $this->title = 'Registration';
  
 ?>
 <style>
 .my{
   margin-bottom:15px;
 }
 .div{
   border:1px solid #f4f4ff;
 }
 label{
   font-weight:bold;
   font-size:18px;
 }
 .btn-danger:visited{
   display:disable;
 }
 label i{
   font-weight:bold;
   font-size:25px;
 }
 
 </style>
<h1 class="text-center"><?=Yii::t('app','Registratsiya')?></h1>



<div class="container" id="app">
  <div class="col">
  <p class="text-center text-primary">
   <?=Yii::t('app','Agarda bizda o`qishni niyat qilgan bo`lsangiz ,Minnaddormiz');?>
   <?php if (Yii::$app->session->hasFlash('success')): ?>
    <div class="alert alert-success alert-dismissable">
         <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
         <h4 class="text-center"><i class="icon fa fa-check"></i> <?=Yii::t('app','Saqlandi!');?></h4>
         <h5 class="text-center"><?=Yii::t('app','MINDED O`QUV MARKAZI');?></h5>
    <h6 class="text-center"><?=Yii::t('app','Bog`langaniz uchun Raxmat');?></h6>
    <p class="text-center text-danger"><?=Yii::t('app','Tez orada  siz bilan bog`lanishadi  !');?></p>
    </div>
<?php endif; ?>

<?php if (Yii::$app->session->hasFlash('error')): ?>
    <div class="alert alert-danger alert-dismissable">
         <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
         <h4 class="text-center"><i class="icon fa fa-check"></i> <?=Yii::t('app','Xatolik!');?></h4>
         <h5 class="text-center"><?=Yii::t('app','Ma`lumot noto`g`ri keritilgan , qaytadan harakat qilib kuring !');?></h5>
    </div>
<?php endif; ?>
</p>
  </div>
   <div class="row">
  <form action="<?=Url::to(['site/view']);?>" method="GET">
    <div class="col-lg-6 my ">
      <label class="mr-2" for="title"><i class="icon-user"></i>  <?=Yii::t('app','Ismingiz');?></label>
      <span class="font-weight-bold initialism bg-success my-2">{{ name.toUpperCase()}}</span>
        <input v-model="name" class=" form-control" name="name" type="text"required>
      </div>
      <div class="col-lg-3 my">
        <label for="title"> <i class="icon-users">  </i><?=Yii::t('app','Yoshingiz');?></label><span class="font-weight-bold initialism">{{ age.toUpperCase()}}</span>
        <input v-model="age" class="form-control" name="age"  min="12" max="60" type="number" required>
      </div>
      <div class="col-lg-3 my">
        <label for="title"><i class="icon-phone"></i>  <?=Yii::t('app','Telifon');?></label><span class="font-weight-bold initialism">{{ '+'+phone.toUpperCase()}}</span>
        <input v-model="phone" class="form-control" name="phone" placeholder="" type="number" required>
      </div>
      <div class="col-lg-6 my">
        <label for="title"><i class="icon-book"></i>  <?=Yii::t('app','O`quv mashg`ulotlar uchun fan tanlang !');?></label><span class="font-weight-bold initialism">{{ subject.toUpperCase()}}</span>
        <select v-model="subject" required class='form-control' name="subject" id="">
          <option selected></option>
          <?
            $ourcourse = Ourcourses::find()->all();

         foreach($ourcourse as $course){
           if($lang == 'uz'){
             $name = $course->name_uz;
           }elseif($lang == 'ru'){
             $name = $course->name_ru;
           }elseif($lang == 'en'){
             $name = $course->name_en;
           }
         ?>
         <option value="<?=$name;?>"><?=$name;?></option>
         <?
         }
         ?>
       </select>
    </div>

    <div class="col-lg-6 my">
      <label for="title"><i class="icon-calendar"></i>  <?=Yii::t('app','Qachon boshlamoqchisiz ');?></label><span class="font-weight-bold initialism">{{ date.toUpperCase()}}</span>
       <input v-model="date" class="form-control" name="begining_date" type="date" required>
    </div>

    <div class="col-lg-12 my">
      <label for="title" ><i class="icon-calendar"></i>  <?=Yii::t('app','Qancha vaqtga');?> </label>{{duration}}
       <select v-model="duration" required class='form-control' name="duration" id="">
         <option selected></option>
         <option value="3 month"><?=Yii::t('app','3 oy');?></option>
         <option value="6 month"><?=Yii::t('app','6 oy');?></option>
         <option value="9 month"><?=Yii::t('app','9 oy');?></option>
         <option value="more than 9"> <?=Yii::t('app','Ko`proq');?></option>
       </select>
    </div>
   
    <div class="col-lg-12 my">
      <label for="title"><i class="icon-location"></i>  <?=Yii::t('app','Manzilingiz!');?></label><span class="font-weight-bold initialism">{{address | }}</span>
      <textarea v-model="address" style=" resize: none;" class="form-control " name="address" required rows="2"></textarea>
    </div>

  <div style="margin-bottom:13px;padding-left:15px;" class="form-group ">
        <div class="form-check">
          <div class="col">
             <input  class="form-check-input " type="checkbox" value="" id="invalidCheck" required> 
          </div>
            <label class="form-check-label" for="invalidCheck">
            <?=Yii::t('app','Barchasini to`g`ri kiritganingizga aminmisiz ?');?> 
            </label>
        </div>
  </div>

    <div class="col-lg-12 my">
        <button type="submit" class="btn btn-danger"><?=Yii::t('app','Yuborish');?></button>
   </div>

    </form>
  </div>
</div>

  