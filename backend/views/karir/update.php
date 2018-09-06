<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Karir */

$this->title = 'Update Karir: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Karirs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->idkarir]];
$this->params['breadcrumbs'][] = 'Update';
?>

<div class="card">    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
