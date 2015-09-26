<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 22.09.15
 * Time: 0:45
 */
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Feedback;

class FeedbackController extends Controller
{
    function actionIndex()
    {
        $model = new Feedback();
        return $this->render('index', ['model' => $model]);
    }

    public function actionSend()
    {
        $model = new Feedback();

        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])){
            $model->data_time = date('Y-m-d H:m:s');
//            $model->save();
            return $this->render('success', [
                'model' => $model
            ]);
        } else {
            return $this->render('index', [
                'model' =>$model
            ]);
        }
    }
}