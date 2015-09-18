<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PurchesesSearh */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Purcheses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="purcheses-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Purcheses', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title_ua',
            'title_ru',
            'title_en',
            'description_ua:ntext',
            // 'description_ru:ntext',
            // 'description_en:ntext',
            // 'image',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
