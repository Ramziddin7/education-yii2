<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\OurCourses */

$this->title = 'Update Our Courses: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Our Courses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="our-courses-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
