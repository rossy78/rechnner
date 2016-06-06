<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cita */

$this->title = $model->id_cita;
$this->params['breadcrumbs'][] = ['label' => 'Citas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cita-view">



    <p>
        <?=
        Html::a('Eliminar', ['delete', 'id' => $model->id_cita], [
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
            'id_cita',
            'llamada',
            'fecha',
            'estado',
            'tipo_cita',
            'asignado_a',
            'tipo_servicio',
            'resultados',
            'servicios_adicionales',
        ],
    ])
    ?>

</div>
