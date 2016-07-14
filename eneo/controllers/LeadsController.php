<?php

namespace app\controllers;

use Yii;
use app\models\Leads;
use app\models\LeadsSearch;
use app\models\Sortableleads;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * LeadsController implements the CRUD actions for Leads model.
 */
class LeadsController extends Controller
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
     * Lists all Leads models.
     * @return mixed
     */
    public function actionIndex()
    {
         $this->layout = "adminlayout";
        $searchModel = new LeadsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Leads model.
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
     * Displays the current leads and their positions
     */
    public function actionTrackleads()
    {
        $this->layout = "adminlayout";

        $model = new Leads();

            // find all the leads
        $leads = Leads::find()
        ->all();

        // find last entry
        $sorted_leads = Sortableleads::find()
        ->orderBy(['id' => SORT_DESC, ])
        ->limit(1)
        ->one();

        return $this->render('track', [
            'leads' => $leads,
            'sorted_leads' => $sorted_leads,
        ]);
    }

    /**
     * Gets the ajax data and saves the positon of the tracked lead
     * @param integer $id
     */
    public function actionSort()
    {

        $sortable = new Sortableleads();
        $sortable->col1 = trim($_POST['1'],",");
        $sortable->col2 = trim($_POST['2'],",");
        $sortable->col3 = trim($_POST['3'],",");
        $sortable->col4 = trim($_POST['4'],",");
        $sortable->col5 = trim($_POST['5'],",");
        $sortable->save();
    }

    /**
     * Creates a new Leads model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $this->layout = "adminlayout";

        $model = new Leads();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            // get the last sortpositions
            $sorted_leads = Sortableleads::find()
            ->orderBy(['id' => SORT_DESC, ])
            ->limit(1)
            ->one();
            // update the firts column
            $new_sort = $sorted_leads['col1'].",".$model->id;
            $sorted_leads->col1 = $new_sort;
            // save the update
            $sorted_leads->save();

            return $this->redirect(['view', 'id' => $model->id]);

        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Leads model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {

         $this->layout = "adminlayout";
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Leads model.
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
     * Finds the Leads model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Leads the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Leads::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
