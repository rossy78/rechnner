<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AccionesLlamada */

$this->title = 'Crear Acciones Llamada';
$this->params['breadcrumbs'][] = ['label' => 'Acciones Llamadas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="acciones-llamada-create">

    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>
