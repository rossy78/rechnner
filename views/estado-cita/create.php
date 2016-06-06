<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EstadoCita */

$this->title = 'Crear Estado Cita';
$this->params['breadcrumbs'][] = ['label' => 'Estado Citas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estado-cita-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
