<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Allertlinks */

$this->title = 'Create Allertlinks';
$this->params['breadcrumbs'][] = ['label' => 'Allertlinks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="allertlinks-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
