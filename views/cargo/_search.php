<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CargoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cargo-search">

    <?php
    $form = ActiveForm::begin([
                'action' => ['index'],
                'method' => 'get',
    ]);
    ?>

    <?= $form->field($model, 'cargo') ?>

    <?= $form->field($model, 'administrador')->checkbox() ?>

    <?= $form->field($model, 'operador')->checkbox() ?>

    <?= $form->field($model, 'tecnico')->checkbox() ?>

    <?= $form->field($model, 'asesor')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
