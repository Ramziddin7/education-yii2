<?
         use yii\helpers\Url;
         use backend\models\OurCourses;
  
       $this->title = 'Results';
     
?>
<?
             $lang = Yii::$app->language;//three language web site
         
            if(!empty($ourcourses)){?>
             
           <section class="probootstrap-section">
             <div class="container">
              <h3 style="font-weight:bold;border-bottom:1px solid black; padding-bottom:10px;" class="text-center text-danger"><?=Yii::t('app','Barcha Natijalar!');?></h3>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                      <div class="row">
                        <?
                        foreach($ourcourses as $value){
                               if($lang == 'uz'){

                                $name = $value->name_uz;
                                $content = $value->content_uz;
                  
                              }elseif($lang == 'ru'){
                  
                               $name = $value->name_ru;
                               $content = $value->content_ru;
                  
                              }elseif($lang == 'en'){
                  
                              $name = $value->name_en;
                              $content = $value->content_en;
                  
                          }
                        ?>
                        <div class="probootstrap-service-2 probootstrap-animate">
                            <div class="image ">
                                <div class="image-bg col-12 col-md-12">
                                    <img style="width:400px;height:300px; object-fit:cover;" src="<?=$value->image;?>" alt="course image">
                                </div>
                            </div>
                            <div class="text">
                                <span  style="font-weight:bold;" class="probootstrap-meta"><i class="icon-calendar2"></i> <b></b><?=$value->date;?> <b></b><?=Yii::t('app','Joylandi:');?></span>
                                <h3 class="text-primary"><?=$name;?></h3>
                                <p><?=$content;?></p>
                                <p><a href="<?=Url::to(['site/contact']);?>" class="btn btn-primary"><?=Yii::t('app','Registratsiya');?></a> <span class="enrolled-count"><?=$value->enrolled;?> <?=Yii::t('app','O`quvchi ruyxatdan o`tdi');?></span></p>
                            </div>
                        </div>
                           <?
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
      </section>
     <?}elseif(!empty($teachers)){?>
      <section class="probootstrap-section">
            <div class="container">

                <h3 style="font-weight:bold;border-bottom:1px solid black; padding-bottom:10px;" class="text-center text-danger"><?=Yii::t('app','Barcha Natijalar!');?></h3>
                <div class="row">
                <?
                foreach ($teachers as $teachers) {
                    if($lang == 'uz'){
                        $name  =  $teachers->name_uz;
                        $field  =  $teachers->field_uz;
                        
                      }elseif($lang == 'ru'){
          
                        $name  =  $teachers->name_ru;
                        $field  =  $teachers->field_ru;
          
                      }elseif($lang == 'en'){
          
                        $name  =  $teachers->name_en;
                        $field  =  $teachers->field_en;
          
                  }
                ?>
                    <div class="col-md-3 col-sm-6">
                        <div class="probootstrap-teacher text-center probootstrap-animate">
                            <figure class="media">
                                <img style="width: 100px;height:100px;object-fit: cover;" src="<?=$teachers->image;?>" alt="teacher img" class="img-responsive">
                            </figure>
                            <div class="text">
                                <h3><?=$name;?></h3>
                                <p><?=$field;?></p>
                                <ul class="probootstrap-footer-social">
                                    <li class="twitter"><a href="https://t.me/<?=$teachers->telegram;?>"><i class="icon-telegram"></i></a></li>
                                    <li class="facebook"><a href="https://facebook.com/<?=$teachers->facebook;?>"><i class="icon-facebook2"></i></a></li>
                                    <li class="instagram"><a href="https://instagram.com/<?=$teachers->instagram;?>"><i class="icon-instagram2"></i></a></li>
                                    <li class="google-plus"><a href="tel:<?=$teachers->phone;?>"><i class="icon-phone2"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?
                } 
                   ?>
                </div>
            </div>
        </section>
         
       <?
       }elseif(!empty($events)){?>


<section class="probootstrap-section">
            <div class="container">
            <h3 style="font-weight:bold;border-bottom:1px solid black; padding-bottom:10px;" class="text-center text-danger"><?=Yii::t('app','Barcha Natijalar!');?></h3>
               <div class="row">
        <?
        foreach($events as $key){
            if($lang == 'uz'){

                $title = $key->title_uz;
                $where = $key->where_uz;
                $information =  $key->moreinformation_uz;
              }elseif($lang == 'ru'){
  
               $title = $key->title_ru;
               $where = $key->where_ru;
               $information = $key->moreinformation_ru;
  
              }elseif($lang == 'en'){
  
              $title = $key->title_en;
              $where = $key->where_en;
              $information = $key->moreinformation_en;
  
          }
        ?>
                    <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
                        <a href="<?=$key->video;?>" class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img style="width:500px;height:300px;object-fit:cover;" src="<?=$key->facelogo_video;?>" alt="events" class="img-responsive"></figure>
                            <div  class="probootstrap-text">
                                <h3 style="font-weight:bold;" class="text-success"><?=$title;?></h3>
                                <span class="probootstrap-date"><i class="icon-calendar"></i><?=$key->date;?></span>
                                <span class="probootstrap-location"><i class="icon-location2"></i><?=$where;?></span>
                            </div>
                        </a>
                    </div>
                    
        <?
        }
        ?>
   
                </div>
            </div>
        </section>

       <?
       }elseif(empty($events) || empty($teachers) || empty($ourcourses)){
        ?>
       
       <h4 style="text-shadow: 0 1px #808d93, -1px 0 #cdd2d5, -1px 2px #808d93, -2px 1px #cdd2d5, -2px 3px #808d93, -3px 2px #cdd2d5, -3px 4px #808d93, -4px 3px #cdd2d5, -4px 5px #808d93, -5px 4px #cdd2d5, -5px 6px #808d93, -6px 5px #cdd2d5, -6px 7px #808d93, -7px 6px #cdd2d5, -7px 8px #808d93, -8px 7px #cdd2d5, 2px 40px 17px rgba(206,89,55,0);" class="text-center text-dark"><?=Yii::t('app','Natija topilmadi,qaytadan o`rinib ko`ring!');?> </h4>

       <?
       }
       ?>
      
      <section class="probootstrap-cta">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 ">
                        <h2 class="probootstrap-animate " data-animate-effect="fadeInRight "><?=Yii::t('app','Hoziroq ruyxatdan o`ting !');?></h2>
                        <a href="<?=Url::to(['site/contact']);?>" role="button " class="btn btn-primary btn-lg btn-ghost probootstrap-animate " data-animate-effect="fadeInLeft "><?=Yii::t('app','Registratsiya')?></a>
                    </div>
                </div>
            </div>
        </section>







