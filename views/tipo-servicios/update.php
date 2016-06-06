<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TipoServicios */

$this->title = 'Update Tipo Servicios: ' . ' ' . $model->tipo_servicio;
$this->params['breadcrumbs'][] = ['label' => 'Tipo Servicios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tipo_servicio, 'url' => ['view', 'id' => $model->tipo_servicio]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="tipo-servicios-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
