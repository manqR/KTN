<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Jajaran */

$this->title = 'Create Jajaran';
$this->params['breadcrumbs'][] = ['label' => 'Jajarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="card">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

