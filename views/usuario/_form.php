<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Usuario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuario-form">

    <?php
    $form = ActiveForm::begin([
        'options' => [
            'id' => 'usuario-form'
        ]
    ]);
    ?>

    <?= $form->field($persona, 'cedula')->textInput(['maxlength' => true]) ?>

    <?= $form->field($persona, 'nombres')->textInput(['maxlength' => true]) ?>

    <?= $form->field($persona, 'apellidos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($persona, 'sexo')->dropDownList(['1' => 'Masculino', '0' => 'Femenino'], [ 'prompt' => 'Seleccione Una Opcion' ]); ?>

    <?= $form->field($persona, 'direccion')->textArea(['maxlength' => true]) ?>
    
    <?=
    $form->field($persona, 'fecha_nacimiento')->widget(
            dosamigos\datepicker\DatePicker::className(), [
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'dd/mm/yyyy'
        ]
    ]);
    ?>

    <?= $form->field($persona, 'email')->textInput(['type' => 'email', 'maxlength' => true]) ?>

    <?= $form->field($model, 'login')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cargo')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Cargo::find()->all(), "cargo", "cargo"), [ 'prompt' => 'Seleccione Una Opcion' ]); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
