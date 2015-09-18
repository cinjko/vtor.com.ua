<?php

/* @var $this yii\web\View */

$this->title = 'Эмил ВторМет - Главная страница';
?>

<?php $this->registerCssFile('@web/public/css/animate.css') ?>
<!-- Begin main content-->
<main>
    <!-- Begin images slider-->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="/public/images/picture1(2).jpg" alt="Струкжка">
            </div>

            <div class="item">
                <img src="/public/images/picture2.jpg" alt="Дріт">
            </div>

            <div class="item">
                <img src="/public/images/picture3.jpg" alt="Стружка2">
            </div>
        </div>
        <!-- End for slides -->
    </div>

    <!-- End images slider-->
    <div class="container about">
        <div class="row">

        <!-- Begin about us-->
        <?php foreach ($abouts as $about): ?>
            <div class="col-md-8 left animated fadeUp disabled" data-animated="fadeUp">
                <h1><strong> <?= $about->title  ?> </strong></h1>
                <?php $images = $about->getImages() ?>
                <?php foreach ($images as $image): ?>
                <figure>
                    <?php if ($image->getUrl() !== "/yii2images/images/image-by-item-and-alias?item=&dirtyAlias=placeHolder.png"): ?>
                        <figcamption>
                            <img src=" <?= $image->getUrl() ; ?> " alt=""/>

                            <p> <?= $about->text_ru ?></p>
                        </figcamption>
                    <?php endif; ?>
                </figure>
                <?php endforeach; ?>
            </div>
        <?php endforeach;?>
        <!-- End about us-->

        <!-- Begin advantage-->
            <div class="col-md-4 right animated disabled" data-animated="fadeUp">
                <h1><strong>Наши</strong> преимущесва</h1>
                <ol>
                    <?php foreach ($benefits as $benefit) : ?>
                    <li>
                        <h3><?= $benefit->title ?></h3>

                        <p><?= $benefit->text ?></p>
                        <span><?= $benefit->title_number ?></span>
                    </li>
                    <?php endforeach; ?>
                </ol>
            </div>
        <!-- End advantage-->

        </div>
    </div>

    <!-- Begin team container-->
    <div class="team">
        <div class="container">
            <div class="row">
                <div class="col-md-12 box">
                    <h1>Наша команда</h1>
                    <div class="container">
                        <div class="row">
                            <?php foreach ($teams as $team): ?>
                            <div class="col-md-6 text-center animated disabled" data-animated="fadeInUp">
                                <figure>
                                    <?php $images_team = $team->getImages(); ?>
                                    <?php foreach ($images_team as $image_team) : ?>
                                    <img src="<?= $image_team->getUrl() ; ?>" alt=""/>
                                    <?php endforeach; ?>
                                    <figcaption>
                                        <h3><?= $team->full_name ?></h3>

                                        <p><?= $team->position ?></p>
                                    </figcaption>
                                </figure>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End team container-->

    <!-- Begin comments-->
    <div class="review">
        <div class="container">
            <div class="tow">
                <h1><strong>Отзивы</strong> клиентов</h1>
                <div class="col-md-12">
                    <div class="row animated disabled" data-animated="fadeInDown">
                        <?php foreach ( $comments as $comment ): ?>
                            <div class="comment col-md-4">
                                <p><?= $comment->comments ?></p>
                                <h3><?= $comment->title ?></h3>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End comments-->
</main>
<!-- End main content-->
