<?php
/* @var $this yii\web\View */

    $this->title = "Jajaran Manajemen";
    $this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">

	<h2>Meet the <strong>Team</strong></h2>
	<ul class="nav nav-pills sort-source" data-sort-id="team" data-option-key="filter" style="display:none">
		<li class="nav-item" data-option-value="*"><a class="nav-link active" href="#">Show All</a></li>
	</ul>
	<div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
		<div class="row team-list sort-destination" data-sort-id="team">
			<?php
				foreach($model as $models):
			?>
			<div class="col-12 col-sm-6 col-lg-3 isotope-item leadership">
				<span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
					<span class="thumb-info-wrapper">
						<a href="about-me.html">
							<img src="img/jajaran/<?= $models->img ?>" class="img-fluid" alt="<?= $models->nama ?>">
							<span class="thumb-info-title">
								<span class="thumb-info-inner"><?= $models->nama ?></span>
								<span class="thumb-info-type"><?= $models->posisi ?></span>
							</span>
						</a>
					</span>
					<span class="thumb-info-caption">
						<!-- <span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.</span> -->
						<span class="thumb-info-social-icons">
							<a target="_blank" href="<?= $models->facebook ?>"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
							<a target="_blank" href="<?= $models->twitter ?>"><i class="fab fa-twitter"></i><span>Twitter</span></a>
							<a target="_blank" href="<?= $models->linkedin ?>"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
						</span>
					</span>
				</span>
			</div>
			<?php endforeach; ?>
			
		</div>
	</div>
</div>