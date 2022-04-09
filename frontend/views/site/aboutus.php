
<?
           $lang = Yii::$app->language;
           use backend\models\Allertlinks;
           use yii\helpers\Url;
?>
   <?
    $links = Allertlinks::find()->all();
    foreach($links as $links){
        if($lang == 'uz'){

            $location = $links->location_uz;

            }elseif($lang == 'ru'){

            $location = $links->location_ru;

            }elseif($lang == 'en'){

            $location = $links->location_en;                  
        }
    }?>
        <section class="probootstrap-section probootstrap-section-colored">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-left section-heading probootstrap-animate">
                        <h1><?=Yii::t('app','O`quv markazimiz haqida !');?></h1>
                    </div>
                </div>
            </div>
        </section>



        <section class="probootstrap-section">
            <div class="container">
                <div class="row">
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
                    <div class="col-md-12">
                        <div class="probootstrap-flex-block">
                            <div class="probootstrap-text probootstrap-animate">
                                <div class="text-uppercase probootstrap-uppercase"><?=Yii::t('app','Tarixi !' );?></div>
                                <h3><?=$title;?></h3>
                                <p><?=$content;?></p>
                                <p><a href="<?=$links->telegram;?>" class="btn btn-primary"><?=Yii::t('app','Batafsil..' );?></a></p>
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

                <div class="col-md-6">
                    <p>
                    <div style="width: 100%"><iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=300&amp;hl=en&amp;q=Smarkand%20uzbekistan%20lion%20Media%20Production+(lion%20Media%20Production)&amp;t=k&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="<?=$links->telegram;?>">Minded Education School !</a></div></p>
                </div>
                <div class="col-md-6 col-md-push-1">
                    <h4  style="font-weight:bold;"><?=Yii::t('app','Biz bilan bog`laning !');?></h4>
                    <span style="font-weight:bold;"><?=Yii::t('app','Ish vaqti');?></span> <br> <span>08 : 00 -- 20 :00</span><br>
                    <h4><?=Yii::t('app','Manzil');?></h4>
                    <p><?=$location;?></p>
                    </div>
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
