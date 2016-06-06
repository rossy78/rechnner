<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TipoLlamada */

$this->title = $model->tipo_llamada;
$this->params['breadcrumbs'][] = ['label' => 'Tipo Llamadas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-llamada-view">



    <p>
        <?=
        Html::a('Eliminar', ['delete', 'id' => $model->tipo_llamada], [
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
            'tipo_llamada',
        ],
    ])
    ?>

</div>
