<?php

namespace backend\controllers;

use Yii;
use backend\models\Logo;
use backend\models\LogoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;


/**
 * LogoController implements the CRUD actions for Logo model.
 */
class LogoController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Logo models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new LogoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Logo model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Logo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Logo();

        if ($model->load(Yii::$app->request->post())){

            $uploadDir = Yii::getAlias('../../img');
            if(!is_dir($uploadDir."/logo/")) {
                mkdir($uploadDir."/logo/");
            }
                       
            $model->file_img = UploadedFile::getInstance($model,'file_img');
            $filename = md5(uniqid($model->file_img));

            $model->file_img->saveAs($uploadDir.'/logo/'.$filename.'.'.$model->file_img->extension);	
            $model->file_img= $filename. '.'.$model->file_img->extension;
            $model->save();            
            
            return $this->redirect(['view', 'id' => $model->idlogo]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Logo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())){

            $uploadDir = Yii::getAlias('../../img');
            if(!is_dir($uploadDir."/logo/")) {
                mkdir($uploadDir."/logo/");
            }
                       
            $model->file_img = UploadedFile::getInstance($model,'file_img');
            $filename = md5(uniqid($model->file_img));

            $model->file_img->saveAs($uploadDir.'/logo/'.$filename.'.'.$model->file_img->extension);	
            $model->file_img= $filename. '.'.$model->file_img->extension;
            $model->save();            

            return $this->redirect(['view', 'id' => $model->idlogo]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Logo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Logo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Logo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Logo::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
