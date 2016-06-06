<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TipoLlamada */

$this->title = 'Update Tipo Llamada: ' . ' ' . $model->tipo_llamada;
$this->params['breadcrumbs'][] = ['label' => 'Tipo Llamadas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tipo_llamada, 'url' => ['view', 'id' => $model->tipo_llamada]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="tipo-llamada-update">



    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>
