<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cita */

$this->title = 'Crear Cita';
$this->params['breadcrumbs'][] = ['label' => 'Citas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cita-create">

    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>
