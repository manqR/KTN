<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\KontakSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kontaks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kontak-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Kontak', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idkontak',
            'alamat',
            'tlp',
            'email:email',
            'facebook',
            //'twitter',
            //'linkedin',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
