<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

use frontend\models\Slider;
use frontend\models\Kontak;
use frontend\models\Aboutus;
use frontend\models\Layanan;
use frontend\models\Client;
use frontend\models\Blog;
use frontend\models\Produk;
use frontend\models\ProdukKategori;
/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {       
        // CALL
     

        $slider = Slider::find()
                ->all();
        
        $kontak = Kontak::find()
                ->One();      
        
        $about = Aboutus::find()
                ->where(['kategori'=>'profile'])
                ->One();
        $layanan = Layanan::find()
                ->where(['status'=>1])
                ->all();     
        
        $client = Client::find()
                ->all();
                
        $blog = Blog::find()
                ->all();
        
        $produk =  Produk::find()
                ->all();


        return $this->render('index',[            
            'slider' => $slider,
            'kontak' => $kontak,
            'about' => $about,
            'layanan' => $layanan,
            'client' => $client,
            'blog' => $blog,
            'produk' => $produk
        ]);
    }


    
}
