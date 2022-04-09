<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
use yii\helpers\Url;


$this->title = $name;
?>
<div class="site-error  container">

    <h1 class="text-center"><?=Yii::t('app','Topilmadi.');?> &#128516;</h1>

    <div class="alert alert-danger  container">
          <a class="text-center" href="<?=Url::home();?>"><?=Yii::t('app','`Minded` o`quv markazi!');?></a>
    </div>
</div>
