
       <?
       use yii\helpers\Url;
       use yii\widgets\LinkPager;

       ?>
       <?
                $lang = Yii::$app->language;//three language web site
       ?>
       <section class="probootstrap-section probootstrap-section-colored">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-left section-heading probootstrap-animate">
                        <h1><?=Yii::t('app','Bizning Kurslar!');?></h1>
                    </div>
                </div>
            </div>
        </section>
        

        <section class="probootstrap-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
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
                        <div class="probootstrap-flex-block">
                            <div class="probootstrap-text probootstrap-animate">
                                <div style="font-weight:bold;" class="text-uppercase probootstrap-uppercase"><?=$title;?></div>
                                <p><?=$content;?></p>
                                <p><a href="<?=Url::to(['site/contact']);?>" class="btn btn-primary"><?=yii::t('app','Registratsiya');?></a> <span class="enrolled-count">85-<?=yii::t('app','o`quvchilar');?> </span></p>
                           </div>
                            <div class="probootstrap-image probootstrap-animate" style="background-image: url(<?=$keys->facelogo_image;?>);background-position: center; background-repeat: no-repeat;">
                                <a href="<?=$keys->Url_from_youtobe;?>" class="btn-video popup-vimeo"><i class="icon-play3"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="probootstrap-section">
            <div class="container">
              <h1 class="text-center text-primary"><?=Yii::t('app','Barcha Kurslarimiz');?></h1>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                      <div class="row">
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
                            <?
                                echo LinkPager::widget([
                                    'pagination' => $pagination,
                                    'maxButtonCount' => 3,
                                  
                                ])   
                              ?>
                        </div>
                    </div>
                </div>
            </div>
      </section>



        <section class="probootstrap-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
                        <h2><?=Yii::t('app','Bizning Eng Malakali O`qituvchilar');?></h2>
                        <p class="lead">Sed a repudiandae impedit voluptate nam Deleniti dignissimos perspiciatis nostrum porro nesciunt</p>
                    </div>
                </div>
                <!-- END row -->

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
                                <img src="<?=$teachers->image;?>" alt="Teachers image" style="width: 100px; height:100px;object-fit: cover;">
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