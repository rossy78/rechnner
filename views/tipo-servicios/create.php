<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TipoServicios */

$this->title = 'Crear Tipo Servicios';
$this->params['breadcrumbs'][] = ['label' => 'Tipo Servicios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-servicios-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
