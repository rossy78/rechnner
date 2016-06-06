<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sucursal */

$this->title = 'Update Sucursal: ' . ' ' . $model->sucursal;
$this->params['breadcrumbs'][] = ['label' => 'Sucursals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->sucursal, 'url' => ['view', 'id' => $model->sucursal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sucursal-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
