<?php

namespace frontend\controllers;
use frontend\models\Kontak;


class HubungikamiController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = Kontak::find()
                ->One();
        return $this->render('index',[
            'model'=>$model,
        ]);
    }

}
