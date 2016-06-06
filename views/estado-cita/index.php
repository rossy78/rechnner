<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EstadoCitaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Estado Citas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estado-cita-index">
    <h3><?= Html::encode($this->title) ?></h3>

    <p> 
        <?=
        Html::button("Crear Cargo", [
            'value' => yii\helpers\Url::to(['estado-cita/create']),
            'title' => 'Creando Nuevo Estado Cita',
            'class' => 'showModalButton btn btn-success'
        ])
        ?>
    </p>
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'estado_cita',
            ['class' => 'yii\grid\ActionColumn',
                'template' => '{view}{update}{delete}',
                'buttons' => [
                    'view' => function ($url, $model) {
                        return Html::a('<span class="showModalLink glyphicon glyphicon-eye-open"></span>', "#", [
                                    'title' => 'Ver ' . $model->estado_cita,
                                    'value' => yii\helpers\Url::to(['estado-cita/view', 'id' => $model->estado_cita]),
                        ]);
                    },
                            'update' => function ($url, $model) {
                        return Html::a('<span class="showModalLink glyphicon glyphicon-pencil"></span>', "#", [
                                    'title' => 'Editar ' . $model->estado_cita,
                                    'value' => yii\helpers\Url::to(['estado-cita/update', 'id' => $model->estado_cita]),
                        ]);
                    }
                        ]
                    ],
                ],
            ]);
            ?>

</div>
