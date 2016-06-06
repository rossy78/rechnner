<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Llamada */

$this->title = 'Update Llamada: ' . ' ' . $model->id_llamada;
$this->params['breadcrumbs'][] = ['label' => 'Llamadas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_llamada, 'url' => ['view', 'id' => $model->id_llamada]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="llamada-update">



    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>
