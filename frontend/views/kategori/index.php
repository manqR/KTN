<?php
/* @var $this yii\web\View */

    $this->title = "Kategori";
    $this->params['breadcrumbs'][] = $this->title .'-'. $_GET['name'];

    $root = '@web';		

    $this->registerCssFile($root."/css/skins/default.css");
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
                <h1 class="mb-0"><strong>Shop</strong></h1>
                <p>Showing 1–12 of <?= $count; ?> results.</p>
            </div>
        </div>
        <div class="masonry-loader masonry-loader-showing">
            <div class="row products product-thumb-info-list mt-3" data-plugin-masonry>
              
              <?php
                foreach($model as $models):
              ?>
                <div class="col-12 col-sm-6 col-lg-3 product">
                    <!-- <a href="produk_detail-qq">
                        <span class="onsale">Sale!</span>
                    </a> -->
                    <span class="product-thumb-info">
                        
                        <a href="produk_detail-qq">
                            <span class="product-thumb-info-image">
                                <span class="product-thumb-info-act">
                                    <span class="product-thumb-info-act-left"><em>View</em></span>
                                    <span class="product-thumb-info-act-right"><em><i class="fas fa-plus"></i> Details</em></span>
                                </span>
                                <img alt="" class="img-fluid" src="img/produk/<?= $models->image ?>">
                            </span>
                        </a>
                        <span class="product-thumb-info-content">
                            <a href="produk_detail-qq">
                                <h4><?= $models->title ?></h4>
                                <span class="price">
                                    <!-- <del><span class="amount">$325</span></del> -->
                                    <!-- <ins><span class="amount">$299</span></ins> -->
                                </span>
                            </a>
                        </span>
                    </span>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <!-- <div class="row">
            <div class="col">
                <ul class="pagination float-right">
                    <li class="page-item"><a class="page-link" href="#">«</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
            </div>
        </div> -->
    </div>
</div>