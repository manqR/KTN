<?php

namespace frontend\controllers;

class BlogController extends \yii\web\Controller
{
    public function actionDetail()
    {
        return $this->render('index');
    }

}
