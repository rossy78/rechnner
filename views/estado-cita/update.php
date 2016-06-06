<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EstadoCita */

$this->title = 'Update Estado Cita: ' . ' ' . $model->estado_cita;
$this->params['breadcrumbs'][] = ['label' => 'Estado Citas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->estado_cita, 'url' => ['view', 'id' => $model->estado_cita]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="estado-cita-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
