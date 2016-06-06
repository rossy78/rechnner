<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TipoSolicitud */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tipo-solicitud-form">

    <?php
    $form = ActiveForm::begin([
                'options' => [
                    'id' => 'tipo-solicitud-form'
                ]
    ]);
    ?>

    <?= $form->field($model, 'tipo_solicitud')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
