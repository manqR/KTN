<?php
/* @var $this yii\web\View */

    $this->title = "Karir";
    $this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">

    <h2><strong>Rockstars</strong> wanted!</h2>

    <div class="row">
    	<div class="col">
    		<p class="lead">
    			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla non pulvinar. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut eu risus enim, ut pulvinar lectus. Sed hendrerit nibh metus.
    		</p>
    	</div>
    </div>

    <hr>

    <div class="row">
    	<div class="col-lg-8">
    		<div class="toggle toggle-primary mt-4" data-plugin-toggle>
				<?php
					foreach($model as $models):
				?>
				<section class="toggle">
    				<label><?= $models->title ?></label>
    				<div class="toggle-content">
    					<?= $models->descripition ?>
    				</div>
    			</section>
				<?php endforeach; ?>
    		</div>
    	</div>
    	<div class="col-lg-4">
    		<div class="featured-box featured-box-primary">
    			<div class="box-content">
    				<h4 class="text-uppercase">The Benefits</h4>
    				
    				<hr>
    				<ul class="list list-icons text-left">
    					<li><i class="fas fa-check"></i>Health insurance</li>
    					<li><i class="fas fa-check"></i>Retirement investment plans</li>
    					<li><i class="fas fa-check"></i>Vacation time</li>
    				</ul>
    			</div>
    		</div>
    	</div>
    </div>
</div>