<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\ProdukKategori;
/* @var $this yii\web\View */
/* @var $model backend\models\Produk */
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
    
    <?= $form->field($model, 'idkategori')->dropDownList(
    		ArrayHelper::map(ProdukKategori::find()->all(),'idcategory', 'name'),
    		['prompt'=>'- Pilih -'])->label('Kategori');				 
	?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->fileInput(['class'=>'form-control'])->label('Upload Image') ?>
    
    <?= $form->field($model, 'description')->textarea(['rows' => 6,'id'=>'edit']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
