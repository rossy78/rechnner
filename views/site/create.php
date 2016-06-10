<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
?>

<h1> Informe Tecnico </h1>
<h3> <?= $msg ?> </h3>


<?php $form = ActiveForm::begin([
	"method" => "post"
	]);
?>

<div class="col-xs-12 col-sm6">

	<h1> Oficina Rechner </h1>

	<div class="form-group col-xs-12 col-sm-4">
	 
	 <?= $form->field($model, "fecha")->input("text") ?>  

	</div>

	<div class="form-group col-xs-12 col-sm-4">
	 
	 <?= $form->field($model, "hora_ini")->input("text") ?>  

	</div>

	<div class="form-group col-xs-12 col-sm-4">
	 
	 <?= $form->field($model, "hora_final")->input("text") ?>  

	</div>


</div>

<div class="col-xs-12 col-sm6">

	<h1> Descripcion del Cliente </h1>
	
	<div>

		<div class="form-group col-xs-12 col-sm-8">

		<?= $form->field($model, "razon")->input("text") ?>

		</div>

		<div class="form-group col-xs-12 col-sm-4">

		<?= $form->field($model, "rif")->input("text") ?>

		</div>

	</div>

	<div> 

		<div class="form-group col-xs-12 col-sm-4">

      		<?= $form->field($model, 'atencion')->dropDownList(['Remota' => 'Remota', 'Presencial' => 'Presencial']) ?>

		</div>

		<div class="form-group col-xs-12 col-sm-4">

      		<?= $form->field($model, 'servicio')->dropDownList([
      			'Remota' => 'Remota', 
      			'Presencial' => 'Presencial']) 
      		?>

		</div>
	 
		<div class="form-group col-xs-12 col-sm-4">
			 
			<?= $form->field($model, 'programa')->dropDownList([
      			'Remota' => 'Remota', 
      			'Presencial' => 'Presencial']) 
      		?>

		</div>

	</div>

	<div>
		
		<div class="form-group col-xs-12 col-sm-3">
	
			<?= $form->field($model, 'base_dato')->dropDownList([
      			'MS-DOS' => 'MS-DOS', 
      			'SQL EXPRESS 2005' => 'SQL EXPRESS 2005',
      			'SQL EXPRESS 2008' => 'SQL EXPRESS 2008',
      			'SQL STANDAR 2008' => 'SQL STANDAR 2008',
      			'SQL EXPRESS 2012' => 'SQL EXPRESS 2012',
      			]) 
      		?>

		</div>


		<div class="form-group col-xs-12 col-sm-3">

			<?= $form->field($model, 'licencia')->dropDownList([
      			'Monousuario' => 'Monousuario', 
      			'Multiusuario' => 'Multiusuario']) 
      		?>

		</div>

		<div class="form-group col-xs-12 col-sm-3">
			 
			 <?= $form->field($model, "contacto")->input("text") ?>  

		</div>

		<div class="form-group col-xs-12 col-sm-3">
			 
			 <?= $form->field($model, "email")->input("email") ?>  

		</div>


	</div>

	<div>
		
		<h1> Descripcion del Servicio </h1>

		<div class="form-group col-xs-12 col-sm-12">
			 
			 <?= $form->field($model, "nom_servidor")->input("text") ?>  

		</div>

		<div class="form-group col-xs-12 col-sm-12">
			 
			 <?= $form->field($model, "nom_master")->input("text") ?>  

		</div>

		<div class="form-group col-xs-12 col-sm-12">
			
			<?= $form->field($model, 'estaciones')->dropDownList([
      			'1' => '1', 
      			'2' => '2',
      			'3' => '3',
      			'4' => '4',
      			'5' => '5',
      			'6' => '6',
      			'7' => '7',
      			'8' => '8',
      			'9' => '9',
      			'10' => '10',
      			'Mas de 10' => 'Mas de 10']) 
      		?>

		</div>

		<div class="form-group col-xs-12 col-sm-12">
			
			<?= $form->field($model, 'sistem_operativo')->radioList(array(
				'Windows XP' => 'Windows XP', 
				'Windows 7' => 'Windows 7',
				'Windows 8' => 'Windows 8')); 
			?>

		</div>

		<div class="form-group col-xs-12 col-sm-12">
			
			<?= $form->field($model, 'tipo_red')->radioList(array(
				'Local' => 'Local', 
				 'Grupo de Trabajo' => 'Grupo de Trabajo',
				 'VPN' => 'VPN',
				 'Otros' => 'Otros')); 
			?>

		</div>

		<div class="form-group col-xs-12 col-sm-12">
			
			<?= $form->field($model, 'instancias_activas')->radioList(array(
				'Galacsqlx08' => 'Galacsqlx08', 
				'Galacsqlx12' => 'Galacsqlx12',
				'VPN' => 'VPN',
				'Otras del cliente ' => 'Otras del cliente')); 
			?>

		</div>

	</div>

	<div>
	
		<h1> RESULTADOS / PROCESOS REALIZADOS </h1>	

		<div class="form-group col-xs-12 col-sm-12">

			<?= $form->field($model, 'resultados')->textarea(array('rows'=>10,'cols'=>5)); ?>
	 
		</div>


	</div>

	<div>

		<h1> SERVICIOS ADICIONALES </h1>	
		
		<div class="form-group col-xs-12 col-sm-12">

			<?= $form->field($model, 'servicios_adicionales')->textarea(array('rows'=>10,'cols'=>5)); ?>

		</div>

	</div>


	<div>
		
		<h1> CONFORMIDAD DEL CLIENTE </h1>	

		<div class="form-group col-xs-12 col-sm-6">
	 
	 		<?= $form->field($model, "nom_tecnico")->input("text") ?>  

		</div>

		<div class="form-group col-xs-12 col-sm-6">
	 
	 		<?= $form->field($model, "nom_contac_atencion")->input("text") ?>  

		</div>


	</div>



<?= Html::submitButton("Crear", ["class" => "btn btn-primary"]) ?>
	 
<?php $form->end() ?>