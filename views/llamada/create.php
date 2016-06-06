<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Llamada */

$this->title = 'Crear Llamada';
$this->params['breadcrumbs'][] = ['label' => 'Llamadas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?=

$this->render('_form', [
    'model' => $model,
])
?>

