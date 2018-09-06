<?php

/* @var $this \yii\web\View */
/* @var $content string */

	use yii\helpers\Html;
	use yii\bootstrap\Nav;
	use yii\bootstrap\NavBar;
	use yii\widgets\Breadcrumbs;
	use common\widgets\Alert;
	

	$this->registerJs('
		
			$(function () {				
				
				var url = window.location.pathname; 
				var activePage = url.substring(url.lastIndexOf("/") + 1);				
				$(".nav li a").each(function () { 
					var linkPage = this.href.substring(this.href.lastIndexOf("/") + 1);
					
					var $this = $(this);
					var activePageSplit = activePage.split("-");
					
					if (activePage == linkPage || activePageSplit[0] == linkPage) {																										
						$(this).parents("li").addClass("open");												
					}
					
				});
			})
			
		');

?>



<!--sidebar panel-->
<div class="off-canvas-overlay" data-toggle="sidebar"></div>
<div class="sidebar-panel">
    <div class="brand">
        <!-- toggle offscreen menu -->
        <a href="javascript:;" data-toggle="sidebar" class="toggle-offscreen hidden-lg-up">
        <i class="material-icons">menu</i>
        </a>
        <!-- /toggle offscreen menu -->
        <!-- logo -->
        <a class="brand-logo" style="text-align: center">
			<img class="expanding-hidden" src="images/logo.png" alt="" style="width: 70%";/>
        </a>
        <!-- /logo -->
    </div>
    <div class="nav-profile dropdown">
        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
            <div class="user-image">
                <img src="images/avatar.jpg" class="avatar img-circle" alt="user" title="user"/>
            </div>
            <div class="user-info expanding-hidden">
                <?= Yii::$app->user->identity->username ?>
                <small class="bold">Administrator</small>
            </div>
        </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="javascript:;">Profile</a>                       
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="javascript:;">Help</a>			
			<?=				  
				  Html::beginForm(['/site/logout'], 'post')
				. Html::submitButton(
					'Logout',
					['class' => 'dropdown-item']
				)
				. Html::endForm()
			?>
           
        </div>
    </div>
    <!-- main navigation -->
    <nav>
        <p class="nav-title">NAVIGATION</p>
        <ul class="nav">
            <!-- dashboard -->
            <li>
                <a href="<?= Yii::$app->homeUrl; ?>">
                <i class="material-icons text-primary">home</i>
                <span>Home</span>
                </a>
            </li>
            <!-- /dashboard -->
         
			<!-- student -->
            <li>
                <a href="javascript:;">
                <span class="menu-caret">
                <i class="material-icons">arrow_drop_down</i>
                </span>
                <i class="material-icons text-success">font_download</i>               
                <span>Tentang Kami</span>
                </a>
                <ul class="sub-menu">                   
					<li>
                        <a href="profile">
                        <span>Profile / Jajaran Manajemen</span>
                        </a>
                    </li>                        			            
					<li>
                        <a href="layanan">
                        <span>Layanan</span>
                        </a>
                    </li>                        			            
                </ul>
            </li>
            <!-- /student -->
			
            <!-- setup -->
            <li>
                <a href="javascript:;">
                <span class="menu-caret">
                <i class="material-icons">arrow_drop_down</i>
                </span>
                <i class="material-icons text-warning"> cloud_upload</i>
                <span>Produk</span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="kategori">
                        <span>Kategori Produk</span>
                        </a>
                    </li>
                    <li>
                        <a href="produk">
                        <span>Produk</span>
                        </a>
                    </li>                                
                </ul>
            </li>
            <!-- /setup -->
            
             <!-- setup -->
             <li>
                <a href="javascript:;">
                <span class="menu-caret">
                <i class="material-icons">arrow_drop_down</i>
                </span>
                <i class="material-icons text-danger">add_a_photo</i>
                <span>Upload</span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="logo">
                        <span>Logo</span>
                        </a>
                    </li>
                    <li>
                        <a href="slider">
                        <span>Slider</span>
                        </a>
                    </li>                                
                </ul>
            </li>
            <!-- /setup -->
            
            <!-- setup -->
           <li>
                <a href="karir">
                <i class="material-icons text-warning">accessibility</i>
                <span>Karir</span>
                </a>
            </li>
            <!-- /setup -->
            <!-- setup -->
           <li>
                <a href="blog">
                <i class="material-icons text-danger">create</i>
                <span>Blog</span>
                </a>
            </li>
            <!-- /setup -->
            <!-- setup -->
           <li>
                <a href="faq">
                <i class="material-icons text-default">question_answer</i>
                <span>Faq</span>
                </a>
            </li>
            <!-- /setup -->

            <!-- setup -->
           <li>
                <a href="kontak">
                <i class="material-icons text-success">contacts</i>
                <span>Kontak</span>
                </a>
            </li>
            <!-- /setup -->
            
			
            <li>
                <hr/>
            </li>
			
            <!-- documentation -->
            <li>
                <a href="http://milestone.nyasha.me/latest/documentation" target="_blank">
                <i class="material-icons">local_library</i>
                <span>Documentation</span>
                </a>
            </li>
            <!-- /documentation -->
        </ul>
    </nav>
    <!-- /main navigation -->
</div>			