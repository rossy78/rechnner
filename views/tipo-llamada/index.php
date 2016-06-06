<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TipoLlamadaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tipo Llamadas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-llamada-index">

    <h3><?= Html::encode($this->title) ?></h3>

    <p> 
        <?=
        Html::button("Crear " . $this->title, [
            'value' => yii\helpers\Url::to(['tipo-llamada/create']),
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
            'tipo_llamada',
            ['class' => 'yii\grid\ActionColumn',
                'template' => '{view}{update}{delete}',
                'buttons' => [
                    'view' => function ($url, $model) {
                        return Html::a('<span class="showModalLink glyphicon glyphicon-eye-open"></span>', "#", [
                            'title' => 'Ver '.$model->tipo_llamada,
                            'value' => yii\helpers\Url::to(['tipo-llamada/view', 'id'=>$model->tipo_llamada]),
                        ]);
                    },
                    'update' => function ($url, $model) {
                        return Html::a('<span class="showModalLink glyphicon glyphicon-pencil"></span>', "#", [
                            'title' => 'Editar ' .$model->tipo_llamada,
                            'value' => yii\helpers\Url::to(['tipo-llamada/update', 'id'=>$model->tipo_llamada]),
                        ]); 
                    }
                ]
            ],
        ],
    ]);
    ?>
    <?php \yii\widgets\Pjax::end(); ?>

</div>
