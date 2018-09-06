<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Slider */

$this->title = 'Update Slider: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Sliders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idslider, 'url' => ['view', 'id' => $model->idslider]];
$this->params['breadcrumbs'][] = 'Update';
?>

<div class="card">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

