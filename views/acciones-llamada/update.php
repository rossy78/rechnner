<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AccionesLlamada */

$this->title = 'Update Acciones Llamada: ' . ' ' . $model->id_llamada;
$this->params['breadcrumbs'][] = ['label' => 'Acciones Llamadas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_llamada, 'url' => ['view', 'id' => $model->id_llamada]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="acciones-llamada-update">

    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>
