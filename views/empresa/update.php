<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Empresa */

$this->title = 'Update Empresa: ' . ' ' . $model->codigo_empresa;
$this->params['breadcrumbs'][] = ['label' => 'Empresas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->codigo_empresa, 'url' => ['view', 'id' => $model->codigo_empresa]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="empresa-update">



    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>
