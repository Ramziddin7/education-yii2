<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\OurCourses */

$this->title = 'Create Our Courses';
$this->params['breadcrumbs'][] = ['label' => 'Our Courses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="our-courses-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
