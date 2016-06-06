<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Estado */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="estado-form">

    <?php
    $form = ActiveForm::begin([
                'options' => [
                    'id' => 'estado-form'
                ]
    ]);
    ?>

    <?= $form->field($model, 'estado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pais')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Pais::find()->all(), "pais", "pais"), [ 'prompt' => 'Seleccione Una Opcion' ]); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
