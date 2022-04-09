<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;
use cinghie\multilanguage\widgets\MultiLanguageWidget;
use backend\models\Allertlinks;

$lang = Yii::$app->language;//three language web site

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <style>
    i{
        font-size:20px;
    }
    </style>
</head>
<body>
<?php $this->beginBody() ?>
    <div class="probootstrap-search" id="probootstrap-search">
        <a href="#" class="probootstrap-close js-probootstrap-close"><i class="icon-cross"></i></a>
        <form action="<?=Url::to(['site/search']);?>" method="GET">
            <input type="search" name="search" id="search" placeholder="<?=Yii::t('app','Kalit so`z yozing va ENTER ni bosing');?>">
        </form>
    </div>

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
    }
    ?>

    <div class="probootstrap-page-wrapper">
    <div class="probootstrap-header-top">
            <div class="container">
                <div class="row">
                    
                    <div class="col-xs-6 col-sm-7    probootstrap-top-quick-contact-info">
                        <span style="color:red;font-weight:bold;"><i class="icon-location2"></i>Samarqand </span>
                     
                        <span><a href="tel:<?=$links->phone;?>"><i class="icon-phone2"><?=$links->phone;?></i></a></span>
                        <span> <a href="mailto:<?=$links->email;?>"><i class="icon-mail"><?=$links->email;?></i></a> </span>
                    </div>

                    <div class=" col-xs-6 col-sm-2 probootstrap-top-social">
                        <ul>
                            <?= MultiLanguageWidget::widget([
                                'widget_type' => 'classic',
                                'image_type' =>'rounded',
                                'width' => '30',
                                'addCurrentLang' => true,
                                'calling_controller' => $this->context,

                            ]);
                            ?>
                        </ul>
                    </div>

                    <div class="col-xs-6 col-sm-3 probootstrap-top-social">
                         <ul>
                            <li><a style="color:red;font-weight:bold;" href="tel:<?=$links->phone;?>"><i class="icon-phone2"></i></a></li>
                            <li><a href="<?=$links->facebook;?>"><i class="icon-facebook2"></i></a></li>
                            <li><a href="<?=$links->instagram;?>"><i class="icon-instagram2"></i></a></li>
                            <li><a style="color:red;font-weight:bold;" href="<?=$links->telegram ;?>"><i class="icon-telegram "></i></a></li>
                            <li><a href="#" class="probootstrap-search-icon js-probootstrap-search"><i class="icon-search"></i></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>


        <nav class="navbar navbar-default probootstrap-navbar">
            <div class="container">
                <div class="navbar-header">
                    <div class="btn-more js-btn-more visible-xs">
                        <a href="#"><i class="icon-dots-three-vertical "></i></a>
                    </div>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
              </button>
                 <a href="<?=Url::home();?>"> <img style="width:150px;height:auto; padding-top:8px;" src="/img/minded.png" alt=""></a> 
                </div>

                <div id="navbar-collapse" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?=Url::home();?>"><?=Yii::t('app','Asosiy');?></a></li>
                        <li><a href="<?=Url::to(['site/course']);?>"><?=Yii::t('app','Kurslar')?></a></li>
                        <li><a href="<?=Url::to(['site/teacher']);?>"><?=Yii::t('app','O`qituvchilar');?></a></li>
                        <li><a href="<?=Url::to(['site/event']);?>"><?=Yii::t('app','Tadbirlar');?></a></li>
                        <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle"><?=Yii::t('app','Boshqalar');?></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?=Url::to(['site/aboutus']);?>"><?=Yii::t('app','Biz Haqimizda');?></a></li>
                                <li><a href="<?=Url::to(['site/contact']);?>"><?=Yii::t('app','Registratsiya');?></a></li>
                            </ul>
                    </ul>
                </div>
            </div>
        </nav>


        <?=$content;?>
       
        <footer class="probootstrap-footer probootstrap-bg">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-4">
                        <div class="probootstrap-footer-widget">
                            <h3><?=Yii::t('app','Biz bilan bog`laning !');?></h3>
                            <p><?=$location;?></p>
                            <h3><?=Yii::t('app','Ijtimoiy tarmoqlarda');?></h3>
                            <ul class="probootstrap-footer-social ">
                                <li><a href="<?=$links->telegram;?>"><i class="icon-telegram "></i></a></li>
                                <li><a href="<?=$links->facebook;?>"><i class="icon-facebook "></i></a></li>
                                <li><a href="<?=$links->instagram;?>"><i class="icon-instagram2 "></i></a></li>
                                <li><a href="<?=$links->youtobe;?>"><i class="icon-youtube "></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-md-push-1 ">
                        <div class="probootstrap-footer-widget ">
                            <h3><?=Yii::t('app','Bo`limlar');?></h3>
                            <ul>
                                <li><a href="<?=Url::home();?> "><?=Yii::t('app','Asosiy')?></a></li>
                                <li><a href="<?=Url::to(['site/course']);?> "><?=Yii::t('app','Kurslar');?></a></li>
                                <li><a href="<?=Url::to(['site/teacher']);?>"<?=Yii::t('app','O`qituvchilar');?>></a></li>
                                <li><a href="<?=Url::to(['siite/event']);?>"><?=Yii::t('app','Tadbirlar');?></a></li>
                                <li><a href="<?=Url::to(['site/contact']);?>"><?=Yii::t('app','Registratsiya');?></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4 ">
                        <div class="probootstrap-footer-widget ">
                            <h3><?=Yii::t('app','Biz bilan bog`laning');?></h3>
                            <ul class="probootstrap-contact-info ">
                                <li><i class="icon-location2 "></i> <span>Samarqand</span></li>
                                <li><i class="icon-mail "></i><span><?=$links->email;?></span></li>
                                <li><i class="icon-phone2 "></i><span><?=$links->phone;?></span></li>
                            </ul>
                        </div>
                    </div>

                </div>
                <!-- END row -->
            </div>
             <!-- ending container -->
             <div class="probootstrap-copyright ">
                <div class="container ">
                    <div class="row ">
                        <div class="col-md-6 text-left ">
                            <p>&copy; 2021
                                <a href="#"></a><?=Yii::t('app','Yaratuvchi');?>  <i class="icon icon-heart "></i> 
                                <a href="https://t.me/ramziddinrustamov">Ramziddin</a>
                            </p>
                        </div>
                       
                        <div class="col-md-3 probootstrap-back-to-top ">
                            <p><a href="# " class="js-backtotop "><?=Yii::t('app','Yuqoriga');?> <i class="icon-arrow-long-up "></i></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- END wrapper -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
