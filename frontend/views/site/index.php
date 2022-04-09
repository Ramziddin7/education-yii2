<?
use yii\helpers\Url;
use backend\models\AddNewimageSlide;
use backend\models\AddVideo;
use backend\models\OurCourses;
use backend\models\Teachers;
use backend\models\Derictors;
use backend\models\Events;
use backend\models\Allertlinks;
?>
<?
                $lang = Yii::$app->language;//three language web site
                
                $links = Allertlinks::find()->all();
                foreach($links as $links){
                    if($lang == 'uz'){

                        $location = $links->location_uz;
            
                      }elseif($lang == 'ru'){
          
                        $location = $links->location_ru;
          
                      }elseif($lang == 'en'){
          
                        $location = $links->location_en;                  
                  }
                }
               
?>

<!-- <div class="container">
  <div style="position:fixed;z-index:100;bottom:30px;right:10px; ">
    <a href="" class="btn btn-primary">MINDED</a>
  </div>  
</div> -->
  <section class="flexslider">
            <ul class="slides">
            <?
              $newimage = AddNewimageSlide::find()->limit(10)->all();
              foreach ($newimage as $key){
                if($lang == 'uz'){

                  $content = $key->content_uz;
      
                  }elseif($lang == 'ru'){
      
                   $content = $key->content_ru;
      
                  }elseif($lang == 'en'){
      
                  $content = $key->content_en;
      
              }
            ?>
                <li style="background-image: url('<?=$key->image;?>');background-repeat: no-repeat;background-size: cover;" class="overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="probootstrap-slider-text text-center">
                                    <h1 class="probootstrap-heading probootstrap-animate"><?=$content;?></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            <?
              }
            ?>
            </ul>
        </section>
       
        <section class="probootstrap-section probootstrap-section-colored">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-left section-heading probootstrap-animate">
                        <h2><?=Yii::t('app',' Minded O`quv Markazi');?></h2>
                    </div>
                </div>
            </div>
        </section>

            
        <?
          $newvideo = AddVideo::find()->where(['type_menu' => '1'])->limit(1)->all();
          foreach($newvideo as $keys){    
          }
          if($lang == 'uz'){

              $title = $keys->title_uz;
              $content = $keys->content_uz;

            }elseif($lang == 'ru'){

             $title = $keys->title_ru;
             $content = $keys->content_ru;

            }elseif($lang == 'en'){

            $title = $keys->title_en;
            $content = $keys->content_en;

        }


        ?>

        <section class="probootstrap-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="probootstrap-flex-block">
                            <div class="probootstrap-text probootstrap-animate">
                                <h3><?=$title;?></h3>
                                <p><?=$content;?></p>
                                <p><a href="<?=$links->telegram;?>" class="btn btn-primary"><?=Yii::t('app','Batafsil..');?></a></p>
                            </div>
                            <div class="probootstrap-image probootstrap-animate" style="background-image: url(<?=$keys->facelogo_image;?>);background-size: cover;background-repeat: no-repeat;">
                                <a href="<?=$keys->Url_from_youtobe;?>" class="btn-video popup-vimeo"><i class="icon-play3"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="probootstrap-section" id="probootstrap-counter">
            <div class="container">

                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
                        <div class="probootstrap-counter-wrap">
                            <div class="probootstrap-icon">
                                <i class="icon-users2"></i>
                            </div>
                            <div class="probootstrap-text">
                                <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="1523" data-speed="6000" data-refresh-interval="50">1</span>
                                </span>
                                <span class="probootstrap-counter-label"><?=Yii::t('app','Umumiy O`quvchilar');?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
                        <div class="probootstrap-counter-wrap">
                            <div class="probootstrap-icon">
                                <i class="icon-user-tie"></i>
                            </div>
                            <div class="probootstrap-text">
                                <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="22" data-speed="6000" data-refresh-interval="50">1</span>
                                </span>
                                <span class="probootstrap-counter-label"><?=Yii::t('app','Malakali O`qituvchilar');?></span>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix visible-sm-block visible-xs-block"></div>
                    <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
                        <div class="probootstrap-counter-wrap">
                            <div class="probootstrap-icon">
                                <i class="icon-library"></i>
                            </div>
                            <div class="probootstrap-text">
                                <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="78" data-speed="6000" data-refresh-interval="50">1</span>%
                                </span>
                                <span class="probootstrap-counter-label"><?=Yii::t('app','Oliy Ta`limga Kirgan');?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">

                        <div class="probootstrap-counter-wrap">
                            <div class="probootstrap-icon">
                                <i class="icon-smile2"></i>
                            </div>
                            <div class="probootstrap-text">
                                <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="95" data-speed="5000" data-refresh-interval="50">1</span>%
                                </span>
                                <span class="probootstrap-counter-label"><?=Yii::t('app','Ota-Onalar munasabati');?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="probootstrap-section probootstrap-section-colored probootstrap-bg probootstrap-custom-heading probootstrap-tab-section" style="background-image: url(/img/light.jpg);backgroun-repeat:no-repeat;background-size:cover; background-attachment:fixed;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center section-heading probootstrap-animate">
                        <h2 class="mb0"><?=Yii::t('app','Eng Yangilari !');?></h2>
                    </div>
                </div>
            </div>
            <div class="probootstrap-tab-style-1">
                <ul class="nav nav-tabs probootstrap-center probootstrap-tabs no-border">
                    <li class="active"><a data-toggle="tab" href="#featured-news"><?=Yii::t('app','Ochilayotgan Kurslar');?></a></li>
                    <li><a data-toggle="tab" href="#upcoming-events"><?=Yii::t('app','Tadbirlar');?></a></li>
                </ul>
            </div>
        </section>
      



  

     

    
      
     

<section class="probootstrap-section probootstrap-section">
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="tab-content">
                <?
                    $ourcourse = OurCourses::find()->orderBy(['id' => SORT_DESC])->limit(4)->all();
                ?>
                <div id="featured-news" class="tab-pane fade in active">
                    <div class="row">
                        <div class="col-xxs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="owl-carousel" id="owl1">
                            <?
                            foreach($ourcourse as $keys){
                                if($lang == 'uz'){

                                    $name = $keys->name_uz;
                                    $content = $keys->content_uz;
                    
                                }elseif($lang == 'ru'){
                    
                                $name = $keys->name_ru;
                                $content = $keys->content_ru;
                    
                                }elseif($lang == 'en'){
                    
                                $name = $keys->name_en;
                                $content = $keys->content_en;
                    
                            }
                                
                            ?>
                                <div class="item">
                                <a href="<?=$links->telegram;?>" class="probootstrap-featured-news-box">
                                    <figure class="probootstrap-media"><img  src="<?=$keys->image?>" style="height:200px;object-fit:cover;" alt="course image" class="img-responsive"></figure>
                                    <div class="probootstrap-text">
                                        <h3 class="text-danger"><?=$name;?></h3>
                                        <p style="max-width:280px;height:100px;"><?=$content;?></p>
                                        <span style="font-weight:bold;" class="probootstrap-date text-dark"><i class="icon-calendar"></i><?=$keys->date;?></span>
                                    </div>
                                </a>
                            </div>
                            <?
                            }
                            ?>
                        <!-- END item -->
                    </div>
                </div>
            </div>
            <!-- END row -->
            <div class="row">
                <div class="col-md-12 text-center">
                    <p><a href="<?=$links->telegram;?>" class="btn btn-primary"><?=Yii::t('app','Qo`shimcha Yangiliklar');?></a></p>
                </div>
            </div>
        </div>
<div id="upcoming-events" class="tab-pane fade">
    <div class="row">
        <div class="col-xxs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="owl-carousel" id="owl2">
                    <?
                        $events = Events::find()->orderBy(['id' => SORT_DESC])->limit(4)->all();
                    ?>
                    <?
                    foreach($events as $ev){
                        if($lang == 'uz'){

                            $title = $ev->title_uz;
                            $where = $ev->where_uz;
                            $information =  $ev->moreinformation_uz;
                            }elseif($lang == 'ru'){

                            $title = $ev->title_ru;
                            $where = $ev->where_ru;
                            $information = $ev->moreinformation_ru;

                            }elseif($lang == 'en'){

                            $title = $ev->title_en;
                            $where = $ev->where_en;
                            $information = $ev->moreinformation_en;

                            }
                            ?>
                                <div class="item">
                                <a href="<?=$ev->video;?>" class="probootstrap-featured-news-box">
                                    <figure class="probootstrap-media"><img  src="<?=$ev->facelogo_video;?>" style="height:200px;object-fit:cover;" alt="Events" class="img-responsive"></figure>
                                    <div class="probootstrap-text">
                                        <h3><?=$title;?></h3>
                                        <span class="probootstrap-date"><i class="icon-calendar"></i><?=$ev->date;?></span>
                                        <span class="probootstrap-location"><i class="icon-location2"></i><?=$where;?></span>
                                        <p style="max-width:280px;height:100px;"><?=$information;?></p>
                                    </div>
                                </a>
                            </div>
                                            
                                <?
                                }
                                ?>
                                          
                                            <!-- END item -->
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <p><a href="<?=$links->telegram;?>" class="btn btn-primary"><?=Yii::t('app','Batafsil..');?></a></p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="probootstrap-section probootstrap-bg-white probootstrap-border-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
                        <h2><?=Yii::t('app','Bizning mashxur kurslar !');?></h2>
                        <p class="lead"><?=Yii::t('app','Eng ko`p tanlangan va bizning hududimizda juda ham kam bo`lgan kurslarimiz !');?></p>
                    </div>
                </div>
                <!-- END row -->
                <div class="row">
                    
                    <div class="col-xs-12 col-md-12 col-lg-12">
                    <?
                      $ourcourse = OurCourses::find()->where(['type' => '1'])->orderBy(['id'=> SORT_DESC])->limit(4)->all();
                    ?>
                    <?
                     foreach($ourcourse as $value){
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
                            <div class="image">
                                <div class="image-bg">
                                    <img src="<?=$value->image;?>" style="width: 450px;height:243px;object-fit:cover;  background-repeat: no-repeat;background-size: cover;" class="img-fluid" lt="">
                                </div>
                            </div>
                            <div class="text ">
                                <span class="probootstrap-meta "><?=Yii::t('app','Joylandi:');?> <i class="icon-calendar2 "></i> <?=$value->date;?></span>
                                <h3><?=$name;?></h3>
                                <p><?=$content;?><p><a href="<?=Url::to(['site/contact']);?>" class="btn btn-primary "><?=Yii::t('app','Registratsiya');?></a> <span class="enrolled-count "><?=$value->enrolled;?>-<?=Yii::t('app','Hozirgi registratsiya !');?></span></p>
                            </div>
                        </div>
                    
                    <?
                     }
                    ?>

                   </div>
                </div>
            </div>
        </section>



        <section class="probootstrap-section ">
            <div class="container ">
                <div class="row ">
                    <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate ">
                        <h2><?=Yii::t('app','Bizning Eng Malakali O`qituvchilar');?></h2>
                        <p class="lead "><?=Yii::t('app','');?></p>
                    </div>
                </div>
                <!-- END row -->
                <?
                  $teachers = Teachers::find()->where(['type'=>'1'])->orderBy(['id' => SORT_DESC])->limit(4)->all();
                ?>

                <div class="row ">
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
                <div class="col-md-3 col-sm-6 ">
                         <div class="probootstrap-teacher text-center probootstrap-animate ">
                            <figure class="media ">
                                <img style="width: 100px; height:100px;object-fit: cover;" src="<?=$teachers->image;?>"
                                    alt="teacher image" class="img-responsive ">
                            </figure>
                            <div class="text ">
                                <h3><?=$name;?></h3>
                                <p><?=$field;?></p>
                                <ul class="probootstrap-footer-social ">
                                    <li class="twitter "><a href="<?=$teachers->telegram;?>"><i class="icon-telegram "></i></a></li>
                                    <li class="facebook "><a href="<?=$teachers->facebook;?>"><i class="icon-facebook2 "></i></a></li>
                                    <li class="instagram "><a href="<?=$teachers->instagram;?>"><i class="icon-instagram2 "></i></a></li>
                                    <li class="google-plus "><a href="tel:<?=$teachers->phone;?>"><i class="icon-phone2 "></i></a></li>
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
        <section class="probootstrap-section probootstrap-bg probootstrap-section-colored probootstrap-testimonial " style="background-image: url('/img/leader.jpg');backgroun-repeat:no-repeat;background-size:cover; background-attachment:fixed;">
            <div class="container ">
                <div class="row ">
                    <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate ">
                        <h2><?=Yii::t('app','Asoschilar !');?>  </h2>
                        <p class="lead "> <?=Yii::t('app','Har bir o`qiyotgan o`quvchisiga yaqindan yordam beroladigan, Raxbarlar');?></p>
                    </div>
                </div>


                <!-- END row -->


                <div class="row ">
                    <div class="col-md-12 probootstrap-animate ">
                        <div class="owl-carousel owl-carousel-testimony owl-carousel-fullwidth ">
                         <?
                           $der = Derictors::find()->limit(10)->all();
                         ?>
                        <?
                          foreach($der as $key){
                            if($lang == 'uz'){
                            
                              $about =  $key->about_uz;
                              $name  =  $key->name_uz;
                                
                              }elseif($lang == 'ru'){
                  
                                $about =  $key->about_ru;
                                $name  =  $key->name_ru;
                                
                              }elseif($lang == 'en'){
                  
                                $about =  $key->about_en;
                                $name  =  $key->name_en;
                                
                          }
                        ?>
                          <div class="item ">
                                <div class="probootstrap-testimony-wrap text-center ">
                                    <figure>
                                        <img src="<?=$key->image;?>" alt="derictor image">
                                    </figure>
                                    <blockquote class="quote ">&ldquo;<?=$about;?>&rdquo; <cite class="author "> &mdash; <span><?=$name;?></span> &mdash;</cite></blockquote>
                                </div>
                            </div>

                                <?
                                }
                                ?>
                        </div> 
                    </div>
                    
                </div>
                <!-- END row -->
            </div>
        </section>

        <section class="probootstrap-section ">
            <div class="container ">
                <div class="row ">
                    <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate ">
                        <h2><?=Yii::t('app','Nima uchun aynan MINDED O`QUV MARKAZI');?></h2>
                        <p style="color:black;font-weight:bold" class="lead "><?=Yii::t('app','');?>When you are <span class="text-danger">young </span> ,<span style="color:green">work </span> to <span class="text-danger" > learn </span> not to <span style="color :red"> earn </span> ! </p>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-6 ">
                        <div class="service left-icon probootstrap-animate ">
                            <div class="icon "><i class="icon-checkmark "></i></div>
                            <div class="text ">
                                <h3><?=Yii::t('app','Uslub');?></h3>
                                <p> <?=Yii::t('app','Chet el uslibidagi darslar');?> </p>
                            </div>
                        </div>
                        <div class="service left-icon probootstrap-animate ">
                            <div class="icon "><i class="icon-checkmark "></i></div>
                            <div class="text ">
                                <h3><?=Yii::t('app','O`qituvchi');?></h3>
                                <p><?=Yii::t('app','Tajribali o`qituvchilar jamoasi ');?></p>
                            </div>
                        </div>
                        <div class="service left-icon probootstrap-animate ">
                            <div class="icon "><i class="icon-checkmark "></i></div>
                            <div class="text ">
                                <h3><?=Yii::t('app','Sifat');?></h3>
                                <p><?=Yii::t('app','Sifatli va qisqa muddatli ta`lim');?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="service left-icon probootstrap-animate ">
                            <div class="icon "><i class="icon-checkmark "></i></div>
                            <div class="text ">
                                <h3><?=Yii::t('app','E`tibor');?></h3>
                                <p><?=Yii::t('app','Har bir o`quvchiga alohida  e`tibor qaratish');?></p>
                            </div>
                        </div>

                        <div class="service left-icon probootstrap-animate ">
                            <div class="icon "><i class="icon-checkmark "></i></div>
                            <div class="text ">
                                <h3><?=Yii::t('app','Qulaylik');?></h3>
                                <p><?=Yii::t('app','Bilim olish uchun zamonaviy jihozlar va qulay sharoitlar');?></p>
                            </div>
                        </div>

                        <div class="service left-icon probootstrap-animate ">
                            <div class="icon "><i class="icon-checkmark "></i></div>
                            <div class="text ">
                                <h3><?=Yii::t('app','Yondashuv');?></h3>
                                <p><?=Yii::t('app','Dasrga kreativ yondashuv');?></p>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- END row -->
            </div>
        </section>

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
        