<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cita */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cita-form">

    <?php
    $form = ActiveForm::begin([
                'options' => [
                    'id' => 'cita-form'
                ]
    ]);
    ?>

    <?= $form->field($model, 'llamada')->dropDownList(yii\helpers\ArrayHelper::map(\app\models\Llamada::find()->all(), "id_llamada", function($data){
            return yii\bootstrap\Html::encode("Cliente: ".($data->cliente0 != null ? $data->cliente0->razon_social : "")." - Fecha: ".$data->fecha." - Operador: ".($data->operador0 != null ? $data->operador0->login : "") );
        }
    )) ?>

    <?=
    $form->field($model, 'fecha')->widget(
            dosamigos\datepicker\DatePicker::className(), [
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
    ]);
    ?>

    <?= $form->field($model, 'estado')->dropDownList(yii\helpers\ArrayHelper::map(\app\models\EstadoCita::find()->all(), "estado_cita", "estado_cita")) ?>
    
    <?= $form->field($model, 'tipo_cita')->dropDownList(yii\helpers\ArrayHelper::map(\app\models\TipoCita::find()->all(), "tipo_cita", "tipo_cita")) ?>
    
    <?= $form->field($model, 'asignado_a')->dropDownList(yii\helpers\ArrayHelper::map(\app\models\Usuario::find()->all(), "persona", "login")) ?>
    
    <?= $form->field($model, 'tipo_servicio')->dropDownList(yii\helpers\ArrayHelper::map(\app\models\TipoServicios::find()->all(), "tipo_servicio", "tipo_servicio")) ?>

    <?= $form->field($model, 'servicios_adicionales')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
