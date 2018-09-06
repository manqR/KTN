<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ProdukKategori */

$this->title = 'Update Produk Kategori: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Produk Kategoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->idcategory]];
$this->params['breadcrumbs'][] = 'Update';
?>

<div class="card">    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
