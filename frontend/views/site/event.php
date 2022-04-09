<?
 use yii\widgets\LinkPager;
use backend\models\Allertlinks;
use yii\helpers\Url;
?>
<?
           $lang = Yii::$app->language;
?>
   <?
    $links = Allertlinks::find()->all();
    foreach($links as $links){
    }
    ?>
        <section class="probootstrap-section probootstrap-section-colored">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-left section-heading probootstrap-animate">
                        <h1><?=Yii::t('app','Markaz Tadbirlari');?></h1>
                    </div>
                </div>
            </div>
        </section>
      <?
        foreach($navvideo as $key){
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
        }
      ?>
     
        <section class="probootstrap-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="probootstrap-flex-block">
                            <div class="probootstrap-text probootstrap-animate">
                                <div class="text-uppercase probootstrap-uppercase"><?=Yii::t('app','Eng so`ngisi!');?></div>
                                <h3><?=$title;?></h3>
                                <p><?=$information;?><p>
                                    <span class="probootstrap-date"><i class="icon-calendar"></i><?=$key->date;?></span>
                                    <span class="probootstrap-location"><i class="icon-location2"></i><?=$where;?></span>
                                </p>
                                <p><a href="<?=$links->telegram;?>" class="btn btn-primary"><?=Yii::t('app','Batafsil..');?></a></p>
                            </div>
                            <div class="probootstrap-image probootstrap-animate" style="background-image: url(<?=$key->facelogo_video;?>);background-position: center; background-repeat: no-repeat;">
                                <a href="<?=$key->video;?>" class="btn-video popup-vimeo"><i class="icon-play3"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <section class="probootstrap-section">
            <div class="container">
            <h1  class="text-center text-primary"><?=Yii::t('app','Barcha tadbirlar');?></h1>
                <div class="row">
        <?
        foreach($newvideo as $key){
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