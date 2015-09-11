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
    <?php foreach ($abouts as $about): ?>
    <div class="container about">
        <div class="row">

            <div class="col-md-8 left animated fadeUp disabled" data-animated="fadeUp">
                <h1><strong> <?= $about->title  ?> </strong></h1>
                <?php $images = $about->getImages() ?>
                <?php foreach ($images as $image): ?>
                <figure>
                    <figcamption>
                        <img src=" <?= $image->getUrl() ; ?> " alt=""/>

                        <p> <?= $about->text_ru ?></p>
                    </figcamption>
                </figure>
                <?php endforeach; ?>

            </div>
        <?php endforeach;?>


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
        </div>
    </div>

    <div class="team">
        <div class="container">
            <div class="row">

                <div class="col-md-12 box">
                    <h1>Наша команда</h1>

                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 text-center animated disabled" data-animated="fadeInUp">

                                <figure>
                                    <img src="/public/images/team_2.jpg" alt=""/>
                                    <figcaption>
                                        <h3>ГУСЕЙНОВ ЭТИБАР БАХЫШ ОГЛЫ</h3>

                                        <p>Управляющий партнер</p>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="col-md-6 text-center animated disabled" data-animated="fadeInUp">
                                <figure>
                                    <img src="/public/images/team_1.jpg" alt=""/>
                                    <figcaption>
                                        <h3>ГУСЕЙНОВА ЭМИЛИЯ ВЛАДИМИРОВНА</h3>

                                        <p>Управляющий партнер</p>
                                    </figcaption>
                                </figure>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Begin review-->
    <div class="review">
        <div class="container">
            <div class="tow">
                <h1><strong>Отзивы</strong> клиентов</h1>

                <div class="col-md-12">
                    <div class="row animated disabled" data-animated="fadeInDown">
                        <div class="comment col-md-4">
                            <p>Не все хотят принимать моторы от холодильников
                                из-за того, что они требуютдополнительного
                                разбора. Спасибо, что не отказали нам в помощи.
                                С уважением, представитель «Алмаза».</p>

                            <h3>ООО "АЛМАЗ"</h3>
                        </div>
                        <div class="comment col-md-4">
                            <p>Наша компания «ГеоМет» не первый год на рынке,
                                но постоянно пребывала в поисках
                                надёжных партнёров и выгодных цен.
                                Сотрудничество с ЭмилВторМет пока только началось,
                                посмотрим, как пойдёт дальше.</p>

                            <h3>ООО "ГЕОМЕТ"</h3>
                        </div>
                        <div class="comment col-md-4">
                            <p>Наш «ОРИСПРОМ» долго искал место для сбыта
                                небольшой партии электродвигателей.
                                Что ж, в ЭмилВторМет нас порадовали не
                                только выгодными условиями, но и вежливостью
                                работающих тут людей. Обратимся ещё раз,…</p>

                            <h3>ООО "ОРИСПРОМ"  </h3>
                        </div>
                        <div class="comment col-md-4">
                            <p>Хорошо, что ЭмилВторМет принимает электродвигатели,
                                ещё и самостоятельно их забирает.
                                Думаю, компания РусМетал обратится к вам
                                ещё раз. Уровень обслуживания неплохой. На одной
                                сделке мало что можно понять.</p>

                            <h3>ООО "РУСМЕТАЛ"</h3>
                        </div>
                        <div class="comment col-md-4">
                            <p>Нужно было в кратчайшие сроки отгрузить и
                                продать достаточно большую партию отработанного
                                кабеля.В «ЭмилВторМете» помогли решить большую
                                часть проблемы, за что выражаем глубокую благодарность.</p>

                            <h3>ООО "ТЕХНОЛОМ"</h3>
                        </div>
                        <div class="comment col-md-4">
                            <p>От лица компании «Экомет Плюс» хочется сказать большое
                                спасибо за оперативную работу. Наши объёмы для остальных
                                казались слишком маленькими для самовывоза, но в «ЭмилВторМете»
                                нам помогли на приятных условиях.</p>

                            <h3>ООО "ЭКОМЕТ ПЛЮС"</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End review-->
</main>
<!-- End main content-->
