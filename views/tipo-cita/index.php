<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TipoCitaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tipo Citas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-cita-index">


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <h3><?= Html::encode($this->title) ?></h3>

    <p> 
        <?=
        Html::button("Crear " . $this->title, [
            'value' => yii\helpers\Url::to(['tipo-cita/create']),
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
            'tipo_cita',
            ['class' => 'yii\grid\ActionColumn',
                'template' => '{view}{update}{delete}',
                'buttons' => [
                    'view' => function ($url, $model) {
                        return Html::a('<span class="showModalLink glyphicon glyphicon-eye-open"></span>', "#", [
                            'title' => 'Ver '.$model->tipo_cita,
                            'value' => yii\helpers\Url::to(['tipo-cita/view', 'id'=>$model->tipo_cita]),
                        ]);
                    },
                    'update' => function ($url, $model) {
                        return Html::a('<span class="showModalLink glyphicon glyphicon-pencil"></span>', "#", [
                            'title' => 'Editar ' .$model->tipo_cita,
                            'value' => yii\helpers\Url::to(['tipo-cita/update', 'id'=>$model->tipo_cita]),
                        ]); 
                    }
                ]
            ],
        ],
    ]);
    ?>
    <?php \yii\widgets\Pjax::end(); ?>

</div>
