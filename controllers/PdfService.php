<?php

namespace app\controllers;

use Yii;
use app\models\PdfService;
use app\models\PdfSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use mPDF;


/**
 * LlamadaController implements the CRUD actions for Llamada model.
 */
class PdfServiceController extends Controller
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

    public function actionIndex()
    {
        //return $this->render('create');

        $mpdf=new mPDF();

        $rif = "RIF-J-29307356-6";

        $pdfecho = "<h1>" . $rif . "</h1>";

        $mpdf->WriteHTML($pdfecho);

        $mpdf->WriteHTML($rif);


        $mpdf->Output();

        exit;

        //return $this->renderPartial('mpdf');
    }



    public function actionCreate()
    {
        $model = new PdfService;
        $msg = "no jodaa";
        //Si el formulario es enviado por method post
        if($model->load(Yii::$app->request->post()))
        {
            //si pasa las validaciones
            if($model->validate())
            {
                /* Con la instancia de la table alumno, en el objeto
                queda guardaa todas las columnas que tenga la tabla */
                $table = new PdfService;
                /* Le asignamos a cada columna su valor */
                $table->rif = $model->rif;
                $table->fecha = $model->fecha;
                $table->atencion = $model->atencion;
                $table->servicio = $model->servicio;
                $table->programa = $model->programa;
                $table->base_dato = $model->base_dato;
                $table->licencia = $model->licencia;
                $table->nom_servidor = $model->nom_servidor;
                $table->nom_master = $model->nom_master;
                $table->estaciones = $model->estaciones;
                $table->sistem_operativo = $model->sistem_operativo;
                $table->tipo_red = $model->tipo_red;
                $table->instancias_activas = $model->instancias_activas;
                $table->resultados = $model->resultados;
                $table->servicios_adicionales = $model->servicios_adicionales;
                $table->nom_tecnico = $model->nom_tecnico;
                $table->nom_contac_atencion = $model->nom_contac_atencion;
                
                /* Si insertamos los datos correctamente */
                if ($table->insert())
                {
                    $msg = "Registro guardado correctamente";
                    /* Limpiamos los campos */
                    $model->rif = null;
                    $model->fecha = null;
                    $model->atencion = null;
                    $model->servicio = null;
                }
                else 
                {
                    $msg = "En estos no se puede registrar al alumno, intentelo mas tarde";
                }
            }
            else
            {
                $model->getErrors();
            }
        }
        return $this->render("create", ['model' => $model, 'msg' => $msg]);
    }