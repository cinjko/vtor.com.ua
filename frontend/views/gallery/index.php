<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 21.09.15
 * Time: 0:18
 */

$this->registerCssFile('/public/css/gallery.css');
?>

<div class="container">
    <div class="row">
        <?php foreach ($models as $model):?>
            <?php $images = $model->getImages(); ?>
            <?php foreach ($images as $image): ?>
                <div class="photo col-md-4">
                    <img src="<?= $image->getUrl() ?>" alt=""/>
                </div>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </div>
</div>