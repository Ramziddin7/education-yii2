<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Derictors */

$this->title = 'Update Derictors: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Derictors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="derictors-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
