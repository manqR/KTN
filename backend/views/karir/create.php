<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Karir */

$this->title = 'Create Karir';
$this->params['breadcrumbs'][] = ['label' => 'Karirs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="card">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>