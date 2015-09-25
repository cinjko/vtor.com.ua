<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 19.09.15
 * Time: 0:18
 */

/* @var $this yii\web\View */

$this->registerCssFile('/public/css/common.css');
$this->title = 'Эмил ВторМет - Что мы покупаем!';
?>
<?php foreach ($models as $model): ?>
<div class="container-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12 products">
                <h2><?= $model->title_ru ?></h2>
                <figure class="products-description">
                    <figcaption>
                        <?php $images = $model->getImages() ?>
                            <?php foreach ($images as $image): ?>
                                    <img src="<?= $image->getUrl() ?>" alt=""/>
                            <?php endforeach; ?>

                        <?= $model->description_ru ?>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>