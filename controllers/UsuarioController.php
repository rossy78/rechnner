<?php

namespace app\controllers;

use Yii;
use app\models\Usuario;
use app\models\UsuarioSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UsuarioController implements the CRUD actions for Usuario model.
 */
class UsuarioController extends Controller
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
     * Lists all Usuario models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UsuarioSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Usuario model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->renderAjax('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Usuario model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Usuario();
        $persona = new \app\models\Persona();
        $telefonoPersona = new \app\models\TelefonoPersona();
        
        if($persona->load(Yii::$app->request->post()))
        {
            if( $persona->save() )
            {
                if ($model->load(Yii::$app->request->post()))
                {
                    $model->persona = $persona->cedula;
                    $model->password = md5($model->password);
                    $model->logged_in = 0;
                    if($model->save())
                    {
                        return $this->redirect(['index']);
                    }
                    else
                    {
                        $persona->delete();
                    }
                }
            }
        }
        return $this->renderAjax('create', [
            'model' => $model,
            'persona' => $persona,
            'telefonoPersona' => $telefonoPersona,
        ]);
    }

    /**
     * Updates an existing Usuario model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $persona = new \app\models\Persona();
        $telefonoPersona = new \app\models\TelefonoPersona();

        if($persona->load(Yii::$app->request->post()))
        {
            if( $persona->save() )
            {
                $oldPassword = $model->password;
                if ($model->load(Yii::$app->request->post()))
                {
                    $model->persona = $persona->cedula;
                    if( $model->password != $oldPassword)
                        $model->password = md5($model->password);
                    $model->logged_in = 0;
                    if($model->save())
                    {
                        return $this->redirect(['index']);
                    }
                    else
                    {
                        $persona->delete();
                    }
                }
            }
        }
        return $this->renderAjax('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Usuario model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Usuario model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Usuario the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Usuario::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
