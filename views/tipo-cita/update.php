<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TipoCita */

$this->title = 'Update Tipo Cita: ' . ' ' . $model->tipo_cita;
$this->params['breadcrumbs'][] = ['label' => 'Tipo Citas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tipo_cita, 'url' => ['view', 'id' => $model->tipo_cita]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="tipo-cita-update">



    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>
