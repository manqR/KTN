<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Logo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="logo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idlogo')->textInput() ?>

    <?= $form->field($model, 'file_img')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alt')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
