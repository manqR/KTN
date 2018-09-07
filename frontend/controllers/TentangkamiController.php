<?php

namespace frontend\controllers;

class TentangkamiController extends \yii\web\Controller
{
    public function actionManajemen()
    {
        return $this->render('jajaran');
    }

    public function actionProfile(){
        return $this->render('profile');
    }

}
