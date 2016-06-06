<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Llamada */
/* @var $form yii\widgets\ActiveForm */
/* Formulario de registro de nueva llamada */
?>

<?php $form = ActiveForm::begin(); ?>

<?= $form->errorSummary($model); ?>

<table width="850" border="0">
    <tr>
        <td width="113">&nbsp;</td>
        <td width="214">&nbsp;</td>
        <td width="116">&nbsp;</td>
        <td width="239">&nbsp;</td>
    </tr>
    <tr>
        <td bgcolor="#E4E4E4">ID_Llamada:</td>
        <td bgcolor="#E4E4E4"><label for="textfield"></label></td>
        <td bgcolor="#E4E4E4"> Operador: <label for="textfield14"></label></td>
        <td bgcolor="#E4E4E4">
            <label for="textfield7" style="margin-top: 5px;position: absolute;"><?= Yii::$app->user->identity->login ?></label>
            <?= $form->field($model, 'operador')->textInput(['type' => "hidden", "readonly", 'value' => Yii::$app->user->identity->persona ] )->label("") ?>
        </td>
    </tr>
    <tr>
        <td bgcolor="#E4E4E4">Fecha:</td>
        <td bgcolor="#E4E4E4">
            <label for="textfield2" style="margin-top: 5px;position: absolute;"><?= date("d/m/Y") ?></label>
            <?= $form->field($model, 'fecha')->textInput(['type' => "hidden", "readonly", 'value' => date("d/m/Y")] )->label("") ?>
        </td>
        <td bgcolor="#E4E4E4">Tiempo de Llamada:</td>
        <td bgcolor="#E4E4E4">
            <label for="llamada-duracion" id="duracion" style="margin-top: 5px;position: absolute;"></label>
            <?= $form->field($model, 'duracion')->textInput(['type' => "hidden", "readonly"])->label("") ?>
        </td>
    </tr>
    <tr>
        <td>Tipo de Llamada:</td>
        <td colspan="3"><label for="textfield3"></label>
            <?= $form->field($model, 'tipo_llamada')->dropDownList(yii\helpers\ArrayHelper::map(\app\models\TipoLlamada::find()->all(), "tipo_llamada", "tipo_llamada"))->label("") ?>
        </td>
    </tr>
    <tr>
        <td>Cliente:</td>
        <td>
            <?= $form->field($model, 'cliente')->dropDownList(yii\helpers\ArrayHelper::map(\app\models\Cliente::find()->all(), "rif", "razon_social"))->label("") ?>
        </td>
        <td>Solicitud:</td>
        <td>
            <?= $form->field($model, 'tipo_solicitud')->dropDownList(yii\helpers\ArrayHelper::map(\app\models\TipoSolicitud::find()->all(), "tipo_solicitud", "tipo_solicitud"))->label("") ?>
        </td>
    </tr>
    <tr>
        <td>Contacto:</td>
        <td width="214">
            <?= $form->field($model, 'contacto')->textInput(['maxlength' => true])->label("") ?>
        </td>
        <td>Programas Gàlac</td>
        <td>
            <?= $form->field(new app\models\LlamadaProducto, 'id_producto')->dropDownList(yii\helpers\ArrayHelper::map(\app\models\Producto::find()->all(), "id_producto", "nombre"))->label("") ?>
        </td>
    </tr>
    <tr>
        <td>E-mail:</td>
        <td>
            <?= $form->field($model, 'email')->textInput([ 'type' => 'email', 'maxlength' => true])->label("") ?>
        </td>
        <td>Sucursal:</td>
        <td>
            <?= $form->field($model, 'sucursal')->dropDownList(yii\helpers\ArrayHelper::map(\app\models\Sucursal::find()->all(), "sucursal", "sucursal"))->label("") ?>
        </td>
    </tr>
    <tr>
        <td height="59">NOTA:</td>
        <td colspan="3">
            <?= $form->field($model, 'nota')->textarea() ?>
        </td>
    </tr>
    <tr>
        <td height="23">Conexion Remota: </td>
        <td>
            <?= $form->field($model, 'remoto')->checkbox() ?>
        </td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>
            <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </td>
        <td>
            <?= Html::button("Cancelar", [ 'onclick' => 'js: window.location = "' . \yii\helpers\Url::toRoute('/site/index') . '";']) ?>
        </td>
    </tr>
</table>

<script type="text/javascript">

    var startTime;

    function display() {
        var endTime = new Date();
        var timeDiff = endTime - startTime;
        timeDiff /= 1000;
        var seconds = Math.round(timeDiff % 60);
        timeDiff = Math.floor(timeDiff / 60);
        var minutes = Math.round(timeDiff % 60);
        timeDiff = Math.floor(timeDiff / 60);
        var hours = Math.round(timeDiff % 24);
        timeDiff = Math.floor(timeDiff / 24);

        $("#llamada-duracion").val(endTime - startTime);
        $("#duracion").text(hours + ":" + minutes + ":" + seconds);
        setTimeout(display, 1000);
    }
    
    $(document).ready(function () {
        startTime = new Date();
        setTimeout(display, 1000);
    });
//    function clock() {
//        var time = (new Date(seconds * 1000)).toUTCString().match(/(\d\d:\d\d:\d\d)/)[0];
//        $("#llamada-duracion").val(seconds);
//        $("#duracion").text(time);
//    }
</script>

<?php ActiveForm::end(); ?>

