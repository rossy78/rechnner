<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cliente */

$this->title = 'Update Cliente: ' . ' ' . $model->rif;
$this->params['breadcrumbs'][] = ['label' => 'Clientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->rif, 'url' => ['view', 'id' => $model->rif]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="cliente-update">



    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>
