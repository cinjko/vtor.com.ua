<?php

/* @var $this yii\web\View */
/* @var $model frontend\models\Feedback*/
/* @var $form ActiveForm */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->registerCssFile('/public/css/common.css');
$this->title = 'Эмил ВторМет - Контакт';
?>
<?php Yii::$app->session; ?>
<!--Begin form-->
<section class="form">
    <div class="container">
        <div class="row">
            <div class="col-md-12 feedback-form">
                <h1><strong>Напешите</strong> нам</h1>
                <h3 class="error"><?php if (isset($_SESSION['error'])) { echo $_SESSION['error']; } ?></h3>

                <?php $form = ActiveForm::begin([
                    'options' => [
                        'class'   => 'row post-form',
                        'name'    => 'send-form'
                    ],
                    'action'  => ['feedback/send'],
                ]); ?>

                    <div class="form-group col-md-4">
                        <?= $form->field($model, 'name', [
                            'inputOptions' => [
                                'placeholder' => 'Имя:'
                            ]
                        ]) ?>
                    </div>

                    <div class="form-group col-md-4">
                        <?= $form->field($model, 'email', [
                            'inputOptions' => [
                                'placeholder' => 'Email:'
                            ]
                        ]) ?>
                    </div>

                    <div class="form-group col-md-4">
                        <?= $form->field($model, 'phone', [
                            'inputOptions' => [
                                'placeholder' => 'Телефон: 0xxxxxxxxx'
                            ]
                        ]) ?>
                    </div>

                    <div class="form-group col-md-12">
                        <?= $form->field($model, 'massage', [
                            'inputOptions' => [
                                'placeholder' => 'Соопщение:'
                            ]
                        ])->textarea() ?>
                    </div>

                    <div class="form-group col-md-12">
                        <?= Html::submitButton('Отправить', [
                            'class' => 'btn btn-default',
                            'name'  => 'submit',
                            'type'  => 'submit'
                        ]) ?>
<!--                        <button type="submit" class="btn btn-default" name="submit">Отправить</button>-->
                    </div>
            </div>
        </div>
    </div>
</section>
<?php $form = ActiveForm::end(); ?>
<!--End form-->
