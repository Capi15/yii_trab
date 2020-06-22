<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Rota */

$this->title = 'Update Rota: ' . $model->idRota;
$this->params['breadcrumbs'][] = ['label' => 'Rotas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idRota, 'url' => ['view', 'id' => $model->idRota]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rota-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
