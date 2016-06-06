<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ciudad */

$this->title = 'Update Ciudad: ' . ' ' . $model->ciudad;
$this->params['breadcrumbs'][] = ['label' => 'Ciudads', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ciudad, 'url' => ['view', 'id' => $model->ciudad]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="ciudad-update">



    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>
