<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\AddVideo */

$this->title = 'Create Add Video';
$this->params['breadcrumbs'][] = ['label' => 'Add Videos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="add-video-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
