<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cita */

$this->title = 'Update Cita: ' . ' ' . $model->id_cita;
$this->params['breadcrumbs'][] = ['label' => 'Citas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_cita, 'url' => ['view', 'id' => $model->id_cita]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="cita-update">



    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>
