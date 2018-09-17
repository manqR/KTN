<?php
/* @var $this yii\web\View */

$this->title = 'Blog';    
$this->params['breadcrumbs'][] = $this->title .' - '.$_GET['name'];

?>
<div class="container">

    <div class="row">
        <div class="col-lg-12">
            <div class="blog-posts single-post">

                <article class="post post-large blog-single-post">
                    <div class="post-image">
                        <div class="owl-carousel owl-theme" data-plugin-options="{'items':1}">
                            <div>
                                <div class="img-thumbnail d-block">
                                    <img class="img-fluid" src="img/blog/<?= $model->img_display; ?>" alt="<?= $model->title ?>">
                                </div>
                            </div>                           
                        </div>
                    </div>

                    <div class="post-date">
                        <span class="day"><?= date('d', strtotime($model->tanggal)); ?></span>
                        <span class="month"><?= date('M', strtotime($model->tanggal)) ?></span>
                    </div>

                    <div class="post-content">

                        <h2><?= $model->title ?></h2>

                        <div class="post-meta">
                            <span><i class="fas fa-user"></i> By <a href="#"><?= $model->author ?></a> </span>
                        </div>

                       <?= $model->full_description ?>
                        

                    </div>
                </article>

            </div>
        </div>

       
         
    </div>

</div>
