<?php

namespace frontend\controllers;

use frontend\models\Aboutus;

class TentangkamiController extends \yii\web\Controller
{
    public function actionManajemen()
    {
        return $this->render('jajaran');
    }

    public function actionProfile(){

        $model = Aboutus::find()
            ->where(['kategori'=>'profile'])
            ->One();
        return $this->render('profile',[
            'model'=>$model,
        ]);
    }

}
