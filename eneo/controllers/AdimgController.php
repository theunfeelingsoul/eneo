<?php

namespace app\controllers;

use Yii;
use app\models\Adimg;
use app\models\Eneobizinfo;
use app\models\AdimgSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
/**
 * AdimgController implements the CRUD actions for Adimg model.
 */
class AdimgController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Adimg models.
     * @return mixed
     */
    public function actionIndex()
    {
        $this->layout = "adminlayout";
        
        $searchModel = new AdimgSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Adimg model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $this->layout = "adminlayout";
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Adimg model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $this->layout = "adminlayout";
        $model = new Adimg();

        if ($model->load(Yii::$app->request->post())) {

            // check of there is any image
            $i=$model->imageFile = UploadedFile::getInstance($model, 'url');
            if ($i) {
                // upload
                $img_name = mt_rand();
                $model->upload($img_name);
                // set the image path
                // $model->img_path = $img_name;
                $model->url = $img_name.'.'.$model->imageFile->extension;
            }

            if ($model->save()) {
                // return $this->redirect(['view', 'id' => $model->id]);
                 return $this->redirect(['view', 'id' => $model->id]);
                // return $this->redirect(['eneo/index']);
            }else{
                // echo "not saved";
                // // return $model->getErrors();
                // echo "<pre>";
                // print_r($model->getErrors());
                // echo "</pre>";

                return $this->render('create', [
                    'model' => $model,
                ]);
            }
           
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Adimg model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $this->layout = "adminlayout";
        $model = $this->findModel($id);

        // add the scenario
        // i.e img_path is not required in update
        $model->scenario = 'update';

        if ($model->load(Yii::$app->request->post())) {

            // check of there is any image
            $i=$model->imageFile = UploadedFile::getInstance($model, 'url');
            if ($i) {
                // get a random number as the image name
                $img_name = mt_rand();
                // save it to the variable 
                $model->url = $img_name.'.'.$model->imageFile->extension;
                // upload
                $model->upload($img_name);
                // set the image path
                $model->url = $img_name.'.'.$model->imageFile->extension;
            }


            // save set to false...still dont knw why, but works like this.
            if ($model->save()) {
               return $this->redirect(['view', 'id' => $model->id]);
            }else{
                 return $this->render('update', [
                    'model' => $model,
                ]);
            }

        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }


    public function actionAlbum($biz_id){

        $this->layout = "eneolayout";

        // find business details by ID
        $biz = Eneobizinfo::find()
        ->where(['id' => $biz_id])
        ->one();

        // get the photos related to the business
        $album = Adimg::find()
        ->where(['biz_id' => $biz_id])
        ->all();

        return $this->render('album', [
            'biz' => $biz,
            'album' => $album
        ]);
    }


    public function actionPhoto($photo_id,$biz_id)
    {

            $this->layout = "eneolayout";
          // find business details by ID
        $biz = Eneobizinfo::find()
        ->where(['id' => $biz_id])
        ->one();


         // get the single photo
        $photo = Adimg::find()
        ->where(['id' => $photo_id])
        ->one();

        return $this->render('photo', [
            'photo' => $photo,
            'biz' => $biz,
        ]);

    }

    /**
     * Deletes an existing Adimg model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Adimg model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Adimg the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Adimg::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
