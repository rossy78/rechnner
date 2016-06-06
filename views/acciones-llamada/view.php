<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AccionesLlamada */

$this->title = $model->id_llamada;
$this->params['breadcrumbs'][] = ['label' => 'Acciones Llamadas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="acciones-llamada-view">



    <p>
        <?=
        Html::a('Eliminar', ['delete', 'id' => $model->id_llamada], [
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
            'id_llamada',
            'accion',
            'estado',
            'fecha',
        ],
    ])
    ?>

</div>
