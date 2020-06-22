<?php

namespace app\controllers;

use Yii;
use app\models\SContentor;
use app\models\SContentorSearch;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SContentorController implements the CRUD actions for SContentor model.
 */
class SContentorController extends Controller
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
     * Lists all SContentor models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SContentorSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SContentor model.
     * @param integer $idServico
     * @param integer $idContentor
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idServico, $idContentor)
    {
        return $this->render('view', [
            'model' => $this->findModel($idServico, $idContentor),
        ]);
    }

    /**
     * Creates a new SContentor model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new SContentor();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idServico' => $model->idServico, 'idContentor' => $model->idContentor]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SContentor model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $idServico
     * @param integer $idContentor
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idServico, $idContentor)
    {
        $model = $this->findModel($idServico, $idContentor);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idServico' => $model->idServico, 'idContentor' => $model->idContentor]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SContentor model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $idServico
     * @param integer $idContentor
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idServico, $idContentor)
    {
        $this->findModel($idServico, $idContentor)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SContentor model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $idServico
     * @param integer $idContentor
     * @return SContentor the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idServico, $idContentor)
    {
        if (($model = SContentor::findOne(['idServico' => $idServico, 'idContentor' => $idContentor])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
