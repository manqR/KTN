<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Client */

$this->title = 'Update Client: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Clients', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idclient, 'url' => ['view', 'id' => $model->idclient]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="client-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
