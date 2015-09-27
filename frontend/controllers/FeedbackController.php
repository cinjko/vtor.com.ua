<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Feedback;
use backend\models\LanguagesSearh;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\widgets\MailWidget;

/**
 * FeedbackController implements the CRUD actions for Feedback model.
 */
class FeedbackController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Feedback models.
     * @return mixed
     */
    public function actionIndex()
    {
        $model = new Feedback();

        return $this->render('index', [
            'model' => $model,
        ]);
    }

    /**
     * Creates a new Feedback model.
     * If creation is successful, the browser will be redirected to the 'success' page.
     * @return mixed
     */
    public function actionSend()
    {
        $model = new Feedback();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $text = $model->name;
            $text .= $model->email;
            $text .= $model->phone;
            $text .= $model->message;
            $text .= $model->date_time = date('Y-m-d h:m:s');

            $mail = MailWidget::widget(['email' => $model->email, 'text' => $text, 'subject' => 'Комментарий']);

            if (!$mail) {
                return false;
            }
            $model->save();

            return $this->render('success', [
                'model' => $model,
            ]);
        } else {
            return $this->render('index', [
                'model' => $model,
            ]);
        }
    }



    /**
     * Finds the Feedback model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Feedback the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Feedback::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
