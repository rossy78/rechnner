<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LlamadaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="llamada-search">

    <?php
    $form = ActiveForm::begin([
                'action' => ['index'],
                'method' => 'get',
    ]);
    ?>

    <?= $form->field($model, 'id_llamada') ?>

    <?= $form->field($model, 'cliente') ?>

    <?= $form->field($model, 'tipo_llamada') ?>

    <?= $form->field($model, 'fecha') ?>

    <?= $form->field($model, 'duracion') ?>

    <?php // echo $form->field($model, 'operador') ?>

    <?php // echo $form->field($model, 'tipo_solicitud') ?>

    <?php // echo $form->field($model, 'contacto') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'sucursal') ?>

    <?php // echo $form->field($model, 'nota') ?>

    <?php // echo $form->field($model, 'remoto')->checkbox()  ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
