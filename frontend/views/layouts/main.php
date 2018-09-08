<?php

	/* @var $this \yii\web\View */
	/* @var $content string */

	use yii\helpers\Html;
	use yii\bootstrap\Nav;
	use yii\bootstrap\NavBar;
	use yii\widgets\Breadcrumbs;
	use frontend\assets\AppAsset;
	use common\widgets\Alert;
	use yii\web\View;


	AppAsset::register($this);	
	$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@web/frontend/layout');

	$crumbs = explode("/",$_SERVER["REQUEST_URI"]);
	
	
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
	<head>
		<meta charset="<?= Yii::$app->charset ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?= Html::csrfMetaTags() ?>
		<title><?= Html::encode($this->title) ?></title>
		<?php $this->head() ?>
	</head>
	
	<body>
	<?php $this->beginBody() ?>

	<?php

		$root = '@web';		
		/* @JS */
		$this->registerJsFile($root."/vendors/modernizr/modernizr.min.js",
		['position' => View::POS_HEAD]);
	?>

	<body>

		<div class="body">
			<?= $this->render(
                'header.php',
                ['directoryAsset' => $directoryAsset]) 
			?>
			<div role="main" class="main">
				<?php
					if($crumbs[2] != ""){
				?>
				<section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col">
								<?= Breadcrumbs::widget([
									'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
								]) ?>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<h1><?= $this->title ?></h1>
							</div>
						</div>
					</div>
				</section>
				<?php } ?>
							
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        </div>

        <?= $this->render(
            'footer.php',
            ['directoryAsset' => $directoryAsset]) 
		?>
	</div>

	<?php $this->endBody() ?>
	</body>	
</html>
<?php $this->endPage() ?>
