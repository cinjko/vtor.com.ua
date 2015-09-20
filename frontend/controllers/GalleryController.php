<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 20.09.15
 * Time: 23:31
 */

namespace frontend\controllers;

use common\models\Gallery;

class GalleryController extends \yii\web\Controller
{
    function actionIndex()
    {
        $models = Gallery::find()->all();
        return $this->render('index', ['models'=>$models]);
    }
}