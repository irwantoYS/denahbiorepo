<?php

namespace backend\controllers;

use common\models\Datapengunjung;
use common\models\DatapengunjungSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DatapengunjungController implements the CRUD actions for Datapengunjung model.
 */
class DatapengunjungController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Datapengunjung models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new DatapengunjungSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Datapengunjung model.
     * @param int $id_pengunjung Id Pengunjung
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_pengunjung)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_pengunjung),
        ]);
    }

    /**
     * Creates a new Datapengunjung model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Datapengunjung();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_pengunjung' => $model->id_pengunjung]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Datapengunjung model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_pengunjung Id Pengunjung
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_pengunjung)
    {
        $model = $this->findModel($id_pengunjung);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_pengunjung' => $model->id_pengunjung]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Datapengunjung model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_pengunjung Id Pengunjung
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_pengunjung)
    {
        $this->findModel($id_pengunjung)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Datapengunjung model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_pengunjung Id Pengunjung
     * @return Datapengunjung the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_pengunjung)
    {
        if (($model = Datapengunjung::findOne(['id_pengunjung' => $id_pengunjung])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
