<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\EstadoCita */

$this->title = $model->estado_cita;
$this->params['breadcrumbs'][] = ['label' => 'Estado Citas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estado-cita-view">

    <p>
        <?=
        Html::a('Eliminar', ['delete', 'id' => $model->estado_cita], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ])
        ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'estado_cita',
        ],
    ]) ?>

</div>
