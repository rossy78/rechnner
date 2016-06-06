<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EstadoCitaAccion */

$this->title = 'Crear Estado Cita Accion';
$this->params['breadcrumbs'][] = ['label' => 'Estado Cita Accions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estado-cita-accion-create">

    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>
