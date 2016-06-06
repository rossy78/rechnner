<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pais */

$this->title = 'Update Pais: ' . ' ' . $model->pais;
$this->params['breadcrumbs'][] = ['label' => 'Pais', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pais, 'url' => ['view', 'id' => $model->pais]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="pais-update">



    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>
