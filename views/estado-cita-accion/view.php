<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\EstadoCitaAccion */

$this->title = $model->estado_cita_accion;
$this->params['breadcrumbs'][] = ['label' => 'Estado Cita Accions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estado-cita-accion-view">



    <p>
        <?=
        Html::a('Eliminar', ['delete', 'id' => $model->estado_cita_accion], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ])
        ?>
    </p>

    <?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'estado_cita_accion',
        ],
    ])
    ?>

</div>
