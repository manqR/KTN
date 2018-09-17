<?php

namespace frontend\controllers;

use frontend\models\Blog;


class BlogController extends \yii\web\Controller
{
    public function actionDetail($name)
    {
        $name = urldecode($name);

        $model = Blog::find()
                ->where(['title'=>$name])
                ->One();
        return $this->render('detail',[
            'model'=>$model
        ]);
    }

    public function actionIndex(){
        $model = Blog::find()
                ->all();

        return $this->render('index',[
            'model'=>$model
        ]);
    }

}
