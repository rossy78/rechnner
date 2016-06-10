<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EstadoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Estados';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estado-index">


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

  
    <p> 
        <?=
        Html::button("Crear " . $this->title, [
            'value' => yii\helpers\Url::to(['estado/create']),
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
            'estado',
            'pais',
            ['class' => 'yii\grid\ActionColumn',
                'template' => '{view}{update}{delete}',
                'buttons' => [
                    'view' => function ($url, $model) {
                        return Html::a('<span class="showModalLink glyphicon glyphicon-eye-open"></span>', "#", [
                            'title' => 'Ver  Estados',
                            'value' => yii\helpers\Url::to(['estado/view', 'estado'=>$model->estado, 'pais'=>$model->pais]),
                        ]);
                    },
                    'update' => function ($url, $model) {
                        return Html::a('<span class="showModalLink glyphicon glyphicon-pencil"></span>', "#", [
                            'title' => 'Editar  Estados',
                            'value' => yii\helpers\Url::to(['estado/update', 'estado'=>$model->estado, 'pais'=>$model->pais]),
                        ]); 
                    }
                ]
            ],
        ],
    ]);
    ?>
    <?php \yii\widgets\Pjax::end(); ?>

</div>
