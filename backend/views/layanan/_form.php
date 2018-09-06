<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Layanan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="card-block">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'img')->fileInput(['class'=>'form-control'])->label('Upload Image') ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'short_desc')->textarea(['rows' => 6]) ?>    

    <?= $form->field($model, 'full_desc')->textarea(['rows' => 6]) ?>
    
    <?= $form->field($model, 'status')->dropDownList(['1' => 'Enable', '0' => 'Disable']); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
