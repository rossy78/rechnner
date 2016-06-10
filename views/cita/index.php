<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CitaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Citas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cita-index">

    <p> 
        <?=
        Html::button("Crear " . $this->title, [
            'value' => yii\helpers\Url::to(['cita/create']),
            'title' => 'Nueva  Cita',
            'class' => 'showModalButton btn btn-success'
        ])
        ?>
    </p>

    <?php
    $events = [];
    
    //Testing
//    $Event = new \yii2fullcalendar\models\Event();
//    $Event->id = 1;
//    $Event->title = 'Instalacion';
//    $Event->start = date('Y-m-d\Th:i:s\Z');
//    $events[] = $Event;
//
//    $Event = new \yii2fullcalendar\models\Event();
//    $Event->id = 2;
//    $Event->title = 'Soporte';
//    $Event->start = date('Y-m-d\Th:i:s\Z', strtotime('tomorrow 6am'));
//    $events[] = $Event;
    
    /*where( [ 'asignado_a' => Yii::$app->user->identity->persona ] )->*/
    $citas = \app\models\Cita::find()->all();
    foreach ($citas as $cita)
    {
        try{
            $cita instanceof \app\models\Cita;
            $Event = new \yii2fullcalendar\models\Event();
            $Event->id = $cita->id_cita;
            $Event->title = "Tipo Cita: ".$cita->tipo_cita.
                "\nCliente: ".$cita->llamada0->cliente0->razon_social.
                "\nAsignado A: ".$cita->asignadoA->login.
                "\nTipo Servicio: ".$cita->tipo_servicio;
            $Event->start = date('Y-m-d\Th:i:s\Z', strtotime($cita->fecha));
            $events[] = $Event;
        }
        catch(Exception $ex){}
    }
    ?>

    <?=
    \yii2fullcalendar\yii2fullcalendar::widget(array(
        'events' => $events,
        'clientOptions' => [
            'lang' => Yii::$app->language,
            'editable' => true,
            'droppable' => true
        ],
    ));
    ?>
    <br />
    <?php \yii\widgets\Pjax::begin(); ?>
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id_cita',
            'llamada',
            'fecha',
            'estado',
            'tipo_cita',
            // 'asignado_a',
            // 'tipo_servicio',
            // 'resultados',
            // 'servicios_adicionales',
            ['class' => 'yii\grid\ActionColumn',
                'template' => '{view}{update}{delete}',
                'buttons' => [
                    'view' => function ($url, $model) {
                        return Html::a('<span class="showModalLink glyphicon glyphicon-eye-open"></span>', "#", [
                                    'title' => 'Ver  Cita',
                                    'value' => yii\helpers\Url::to(['cita/view', 'id' => $model->id_cita]),
                        ]);
                    },
                            'update' => function ($url, $model) {
                        return Html::a('<span class="showModalLink glyphicon glyphicon-pencil"></span>', "#", [
                                    'title' => 'Editar Cita ' ,
                                    'value' => yii\helpers\Url::to(['cita/update', 'id' => $model->id_cita]),
                        ]);
                    }
                        ]
                    ],
                ],
            ]);
            ?>
            <?php \yii\widgets\Pjax::end(); ?>

</div>
