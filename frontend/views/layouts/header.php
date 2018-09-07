
<?php

	use frontend\models\Logo;
	use frontend\models\Kontak;
	use frontend\models\ProdukKategori;
	use frontend\models\Produk;

    $logo = Logo::find()
		->One();

	$kontak = Kontak::find()
		->One();    
		
	$category = ProdukKategori::find()
			->where(['status'=>1])
			->all();

	
	$this->registerJs('
		
			$(function () {				
				
				var url = window.location.pathname; 
				var activePage = url.substring(url.lastIndexOf("/") + 1);				
				$(".nav li a").each(function () { 
					var linkPage = this.href.substring(this.href.lastIndexOf("/") + 1);
					
					var $this = $(this);
					var activePageSplit = activePage.split("-");
					
					if (activePage == linkPage || activePageSplit[0] == linkPage) {							
						$(this).parents("li").addClass("active");																							
					}
					
				});
				
			})
			
		');

?>
<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 55, 'stickySetTop': '-55px', 'stickyChangeLogo': true}">
	<div class="header-body">
		<div class="header-container container">
			<div class="header-row">
				<div class="header-column">
					<div class="header-row">
						<div class="header-logo">
							<a href="index.html">
								<img alt="Porto" width="180" data-sticky-width="150"  data-sticky-top="33" src="img/<?= $logo->file_img ?>">
							</a>
						</div>
					</div>
				</div>
				<div class="header-column justify-content-end">
					<div class="header-row pt-3">
						<nav class="header-nav-top">
							<ul class="nav nav-pills">								
								<li class="nav-item">
									<span class="ws-nowrap"><i class="fas fa-phone"></i> <?= $kontak->tlp ?></span>
								</li>
							</ul>
						</nav>
						<div class="header-search d-none d-md-block">
							<form id="searchForm" action="page-search-results.html" method="get">
								<div class="input-group">
									<input type="text" class="form-control" name="q" id="q" placeholder="Search..." required>
									<span class="input-group-append">
										<button class="btn btn-light" type="submit"><i class="fas fa-search"></i></button>
									</span>
								</div>
							</form>
						</div>
					</div>
					<div class="header-row">
						<div class="header-nav">
							<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
								<nav class="collapse">
									<ul class="nav nav-pills" id="mainNav">
                                        <li>
											<a class="dropdown-item" href="<?= Yii::$app->homeUrl; ?>">
												Home
											</a>
                                        </li>
										<li class="dropdown">
											<a class="dropdown-item dropdown-toggle" href="#">
												Tentang Kami
											</a>
											<ul class="dropdown-menu">
												
												<li>
													<a class="dropdown-item" href="tentang-kami">Profil Perusahaan</a>													
												</li>
												<li>
													<a class="dropdown-item" href="jajaran-manajemen">Jajaran Manajemen</a>													
												</li>												
											</ul>
										</li>
										<li class="dropdown">
											<a class="dropdown-item dropdown-toggle" href="#">
												Produk
											</a>
											<ul class="dropdown-menu">
												<?php
													foreach($category as $categorys):
												?>
												<li class="dropdown-submenu">
													<a class="dropdown-item" href="kategori-<?= $categorys->name?>"><?= $categorys->name ?></a>
													<ul class="dropdown-menu">
														<?php
															$produk = Produk::find()
																->where(['idkategori'=>$categorys->idcategory])
																->all();
															
															foreach($produk as $produks):
														?>
														<li><a class="dropdown-item" href="produk-<?= $categorys->idcategory ?>-<?= $produks->title ?>" data-thumb-preview="img/previews/<?= $produks->image ?>"><?= $produks->title ?></a></li>													
														<?php
															endforeach;
														?>
													</ul>
												</li>
												<?php
													endforeach;
												?>
											</ul>
										</li>
                                        <li>
											<a class="dropdown-item" href="karir">
												Karir
											</a>
                                        </li>										
                                        <li>
											<a class="dropdown-item" href="hubungi-kami">
												Hubungi Kami
											</a>
                                        </li>										
									</ul>
								</nav>
							</div>
							<ul class="header-social-icons social-icons d-none d-sm-block">
								<li class="social-icons-facebook"><a href="<?= $kontak->facebook ?>" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
								<li class="social-icons-twitter"><a href="<?= $kontak->twitter ?>" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
								<li class="social-icons-linkedin"><a href="<?= $kontak->linkedin ?>" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
							<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
								<i class="fas fa-bars"></i>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
