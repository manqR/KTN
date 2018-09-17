<?php
    $this->title = 'Blog';    
    $this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="row">
    <div class="col">
        <div class="blog-posts">
           <?php
                foreach($model as $models):
           ?>
            <article class="post post-large">
                <div class="post-image">
                    <div class="owl-carousel owl-theme" data-plugin-options="{'items':1}">
                       
                        <div>
                            <div class="img-thumbnail d-block">
                            <img class="img-fluid" src="img/blog/<?= $models->img_display; ?>" alt="<?= $models->title ?>">
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="post-date">
                    <span class="day"><?= date('d', strtotime($models->tanggal)); ?></span>
                    <span class="month"><?= date('M', strtotime($models->tanggal)) ?></span>
                </div>
                <div class="post-content">
                    <h2><?= $models->title ?></h2>

                    <div class="post-meta">
                        <span><i class="fas fa-user"></i> By <a href="#"><?= $models->author ?></a> </span>
                        <p><?= $models->short_description ?> . <a href=blog-<?= urlencode($models->title) ?> class="read-more">read more <i class="fas fa-angle-right"></i></a></p>
                    </div>                    
                </div>
            </article>
                <?php endforeach; ?>
            
        </div>
    </div>
</div>