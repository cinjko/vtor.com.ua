<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 19.09.15
 * Time: 0:15
 */

namespace frontend\controllers;

use common\models\Purcheses;

class PurchesesController extends \yii\web\Controller
{
    function actionIndex()
    {
        $models = Purcheses::find()->all();
        return $this->render('index', ['models' => $models]);
    }

    function actionShow($id)
    {

    }
}

?>