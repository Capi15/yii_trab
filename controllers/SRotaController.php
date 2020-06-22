<?php

namespace app\controllers;

use Yii;
use app\models\SRota;
use app\models\SRotaSearch;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SRotaController implements the CRUD actions for SRota model.
 */
class SRotaController extends Controller
{
    /**
     * {@inheritdoc}
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
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@']
                    ]
                ]
            ],
        ];
    }

    /**
     * Lists all SRota models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SRotaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SRota model.
     * @param integer $idServico
     * @param integer $idRota
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idServico, $idRota)
    {
        return $this->render('view', [
            'model' => $this->findModel($idServico, $idRota),
        ]);
    }

    /**
     * Creates a new SRota model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new SRota();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idServico' => $model->idServico, 'idRota' => $model->idRota]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SRota model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $idServico
     * @param integer $idRota
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idServico, $idRota)
    {
        $model = $this->findModel($idServico, $idRota);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idServico' => $model->idServico, 'idRota' => $model->idRota]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SRota model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $idServico
     * @param integer $idRota
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idServico, $idRota)
    {
        $this->findModel($idServico, $idRota)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SRota model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $idServico
     * @param integer $idRota
     * @return SRota the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idServico, $idRota)
    {
        if (($model = SRota::findOne(['idServico' => $idServico, 'idRota' => $idRota])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
