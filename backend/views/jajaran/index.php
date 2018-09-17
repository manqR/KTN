<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\JajaranSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jajarans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jajaran-index">

    <p>
     <?= Html::a(' Jajaran', ['create'], ['class' => 'btn btn-success fa fa-plus']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nama',
            'posisi',
            'facebook',
            'linkedin',
            'twitter',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
