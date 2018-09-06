<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Kontak */

$this->title = 'Create Kontak';
$this->params['breadcrumbs'][] = ['label' => 'Kontaks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

