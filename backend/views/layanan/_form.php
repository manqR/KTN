<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Icon;
use yii\web\View;
use yii\helpers\ArrayHelper;
/* @var $model backend\models\Layanan */
/* @var $form yii\widgets\ActiveForm */

$root = '@web';
/* @JS */
$this->registerJsFile($root."/vendors/select2/select2.js",
['depends' => [\yii\web\JqueryAsset::className()],
'position' => View::POS_END]);

$this->registerJsFile($root."/scripts/forms/plugins.js",
['depends' => [\yii\web\JqueryAsset::className()],
'position' => View::POS_END]);


/* @CSS */
$this->registerCssFile('vendors/select2/select2.css');
?>

<div class="card-block">

    <?php $form = ActiveForm::begin(); ?>
   
   <?php
        
        $sql = Icon::find()
            ->All();

           
        $data = array();
        foreach ($sql as $sqls):
            $data[$sqls->icon] = $sqls->icon;

        endforeach;

        $this->registerJs(" $(function(){
            $('.edit')
              .on('froalaEditor.initialized', function (e, editor) {
                
              })
              .froalaEditor({enter: $.FroalaEditor.ENTER_P, placeholderText: null})
          });
        ");
        
    ?>
    
    
	<?= $form->field($model, 'img')->dropDownList($data ,array('prompt'=>'Pilih Icons...','class'=>'select2 m-b-1','style' => 'width: 100%'))->label('Icons (<a href="https://fontawesome.com/icons?d=gallery&m=free" alt="Detail Icons" title="Detail Icons" target="_blank"><i class="fa fa-question"></i></a>)');	?>
   
    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'short_desc')->textarea(['rows' => 6,'class'=>'edit']) ?>    

    <?= $form->field($model, 'full_desc')->textarea(['rows' => 6,'class'=>'edit']) ?>
    
    <?= $form->field($model, 'status')->dropDownList(['1' => 'Enable', '0' => 'Disable']); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
