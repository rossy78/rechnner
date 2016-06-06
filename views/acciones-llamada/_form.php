<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AccionesLlamada */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="acciones-llamada-form">

    <?php
    $form = ActiveForm::begin([
        'options' => [
            'id' => 'acciones-llamada-form'
        ]
    ]);
    ?>

    <?= $form->field($model, 'accion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'estado')->textInput(['maxlength' => true]) ?>

    <?=
    $form->field($model, 'fecha')->widget(
            dosamigos\datepicker\DatePicker::className(), [
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'dd/mm/yyyy'
        ]
    ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
