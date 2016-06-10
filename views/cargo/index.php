<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CargoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cargos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cargo-index">
  <!--  <h3><?= Html::encode($this->title) ?></h3>-->

    <p> 
        <?=
        Html::button("Crear Cargo", [
            'value' => yii\helpers\Url::to(['cargo/create']),
            'title' => 'Creando Nuevo Cargo',
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
            'cargo',
            'administrador:boolean',
            'operador:boolean',
            'tecnico:boolean',
            'asesor:boolean',
            ['class' => 'yii\grid\ActionColumn',
                'template' => '{view}{update}{delete}',
                'buttons' => [
                    'view' => function ($url, $model) {
                        return Html::a('<span class="showModalLink glyphicon glyphicon-eye-open"></span>', "#", [
                            'title' => 'Ver  Cargo',
                            'value' => yii\helpers\Url::to(['cargo/view', 'id'=>$model->cargo]),
                        ]);
                    },
                    'update' => function ($url, $model) {
                        return Html::a('<span class="showModalLink glyphicon glyphicon-pencil"></span>', "#", [
                            'title' => 'Editar Cargo ',
                            'value' => yii\helpers\Url::to(['cargo/update', 'id'=>$model->cargo]),
                        ]); 
                    }
                ]
            ],
        ],
    ]);
    ?>
    <?php \yii\widgets\Pjax::end(); ?>

</div>
