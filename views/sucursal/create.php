<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Sucursal */

$this->title = 'Create Sucursal';
$this->params['breadcrumbs'][] = ['label' => 'Sucursals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sucursal-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
