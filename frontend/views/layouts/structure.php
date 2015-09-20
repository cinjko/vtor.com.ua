<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\VarDumper;
use yii\helpers\Url;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>

<!DOCTYPE html>
    <html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <!--    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>-->
    <!--    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
    <!--    <style type="text/css">.fancybox-margin{margin-right:17px;}</style>-->
</head>

<?php $this->beginBody() ?>

    <!-- Begin top contacts info -->
    <div class="top-box">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <a class="logo" href="<?= Url::to(['site/index']) ?>"><span>Эмил</span>ВторМет!</a>
                </div>
                <div class="col-md-5 col-sm-12">
                    <h4>Закупка б/у электродвигателей, <br/> кабеля, а также лома черных <br/> ицветных металов</h4>
                </div>
                <div class=" contacts col-md-4 col-sm-12">
                    <h4>Свяжитесь с нами</h4>
                    <strong>8-985-294-47-07 <br/> 8-926-282-83-41 <br/> pismo@vtormet99.ru</strong>
                </div>
            </div>
        </div>
    </div>
    <!-- End top contacts info -->

    <!-- Begin top menu -->
    <header>
        <div class="container">
            <nav class="navbar">
                <div class="container-fluid">

                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div id="navbar-collapse" class="collapse navbar-collapse ">
                        <ul class="nav navbar-nav">
                            <li><?= Html::a('Главная', ['site/index']) ?><span></span></a></li>
                            <li><?= Html::a('Что мы покупаем?', ['purcheses/index']) ?><span></span></a></li>
                            <li><?= Html::a('Фотографии товара', ['gallery/index']) ?><span></span></a></li>
                            <li><a href="pages/contact.php">Контакты<span></span></a></li>
                        </ul>

                    </div>

                </div>
            </nav>
        </div>
    </header>
    <!-- End top menu -->

    <?= $content; ?>

    <footer>
        <div class="footer container">
            <div class="row">
                <div class="col-md-6">
                    <h1>КОНТАКТЫ</h1>
                    <dl class="dl-horizontal">
                        <dt>Телефоны</dt>
                        <dd>8-985-294-47-07 <br/> 8-926-282-83-41</dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt>Email</dt>
                        <dd>pismo@vtormet99.ru</dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt>Адрес</dt>
                        <dd>РФ, г.Москва, Берюлово-Западное, ул. Никопольская, дом 6</dd>
                    </dl>
                </div>

                <div class="col-md-6">
                    <div class="map">

                        <input type="hidden" value="г.Москва, Берюлово-Западное, ул. Никопольская, дом 6" class="address" data-zoom="14" />

                        <div id="map-canvas"></div>

                    </div>
                </div>
            </div>
        </div>

        <div class="copyright">
            <div class="container">
                <div class="row">

                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <p><a href="#">"ЭмилВторМет"</a> - закупка цветных и черных металлов в Москве и области</p>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <a href="#"  target="_blank" class="div"><img src="/public/images/logo.png" alt="акула"/>Разработка сайта: "Акула"</a>
                    </div>

                </div>
            </div>
        </div>
    </footer>

    <div id="toTop" class="show__btn-hidden btn-hidden"></div>
    <!--Google.maps.api-->
<?php $this->endBody() ?>
</html>
<?php $this->endPage() ?>

