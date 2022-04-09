<?
  use yii\widgets\LinkPager;
  use yii\helpers\Url;
?>
<?
           $lang = Yii::$app->language;
?>
<?
                
                use backend\models\Allertlinks;
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
    
        <section class="probootstrap-section probootstrap-section-colored">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-left section-heading probootstrap-animate">
                        <h1><?=Yii::t('app','Bizning O`qituvchilar');?></h1>
                    </div>
                </div>
            </div>
        </section>
        <?
          foreach($newvideo as $keys){   
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
                            <div class="probootstrap-image probootstrap-animate" style="background-image: url(<?=$keys->facelogo_image;?>);">
                                <a href="<?=$keys->Url_from_youtobe;?>" class="btn-video popup-vimeo"><i class="icon-play3"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <section class="probootstrap-section">
            <div class="container">

                <h3 class="text-center text-primary"><?=Yii::t('app','Bizning barcha o`qituvchilar !');?></h3>
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
                    <?
                            echo LinkPager::widget([
                                'pagination' => $pagination,
                                'maxButtonCount' => 3,
                            
                            ])   
                    ?>
                   
                </div>
            </div>
        </section>
        
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