<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PersonaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="persona-search">

    <?php
    $form = ActiveForm::begin([
                'action' => ['index'],
                'method' => 'get',
    ]);
    ?>

    <?= $form->field($model, 'cedula') ?>

    <?= $form->field($model, 'nombres') ?>

    <?= $form->field($model, 'apellidos') ?>

    <?= $form->field($model, 'sexo') ?>

    <?= $form->field($model, 'direccion') ?>

    <?php // echo $form->field($model, 'fecha_nacimiento') ?>

    <?php // echo $form->field($model, 'email')  ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
