<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ProdukKategori */

$this->title = 'Create Produk Kategori';
$this->params['breadcrumbs'][] = ['label' => 'Produk Kategoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="card">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
