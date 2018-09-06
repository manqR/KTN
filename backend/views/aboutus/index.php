<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AboutusSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Aboutuses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aboutus-index">
    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(' Tambah Profile', ['create'], ['class' => 'btn btn-success fa fa-plus']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            
            'kategori',
            'full_description:ntext',
            'short_description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
