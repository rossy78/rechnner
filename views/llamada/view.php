<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Llamada */

$this->title = $model->id_llamada;
$this->params['breadcrumbs'][] = ['label' => 'Llamadas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="llamada-view">



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
            'cliente',
            'tipo_llamada',
            'fecha',
            [
               'attribute' => 'duracion',
                'value' => function($data){
                    return $data->getDuration();
                }
            ],
            'duracion',
            'operador',
            'tipo_solicitud',
            'contacto',
            'email:email',
            'sucursal',
            'nota',
            'remoto:boolean',
        ],
    ])
    ?>

</div>
