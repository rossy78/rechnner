<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cargo */

$this->title = 'Update Cargo: ' . ' ' . $model->cargo;
$this->params['breadcrumbs'][] = ['label' => 'Cargos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cargo, 'url' => ['view', 'id' => $model->cargo]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="cargo-update">



    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>
