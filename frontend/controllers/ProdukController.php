<?php

namespace frontend\controllers;

use frontend\models\Produk;

class ProdukController extends \yii\web\Controller
{
    public function actionIndex($kat, $name)
    {
        $name = urldecode($name);
        $kat = urldecode($kat);
        $model = Produk::find()
                ->joinWith('produkKategori')
                ->where(['idkategori'=>$kat])
                ->AndWhere(['title'=>$name])
                ->One();

        $related = Produk::find()
                ->joinWith('produkKategori')
                ->where(['idkategori'=> $kat])
                ->all();

        return $this->render('index',[
            'model'=> $model,
            'related' => $related
        ]);
    }

}
