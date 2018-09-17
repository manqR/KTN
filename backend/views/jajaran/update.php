<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Jajaran */

$this->title = 'Update Jajaran: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Jajarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>

<div class="card">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
