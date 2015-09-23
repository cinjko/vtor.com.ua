<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 22.09.15
 * Time: 0:45
 */
namespace frontend\controllers;

use common\models\Feedback;

class FeedbackController extends \yii\web\Controller
{
    function actionIndex()
    {
        $models = Feedback::find()->all();

        return $this->render('index', ['models' => $models]);
    }
}