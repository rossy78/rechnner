<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SucursalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sucursales';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sucursal-index">

    <p>
        <?=
        Html::button("Crear Sucursal", [
            'value' => yii\helpers\Url::to(['sucursal/create']),
            'title' => 'Creando Nueva Sucursal',
            'class' => 'showModalButton btn btn-success'
        ])
        ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'sucursal',

            ['class' => 'yii\grid\ActionColumn',
                'template' => '{view}{update}{delete}',
                'buttons' => [
                    'view' => function ($url, $model) {
                        return Html::a('<span class="showModalLink glyphicon glyphicon-eye-open"></span>', "#", [
                            'title' => 'Ver '.$model->sucursal,
                            'value' => yii\helpers\Url::to(['sucursal/view', 'id'=>$model->sucursal]),
                        ]);
                    },
                    'update' => function ($url, $model) {
                        return Html::a('<span class="showModalLink glyphicon glyphicon-pencil"></span>', "#", [
                            'title' => 'Editar ' .$model->sucursal,
                            'value' => yii\helpers\Url::to(['sucursal/update', 'id'=>$model->sucursal]),
                        ]); 
                    }
                ]
            ],
        ],
    ]); ?>

</div>
