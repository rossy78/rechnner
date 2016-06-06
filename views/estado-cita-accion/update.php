<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EstadoCitaAccion */

$this->title = 'Update Estado Cita Accion: ' . ' ' . $model->estado_cita_accion;
$this->params['breadcrumbs'][] = ['label' => 'Estado Cita Accions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->estado_cita_accion, 'url' => ['view', 'id' => $model->estado_cita_accion]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="estado-cita-accion-update">



    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>
