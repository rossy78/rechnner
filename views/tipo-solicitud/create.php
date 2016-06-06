<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TipoSolicitud */

$this->title = 'Crear Tipo Solicitud';
$this->params['breadcrumbs'][] = ['label' => 'Tipo Solicituds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-solicitud-create">

    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>
