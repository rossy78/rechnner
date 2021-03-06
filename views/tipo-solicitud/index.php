<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TipoSolicitudSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tipo Solicitud Llamada';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-solicitud-index">


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

     <!--<h3><?= Html::encode($this->title) ?></h3>-->

    <p> 
        <?=
        Html::button("Crear " . $this->title, [
            'value' => yii\helpers\Url::to(['tipo-solicitud/create']),
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
            'tipo_solicitud',
            ['class' => 'yii\grid\ActionColumn',
                'template' => '{view}{update}{delete}',
                'buttons' => [
                    'view' => function ($url, $model) {
                        return Html::a('<span class="showModalLink glyphicon glyphicon-eye-open"></span>', "#", [
                            'title' => 'Ver tipos de solicitud ',
                            'value' => yii\helpers\Url::to(['tipo-solicitud/view', 'id'=>$model->tipo_solicitud]),
                        ]);
                    },
                    'update' => function ($url, $model) {
                        return Html::a('<span class="showModalLink glyphicon glyphicon-pencil"></span>', "#", [
                            'title' => 'Editar tipo de solicitud ',
                            'value' => yii\helpers\Url::to(['tipo-solicitud/update', 'id'=>$model->tipo_solicitud]),
                        ]); 
                    }
                ]
            ],
        ],
    ]);
    ?>
    <?php \yii\widgets\Pjax::end(); ?>

</div>
