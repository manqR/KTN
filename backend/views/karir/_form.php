<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Karir */
/* @var $form yii\widgets\ActiveForm */

$this->registerJs(" $(function(){
    $('#edit')
      .on('froalaEditor.initialized', function (e, editor) {
        
      })
      .froalaEditor({enter: $.FroalaEditor.ENTER_P, placeholderText: null})
  });
");
?>

<div class="card-block">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'descripition')->textarea(['rows' => 6,'id'=>'edit']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
