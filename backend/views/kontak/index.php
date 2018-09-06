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

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(' Kontak', ['create'], ['class' => 'btn btn-success fa fa-plus']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

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
