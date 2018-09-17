<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Aboutus */

$this->title = $model->kategori;
$this->params['breadcrumbs'][] = ['label' => 'Aboutuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>



<div class="card card-block">
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idabout], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idabout], [
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
            'full_description:ntext',
            'short_description',
        ],
    ]) ?>

</div>
