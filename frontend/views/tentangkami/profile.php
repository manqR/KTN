<?php
/* @var $this yii\web\View */

    $this->title = "Tentang Kami";
    $this->params['breadcrumbs'][] = $this->title;

    $this->registerCss(".title{text-align:center;}")
?>
<div class="container">

    <div class="row">
        <div class="col">
            <h2 class="word-rotator-title">
                The New Way to <strong>
                    <span class="word-rotator" data-plugin-options="{'delay': 2000}">
                        <span class="word-rotator-items">
                            <span>success.</span>
                            <span>advance.</span>
                            <span>progress.</span>
                        </span>
                    </span>
                </strong>
            </h2>
        </div>
    </div>

    <div class="row align-items-center">
        <div class="col-lg-10">
            <p class="lead">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla non <span class="alternative-font">metus.</span> pulvinar. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut eu risus enim, ut pulvinar lectus. Sed hendrerit nibh.
            </p>
        </div>
        <div class="col-lg-2">
            <a href="karir" class="btn btn-lg btn-primary">Join Our Team!</a>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <hr class="tall">
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-lg-7 col-xl-8">
            <h3 class="heading-primary title"><strong>Tentang</strong> Kami</h3>
            <?= $model->full_description ?>
        </div> 

        <div class="col-lg-5 col-xl-4">
            <div class="featured-box featured-box-primary">
                <div class="box-content">
                    <h4 class="text-uppercase">Team</h4>
                    <ul class="thumbnail-gallery mb-4 pb-3" data-plugin-lightbox data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">
                        <?php
                        
                            foreach($jajaran as $jajarans):
                        ?>
                        <li>
                            <a title="<?= $jajarans->nama ?>" href="img/jajaran/<?= $jajarans->img ?>">
                                <span class="thumbnail mb-0">
                                    <img src="img/jajaran/<?= $jajarans->img ?>" alt="<?= $jajarans->nama ?>" style="width: 5vw;">
                                </span>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>


        </div>
    </div>   
</div>