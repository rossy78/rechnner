<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TipoLlamada */

$this->title = 'Crear Tipo Llamada';
$this->params['breadcrumbs'][] = ['label' => 'Tipo Llamadas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-llamada-create">

    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>
