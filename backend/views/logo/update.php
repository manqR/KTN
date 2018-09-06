<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Logo */

$this->title = 'Update Logo: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Logos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idlogo, 'url' => ['view', 'id' => $model->idlogo]];
$this->params['breadcrumbs'][] = 'Update';
?>

<div class="card">    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
