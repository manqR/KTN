<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Jajaran */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="card-block">


    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'img')->fileInput(['class'=>'form-control'])->label('Upload Image') ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'posisi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'facebook')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'linkedin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'twitter')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
