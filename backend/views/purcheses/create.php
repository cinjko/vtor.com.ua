<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Purcheses */

$this->title = 'Create Purcheses';
$this->params['breadcrumbs'][] = ['label' => 'Purcheses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="purcheses-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
