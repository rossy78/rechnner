<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AccionesLlamadaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tipos Acciones Llamadas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="acciones-llamada-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <h3><?= Html::encode($this->title) ?></h3>

    <p> 
        <?=
        Html::button("Crear " . $this->title, [
            'value' => yii\helpers\Url::to(['acciones-llamada/create']),
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
            'accion',
            'estado',
            'fecha',
            ['class' => 'yii\grid\ActionColumn',
                'template' => '{view}{update}{delete}',
                'buttons' => [
                    'view' => function ($url, $model) {
                        return Html::a('<span class="showModalLink glyphicon glyphicon-eye-open"></span>', "#", [
                            'title' => 'Ver '.$model->id_llamada,
                            'value' => yii\helpers\Url::to(['acciones-llamada/view', 'id'=>$model->id_llamada]),
                        ]);
                    },
                    'update' => function ($url, $model) {
                        return Html::a('<span class="showModalLink glyphicon glyphicon-pencil"></span>', "#", [
                            'title' => 'Editar ' .$model->id_llamada,
                            'value' => yii\helpers\Url::to(['acciones-llamada/update', 'id'=>$model->id_llamada]),
                        ]); 
                    }
                ]
            ],
        ],
    ]);
    ?>
    <?php \yii\widgets\Pjax::end(); ?>

</div>
