<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Estado */

$this->title = 'Update Estado: ' . ' ' . $model->estado;
$this->params['breadcrumbs'][] = ['label' => 'Estados', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->estado, 'url' => ['view', 'estado' => $model->estado, 'pais' => $model->pais]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="estado-update">



    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>
