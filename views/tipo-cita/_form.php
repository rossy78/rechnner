<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TipoCita */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tipo-cita-form">

    <?php
    $form = ActiveForm::begin([
                'options' => [
                    'id' => 'tipo-cita-form'
                ]
    ]);
    ?>

    <?= $form->field($model, 'tipo_cita')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
