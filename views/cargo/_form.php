<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cargo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cargo-form">

    <?php
    $form = ActiveForm::begin([
                'options' => [
                    'id' => 'cargo-form'
                ]
    ]);
    ?>

    <?= $form->field($model, 'cargo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'administrador')->checkbox() ?>

    <?= $form->field($model, 'operador')->checkbox() ?>

    <?= $form->field($model, 'tecnico')->checkbox() ?>

    <?= $form->field($model, 'asesor')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
