<?php
namespace frontend\controllers;

use common\models\About;

class AboutController extends \yii\web\Controller
{
    function actionIndex()
    {
        $models = About::find()->all();
        return $this->render('index', ['models' => $models]);
    }

    function actionShow($id)
    {

    }
}

?>