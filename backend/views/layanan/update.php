<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Layanan */

$this->title = 'Update Layanan: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Layanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->idlayanan]];
$this->params['breadcrumbs'][] = 'Update';
?>

<div class="card">    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
