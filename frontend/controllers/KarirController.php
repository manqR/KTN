<?php

namespace frontend\controllers;

use frontend\models\Karir;

class KarirController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = Karir::find()
                ->all();

        return $this->render('index',[
            'model'=>$model
        ]);
    }

}
