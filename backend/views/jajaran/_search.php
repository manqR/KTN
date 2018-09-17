<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\JajaranSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jajaran-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'img') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'posisi') ?>

    <?= $form->field($model, 'facebook') ?>

    <?php // echo $form->field($model, 'linkedin') ?>

    <?php // echo $form->field($model, 'twitter') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
