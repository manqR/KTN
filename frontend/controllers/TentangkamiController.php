<?php

namespace frontend\controllers;

use frontend\models\Aboutus;
use frontend\models\Jajaran;


class TentangkamiController extends \yii\web\Controller
{
    public function actionManajemen()
    {
        $model = Jajaran::find()
                ->all();
        
        return $this->render('jajaran',[
            'model'=>$model
        ]);
    }

    public function actionProfile(){

        $model = Aboutus::find()            
                    ->One();
        $jajaran = Jajaran::find()
                    ->All();

        return $this->render('profile',[
            'model'=>$model,
            'jajaran'=> $jajaran
        ]);
    }

}
