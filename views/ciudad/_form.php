<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ciudad */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ciudad-form">

    <?php
    $form = ActiveForm::begin([
                'options' => [
                    'id' => 'ciudad-form'
                ]
    ]);
    ?>

    <?= $form->field($model, 'ciudad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'estado')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Estado::find()->all(), "estado", "estado"), ['prompt' => 'Seleccione una opcion'] ); ?>

    <?= $form->field($model, 'pais')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Pais::find()->all(), "pais", "pais"), [ 'prompt' => 'Seleccione una opcion'] ); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
