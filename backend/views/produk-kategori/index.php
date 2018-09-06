<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProdukKategoriSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Produk Kategoris';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="produk-kategori-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(' Tambah Kategori', ['create'], ['class' => 'btn btn-success fa fa-plus ']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            
            'name',
            'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
