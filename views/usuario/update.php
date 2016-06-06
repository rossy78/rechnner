<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Usuario */

$this->title = 'Update Usuario: ' . ' ' . $model->persona;
$this->params['breadcrumbs'][] = ['label' => 'Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->persona, 'url' => ['view', 'id' => $model->persona]];
$this->params['breadcrumbs'][] = 'Actualizar';
$model instanceof app\models\Usuario;
?>
<div class="usuario-update">



    <?=
    $this->render('_form', [
        'model' => $model,
        'persona' => $model->persona0,
    ])
    ?>

</div>
