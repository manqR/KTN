<?php
    $this->title = 'PT Karya Timur Nusantara';
?>
<div class="slider-container rev_slider_wrapper">
    <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.7" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 500, 'responsiveLevels': [4096,1200,992,500]}">
        <ul>
            <?php
                $odd = 0;
                foreach($slider as $sliders):
                
                $odd++;                    
                if($odd % 2 == 0){
            ?>
                <li data-transition="fade">
                    <img src="img/slider/<?= $sliders->img_slider ?>"  
                        alt=""
                        data-bgposition="center center" 
                        data-bgfit="cover" 
                        data-bgrepeat="no-repeat" 
                        class="rev-slidebg">                    
                    <div class="tp-caption main-label"
                        data-x="['135','135','center','center']"
                        data-y="['210','210','210','230']"
                        data-start="1500"
                        data-whitespace="nowrap"	
                        data-fontsize="['62','62','62','82']"					 
                        data-transform_in="y:[100%];s:500;"
                        data-transform_out="opacity:0;s:500;"
                        data-mask_in="x:0px;y:0px;"><?= $sliders->title1 ?></div>
                    <div class="tp-caption bottom-label"
                        data-x="['185','185','center','center']"
                        data-y="['280','280','280','315']"
                        data-start="2000"
                        data-fontsize="['20','20','20','30']"
                        data-transform_in="y:[100%];opacity:0;s:500;"><?= $sliders->title2 ?></div>
                </li>
            <?php
                }else{
            ?>

                <li data-transition="fade">
                    <img src="img/slider/<?= $sliders->img_slider ?>"  
                        alt=""
                        data-bgposition="center center" 
                        data-bgfit="cover" 
                        data-bgrepeat="no-repeat" 
                        class="rev-slidebg">
                    <div class="tp-caption featured-label"
                        data-x="center"
                        data-y="210"
                        data-start="500"
                        data-fontsize="['52','52','52','82']"
                        style="z-index: 5"
                        data-transform_in="y:[100%];s:500;"
                        data-transform_out="opacity:0;s:500;"><?= $sliders->title1 ?></div>
                    <div class="tp-caption bottom-label"
                        data-x="center"
                        data-y="['270','270','270','290']"
                        data-start="1000"
                        data-fontsize="['23','23','23','38']"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;s:600;e:Power4.easeInOut;"
                        data-transform_out="opacity:0;s:500;"
                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                        data-splitin="chars" 
                        data-splitout="none" 
                        data-responsive_offset="on"
                        style="font-size: 23px; line-height: 30px;"
                        data-elementdelay="0.05"><?= $sliders->title2 ?></div>
                </li>
            <?php } 
                endforeach;
            ?>
            
        </ul>
    </div>
</div>
<div class="home-intro" id="home-intro">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <p>
                    The fastest way to grow your business with the leader in <em>Technology</em>
                    <span>Check out our options and features included.</span>
                </p>
            </div>
            <!-- <div class="col-lg-4">
                <div class="get-started text-left text-lg-right">
                    <a href="#" class="btn btn-lg btn-primary">Get Started Now!</a>
                    <div class="learn-more">or <a href="index.html">learn more.</a></div>
                </div>
            </div> -->
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <h2>Our <strong>Service</strong></h2>
        </div>
    </div>
    <div class="row">
        <?php
            foreach($layanan as $layanans):
        ?>
        <div class="col-lg-4">
            <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
                <div class="feature-box-icon">
                    <i class="icon-user-following icons"></i>
                </div>
                <div class="feature-box-info">
                    <h4 class="mb-2">Customer Support</h4>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.</p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 p-0">
            <section class="section section-secondary h-100 m-0">
                <div class="row justify-content-end m-0">
                    <div class="col-half-section col-half-section-right">
                        <h2 class="heading-dark">Latest <strong>Posts</strong></h2>
                        <div class="row">
                           
                           <?php
                            foreach($blog as $blogs):
                           ?>
                            <div class="col-sm-6">
                                <div class="recent-posts">
                                    <article class="post">
                                        <div class="date">
                                            <span class="day">15</span>
                                            <span class="month">Jan</span>
                                        </div>
                                        <h4 class="heading-primary"><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta. <a href="/" class="read-more">read more <i class="fas fa-angle-right"></i></a></p>
                                    </article>
                                </div>
                            </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-lg-6 p-0">
            <section class="section section-tertiary h-100 m-0">
                <div class="row m-0">
                    <div class="col-half-section">
                        <h2 class="heading-dark">Our <strong>Clients</strong></h2>
                        <div class="content-grid content-grid-dashed mt-5 mb-4">
                                                      
                            <div class="row content-grid-row">
                                <?php      
                                    foreach($client as $clients):                                    
                                    if($clients->idclient %2== 0){
                                ?>
                                <div class="content-grid-item col-sm-6 text-center">
                                    <img class="img-fluid" src="img/client/<?= $clients->file_img ?>" alt="<?= $clients->nama_klien ?>">
                                </div>       
                                <?php }                                 
                                    endforeach; 
                                ?>                        
                            </div>
                            <div class="row content-grid-row">
                                <?php      
                                    foreach($client as $clients):                                    
                                    if($clients->idclient %2 != 0){
                                ?>
                                <div class="content-grid-item col-sm-6 text-center">
                                    <img class="img-fluid" src="img/client/<?= $clients->file_img ?>" alt="<?= $clients->nama_klien ?>">
                                </div>       
                                <?php }                                 
                                    endforeach; 
                                ?>                        
                            </div>
                           
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-5">Our <strong>Product</strong></h2>
            <div class="owl-carousel owl-theme mb-0" data-plugin-options="{'items': 4, 'margin': 0, 'loop': false}">
                <?php
                    foreach($produk as $produks):
                ?>
                <div>
                    <a href="produk_detail-<?= $produks->title ?>">
                    <img src="img/produk/<?= $produks->image ?>" class="img-fluid" alt="<?= $produks->title ?>">
                    </a>
                </div>
               <?php
                endforeach;
               ?>
            </div>
        </div>
    </div>
</div>