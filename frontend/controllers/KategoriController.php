<?php

namespace frontend\controllers;

use frontend\models\Produk;


class KategoriController extends \yii\web\Controller
{
    public function actionIndex($name)
    {
        $name = urldecode($name);
        $model = Produk::find()
                ->joinWith('produkKategori')
                ->where(['name'=>$name])
                ->all();
        $count = Produk::find()
                ->joinWith('produkKategori')
                ->where(['name'=>$name])
                ->count();
        return $this->render('index',[
            'model'=>$model,
            'count'=>$count
        ]);
    }

}
