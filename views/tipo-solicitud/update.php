<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TipoSolicitud */

$this->title = 'Update Tipo Solicitud: ' . ' ' . $model->tipo_solicitud;
$this->params['breadcrumbs'][] = ['label' => 'Tipo Solicituds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tipo_solicitud, 'url' => ['view', 'id' => $model->tipo_solicitud]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="tipo-solicitud-update">



    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>
