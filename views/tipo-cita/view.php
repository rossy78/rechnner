<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TipoCita */

$this->title = $model->tipo_cita;
$this->params['breadcrumbs'][] = ['label' => 'Tipo Citas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-cita-view">



    <p>
        <?=
        Html::a('Eliminar', ['delete', 'id' => $model->tipo_cita], [
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
            'tipo_cita',
        ],
    ])
    ?>

</div>
