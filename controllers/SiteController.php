<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\PdfService;
use mPDF;


class SiteController extends Controller
{
	public function behaviors()
	{
		return [
			'access' => [
				'class' => AccessControl::className(),
				'only' => ['logout'],
				'rules' => [
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
//                    'logout' => ['post'],
				],
			],
		];
	}

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

	public function actionIndex()
	{
		return $this->redirect(["/llamada"]);
	}

	public function actionLogin()
	{
		if (!\Yii::$app->user->isGuest) {
			return $this->goHome();
		}

		$model = new LoginForm();
		if ($model->load(Yii::$app->request->post()) && $model->login()) {
			return $this->goBack();
		}
		return $this->render('login', [
			'model' => $model,
		]);
	}

	public function actionLogout()
	{
		Yii::$app->user->logout();

		return $this->goHome();
	}

	public function actionContact()
	{
		$model = new ContactForm();
		if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
			Yii::$app->session->setFlash('contactFormSubmitted');

			return $this->refresh();
		}
		return $this->render('contact', [
			'model' => $model,
		]);
	}

	public function actionAbout()
	{
		return $this->render('about');
	}

	public function actionCreate()
    {
        $model = new PdfService;
        $msg = "";
        //Si el formulario es enviado por method post
        if($model->load(Yii::$app->request->post()))
        {
        	$msg = "entro";
            //si pasa las validaciones
            if($model->validate())
            {
            	$msg = "paso la validacion";

            	
		//return $this->renderPartial('mpdf');
                /* Con la instancia de la table alumno, en el objeto
                queda guardaa todas las columnas que tenga la tabla */
                //$table = new pdf;
                /* Le asignamos a cada columna su valor 
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
                
                */
                /* Si insertamos los datos correctamente */
                if ($model->save())
                {
                    $msg = "Registro guardado correctamente";
                    /* Limpiamos los campos */
                    $mpdf=new mPDF();
				$html = "<table width='1094' border='0' align='center'>
	  					<tr>
	    				<td width='202' rowspan='5'><img src='imagenes/Logo_galac_informe.jpg' width='202' height='175' /></td>
	    				<td width='702' height='21'><h1>Oficina Rechner. ca</h1></td>";
				$html = $html . "<td width='176'>". $model->rif ."</td><h1> </tr>";

				$html = $html . "<tr>
	    					<td><strong>Alidado de Negocio Gàlac Software Altos Mirandinos y Valles del Tuy. </strong></td>
						    <td>INFORME Nº</td>
						  </tr>";

				$html = $html ."<tr>
	    					<td>Contacto: 0212-3643790/3640360/ oficinarechner@gmail.com/ rechner-gálac@hotmail.com</td>
	    					<td class='SERIAL'>AD-00000001</td>
	  						</tr> ";

	  			$html = $html ." <tr>
						    <td>Calle Paéz, paralela ala Avenida Bolivar a 50 mtrs de Ipostel. Los Teques - Edo Miranda</td>
						    <td>&nbsp;</td>
						  </tr>";

				$hmtl = $html . "<tr>
						    <td colspan='2'>Fecha:      
						      <label for='textfield6'></label>
						    <input name='textfield' type='text' id='textfield6' size='15' value='$model->fecha;'/>";

				$html = $html . " Hora Inicio:
						    <label for='textfield7'></label>
						    <input name='textfield2' type='text' id='textfield7' size='15' value='$model->hora_ini;'/>";

				$hmtl = $html . " Hora Final:
						    <label for='textfield8'></label>
						    <input name='textfield3' type='text' id='textfield8' size='15' value='$model->hora_final;'/></td>
						  </tr>";

				$mpdf->WriteHTML($html);
				$mpdf->Output('MyPDF.pdf', 'D');
            	
				exit;
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

	public function actionSamplePdf() {

		$mpdf = new mPDF;

		$mpdf->WriteHTML('Sample Text');

		$mpdf->Output();

		exit;

	}

	public function actionForceDownloadPdf(){

		$mpdf=new mPDF();

		$mpdf->WriteHTML($this->renderPartial('mpdf'));

		$mpdf->Output('MyPDF.pdf', 'D');

		exit;

	}

}
