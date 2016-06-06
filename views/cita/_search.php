<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CitaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cita-search">

    <?php
    $form = ActiveForm::begin([
                'action' => ['index'],
                'method' => 'get',
    ]);
    ?>

    <?= $form->field($model, 'id_cita') ?>

    <?= $form->field($model, 'llamada') ?>

    <?= $form->field($model, 'fecha') ?>

    <?= $form->field($model, 'estado') ?>

    <?= $form->field($model, 'tipo_cita') ?>

    <?php // echo $form->field($model, 'asignado_a') ?>

    <?php // echo $form->field($model, 'tipo_servicio') ?>

    <?php // echo $form->field($model, 'resultados') ?>

    <?php // echo $form->field($model, 'servicios_adicionales')  ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
