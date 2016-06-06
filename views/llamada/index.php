<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LlamadaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Llamadas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="llamada-index">


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <h3 ><?= Html::encode($this->title) ?></h3>

    <p> 
        <?=
        Html::button("Crear " . $this->title, [
            'value' => yii\helpers\Url::to(['llamada/create']),
            'title' => 'Nueva LLamada',
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
             'operador',
             'tipo_solicitud',
             'contacto',
             'email:email',
             'sucursal',
             'nota',
             'remoto:boolean',
            ['class' => 'yii\grid\ActionColumn',
                'template' => '{view}{update}{delete}',
                'buttons' => [
                    'view' => function ($url, $model) {
                        return Html::a('<span class="showModalLink glyphicon glyphicon-eye-open"></span>', "#", [
                            'title' => 'Ver '.$model->id_llamada,
                            'value' => yii\helpers\Url::to(['llamada/view', 'id'=>$model->id_llamada]),
                        ]);
                    },
                    'update' => function ($url, $model) {
                        return Html::a('<span class="showModalLink glyphicon glyphicon-pencil"></span>', "#", [
                            'title' => 'Editar ' .$model->id_llamada,
                            'value' => yii\helpers\Url::to(['llamada/update', 'id'=>$model->id_llamada]),
                        ]); 
                    }
                ]
            ],
        ],
    ]);
    ?>
    <?php \yii\widgets\Pjax::end(); ?>

</div>
