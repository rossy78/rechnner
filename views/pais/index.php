<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PaisSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pais';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pais-index">


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

  <!--   <h3><?= Html::encode($this->title) ?></h3> -->

    <p> 
        <?=
        Html::button("Crear Pais ", [
            'value' => yii\helpers\Url::to(['pais/create']),
            'title' => 'Crear Nuevo Pais ',
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
            'pais',
            ['class' => 'yii\grid\ActionColumn',
                'template' => '{view}{update}{delete}',
                'buttons' => [
                    'view' => function ($url, $model) {
                        return Html::a('<span class="showModalLink glyphicon glyphicon-eye-open"></span>', "#", [
                            'title' => 'Ver Pais '.$model->pais,
                            'value' => yii\helpers\Url::to(['pais/view', 'id'=>$model->pais]),
                        ]);
                    },
                    'update' => function ($url, $model) {
                        return Html::a('<span class="showModalLink glyphicon glyphicon-pencil"></span>', "#", [
                            'title' => 'Editar  Pais' .$model->pais,
                            'value' => yii\helpers\Url::to(['pais/update', 'id'=>$model->pais]),
                        ]); 
                    }
                ]
            ],
        ],
    ]);
    ?>
    <?php \yii\widgets\Pjax::end(); ?>

</div>
