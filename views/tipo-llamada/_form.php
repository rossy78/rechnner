<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TipoLlamada */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tipo-llamada-form">

    <?php
    $form = ActiveForm::begin([
                'options' => [
                    'id' => 'tipo-llamada-form'
                ]
    ]);
    ?>

    <?= $form->field($model, 'tipo_llamada')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
