<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SRota */

$this->title = 'Update S Rota: ' . $model->idServico;
$this->params['breadcrumbs'][] = ['label' => 'S Rotas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idServico, 'url' => ['view', 'idServico' => $model->idServico, 'idRota' => $model->idRota]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="srota-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
