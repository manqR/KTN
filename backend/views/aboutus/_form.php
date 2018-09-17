<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $model backend\models\Aboutus */
/* @var $form yii\widgets\ActiveForm */


/* @ROOT */
$root = '@web';
/* @JS */
$this->registerJsFile($root."/vendors/select2/select2.js",
['depends' => [\yii\web\JqueryAsset::className()],
'position' => View::POS_END]);
$this->registerJsFile($root."/vendors/summernote/dist/summernote.js",
['depends' => [\yii\web\JqueryAsset::className()],
'position' => View::POS_END]);

$this->registerJsFile($root."/scripts/forms/plugins.js",
['depends' => [\yii\web\JqueryAsset::className()],
'position' => View::POS_END]);




$this->registerJs(" $(function(){
    $('.edit')
      .on('froalaEditor.initialized', function (e, editor) {
        
      })
      .froalaEditor({enter: $.FroalaEditor.ENTER_P, placeholderText: null})
     });
");
?>

<div class="card-block">

    <?php $form = ActiveForm::begin(); ?>
    
        <?= $form->field($model, 'short_description')->textarea(['rows' => 6,'class'=>'edit'])->label('Short Description') ?>
        <?= $form->field($model, 'full_description')->textarea(['rows' => 6,'class'=>'edit'])->label('Full Description') ?>
        <!-- <label>Description</label>    
        <div class="m-b-3">
           
            <textarea name="myNameForLaravelToPickUpOnTheInput" class="summernote"></textarea>
        </div> -->
        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

    <?php ActiveForm::end(); ?>

</div>
