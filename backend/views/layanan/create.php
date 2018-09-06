<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Layanan */

$this->title = 'Create Layanan';
$this->params['breadcrumbs'][] = ['label' => 'Layanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="card">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

