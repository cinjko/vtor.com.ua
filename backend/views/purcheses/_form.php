<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Purcheses */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="purcheses-form">

    <?php $form = ActiveForm::begin([
        'options' => [
            'enctype' => 'multipart/form-data'
        ]
    ]); ?>

    <?= $form->field($model, 'title_ua')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description_ua')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'description_ru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'description_en')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'image')->fileInput(['maxlength' => true]) ?>

    <div class="form-group">
        <div class="col-md-offset-2 col-md-10">

            <?php $images = $model->getImages() ?>
            <div class="row">
                <?php foreach ($images as $image): ?>
                    <div class="col-md-3">
                        <img src="<?= $image->getUrl('200x') ?>" alt=""/>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
