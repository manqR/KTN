<?php
/* @var $this yii\web\View */

    $this->title = "Detail";
    $this->params['breadcrumbs'][] = $_GET['kat'];
    $this->params['breadcrumbs'][] = $_GET['name'];
?>
<div role="main" class="main shop">
	<div class="container">

		<div class="row">
			<div class="col">
				<hr class="tall">
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="owl-carousel owl-theme" data-plugin-options="{'items': 1}">
					
					<div>
						<div class="thumbnail">
							<img alt="" class="img-fluid border rounded" src="img/produk/<?= $model->image ?>">
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="summary entry-summary">
					<h1 class="mb-0"><strong><?= $model->title ?></strong></h1>
					<!-- <div class="review_num">
						<span class="count" itemprop="ratingCount">2</span> reviews
					</div>
					<div title="Rated 5.00 out of 5" class="star-rating">
						<span style="width:100%"><strong class="rating">5.00</strong> out of 5</span>
					</div> -->
					<!-- <p class="price">
						<span class="amount">$22</span>
					</p> -->
					<p class="mb-4"><?= $model->description ?> </p>
					
					<div class="product_meta">
						<span class="posted_in">Categories: <a rel="tag" href="#"><?= $model->produkKategori->name ?></a></span>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				
			</div>
		</div>
		<div class="row">
			<div class="col">
				<hr class="tall">
				<h4 class="mb-3 text-uppercase">Related <strong>Products</strong></h4>
				<div class="row products product-thumb-info-list mt-4 pt-2">

					<?php
						foreach($related as $relateds):
					?>
					<div class="col-sm-6 col-lg-3 product">
						<!-- <a href="shop-product-sidebar.html">
							<span class="onsale">Sale!</span>
						</a> -->
						<span class="product-thumb-info">							
							<a href="produk-<?=$relateds->idkategori ?>-<?= $relateds->title?>">
								<span class="product-thumb-info-image">
									<span class="product-thumb-info-act">
										<span class="product-thumb-info-act-left"><em>View</em></span>
										<span class="product-thumb-info-act-right"><em><i class="fas fa-plus"></i> Details</em></span>
									</span>
									<img alt="" class="img-fluid" src="img/produk/<?= $relateds->image ?>">
								</span>
							</a>
							<span class="product-thumb-info-content">
								<a href="produk-<?=$relateds->idkategori ?>-<?= $relateds->title?>">
									<h4><?= $relateds->title ?></h4>
									<!-- <span class="price">
										<del><span class="amount">$325</span></del>
										<ins><span class="amount">$299</span></ins>
									</span> -->
								</a>
							</span>
						</span>
					</div>
					<?php endforeach; ?>
					
				</div>
			</div>
		</div>
	</div>
</div>