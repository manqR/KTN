<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Faq */

$this->title = 'Update Faq: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Faqs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idfaq, 'url' => ['view', 'id' => $model->idfaq]];
$this->params['breadcrumbs'][] = 'Update';
?>

<div class="card">    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
