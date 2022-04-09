<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Allertlinks */

$this->title = 'Update Allertlinks: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Allertlinks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="allertlinks-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
