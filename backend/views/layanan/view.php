<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Layanan */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Layanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="card card-block">    

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idlayanan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idlayanan], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idlayanan',
            'img',
            'title',
            'short_desc',
            'full_desc:ntext',
            'status',
        ],
    ]) ?>

</div>
