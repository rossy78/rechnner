<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cliente */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cliente-form">

    <?php
    $form = ActiveForm::begin([
                'options' => [
                    'id' => 'cliente-form'
                ]
    ]);
    ?>

    <?= $form->field($model, 'rif')->textInput() ?>
    
    <?= $form->field($model, 'razon_social')->textInput() ?>

    <?= $form->field($model, 'direccion')->textarea(['maxlength' => true]) ?>

    <?= $form->field($model, 'contacto')->textInput() ?>

    <?= $form->field($model, 'ciudad')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Ciudad::find()->all(), "ciudad", "ciudad"), [ 'prompt' => 'Seleccione Una Opcion' ]); ?>

    <?= $form->field($model, 'email')->textInput([ 'type' => 'email', 'maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
