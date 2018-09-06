<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Aboutus */

$this->title = 'Update Aboutus: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Aboutuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idabout, 'url' => ['view', 'id' => $model->idabout]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="card">    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
