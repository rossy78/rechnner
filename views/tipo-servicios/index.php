<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TipoServiciosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tipo Servicios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-servicios-index">

  <!--  <h1><?= Html::encode($this->title) ?></h1>-->

    <p> 
        <?=
        Html::button("Crear " . $this->title, [
            'value' => yii\helpers\Url::to(['tipo-servicios/create']),
            'title' => 'Creando Nuevo ' . $this->title,
            'class' => 'showModalButton btn btn-success'
        ])
        ?>
    </p>

    <?php \yii\widgets\Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tipo_servicio',
            ['class' => 'yii\grid\ActionColumn',
                'template' => '{view}{update}{delete}',
                'buttons' => [
                    'view' => function ($url, $model) {
                        return Html::a('<span class="showModalLink glyphicon glyphicon-eye-open"></span>', "#", [
                            'title' => 'Ver  Tipos de servicio',
                            'value' => yii\helpers\Url::to(['tipo-servicios/view', 'id'=>$model->tipo_servicio]),
                        ]);
                    },
                    'update' => function ($url, $model) {
                        return Html::a('<span class="showModalLink glyphicon glyphicon-pencil"></span>', "#", [
                            'title' => 'Editar Tipos de Servicios ' ,
                            'value' => yii\helpers\Url::to(['tipo-servicios/update', 'id'=>$model->tipo_servicio]),
                        ]); 
                    }
                ]
            ],
        ],
    ]); ?>
    <?php \yii\widgets\Pjax::end(); ?>

</div>
