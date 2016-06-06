<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Persona */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="persona-form">

    <?php
    $form = ActiveForm::begin([
                'options' => [
                    'id' => 'persona-form'
                ]
    ]);
    ?>

    <?= $form->field($model, 'cedula')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombres')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apellidos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sexo')->dropDownList(['1' => 'Masculino', '0' => 'Femenino'], [ 'prompt' => 'Seleccione Una Opcion' ]); ?>

    <?= $form->field($model, 'direccion')->textArea(['maxlength' => true]) ?>

    <?=
    $form->field($model, 'fecha_nacimiento')->widget(
            dosamigos\datepicker\DatePicker::className(), [
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'dd/mm/yyyy'
        ]
    ]);
    ?>

    <?= $form->field($model, 'email')->textInput(['type' => 'email', 'maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
