<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EstadoCitaAccionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Estado Citas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estado-cita-accion-index">

    <p> 
        <?=
        Html::button("Crear " . $this->title, [
            'value' => yii\helpers\Url::to(['estado-cita-accion/create']),
            'title' => 'Creando Nuevo ' . $this->title,
            'class' => 'showModalButton btn btn-success'
        ])
        ?>
    </p>

    <?php \yii\widgets\Pjax::begin(); ?>
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'estado_cita_accion',
            ['class' => 'yii\grid\ActionColumn',
                'template' => '{view}{update}{delete}',
                'buttons' => [
                    'view' => function ($url, $model) {
                        return Html::a('<span class="showModalLink glyphicon glyphicon-eye-open"></span>', "#", [
                            'title' => 'Ver '.$model->estado_cita_accion,
                            'value' => yii\helpers\Url::to(['estado-cita-accion/view', 'id'=>$model->estado_cita_accion]),
                        ]);
                    },
                    'update' => function ($url, $model) {
                        return Html::a('<span class="showModalLink glyphicon glyphicon-pencil"></span>', "#", [
                            'title' => 'Editar ' .$model->estado_cita_accion,
                            'value' => yii\helpers\Url::to(['estado-cita-accion/update', 'id'=>$model->estado_cita_accion]),
                        ]); 
                    }
                ]
            ],
        ],
    ]);
    ?>
    <?php \yii\widgets\Pjax::end(); ?>

</div>
