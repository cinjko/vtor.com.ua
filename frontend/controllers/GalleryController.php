<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 20.09.15
 * Time: 23:31
 */

namespace frontend\controllers;

use common\models\Gallery;
use yii\data\Pagination;

class GalleryController extends \yii\web\Controller
{
    function actionIndex()
    {
        $query = Gallery::find();

        $pagination = new Pagination([
            'defaultPageSize' => 9,
            'totalCount' => $query->count(),
        ]);

        $images = $query->orderBy('id')
                        ->offset($pagination->offset)
                        ->limit($pagination->limit)
                        ->all();


        return $this->render('index', [
            'images'     => $images,
            'pagination' => $pagination,
        ]);
    }
}