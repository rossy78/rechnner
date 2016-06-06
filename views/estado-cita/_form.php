<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EstadoCita */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="estado-cita-form">

    <?php $form = ActiveForm::begin([
                'options' => [
                    'id' => 'estado-cita-form'
                ]
    ]); ?>

    <?= $form->field($model, 'estado_cita')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
