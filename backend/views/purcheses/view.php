<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Purcheses */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Purcheses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="purcheses-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title_ua',
            'title_ru',
            'title_en',
            'description_ua:ntext',
            'description_ru:ntext',
            'description_en:ntext',
            'image',
        ],
    ]) ?>

</div>
