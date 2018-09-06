<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Produk */

$this->title = 'Update Produk: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Produks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->idproduk]];
$this->params['breadcrumbs'][] = 'Update';
?>


<div class="card">    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

