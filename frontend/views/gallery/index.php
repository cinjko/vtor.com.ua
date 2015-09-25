<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 21.09.15
 * Time: 0:18
 */

use yii\widgets\LinkPager;

$this->registerCssFile('/public/css/gallery.css');
$this->title = 'Эмил ВторМет - Фотографии товара';
?>

<div class="container">
    <div class="row">
        <?php foreach ($images as $image):?>
            <?php $img = $image->getImages(); ?>
            <?php foreach ($img as $image): ?>
                <div class="photo col-md-4">
                    <img src="<?= $image->getUrl() ?>" alt=""/>
                </div>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </div>
    <?= LinkPager::widget(['pagination' => $pagination])  ?>
</div>