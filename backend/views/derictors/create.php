<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Derictors */

$this->title = 'Create Derictors';
$this->params['breadcrumbs'][] = ['label' => 'Derictors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="derictors-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
