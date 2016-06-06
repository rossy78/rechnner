<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TipoCita */

$this->title = 'Crear Tipo Cita';
$this->params['breadcrumbs'][] = ['label' => 'Tipo Citas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-cita-create">

    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>
