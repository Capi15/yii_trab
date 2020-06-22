<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Prioridade */

$this->title = 'Update Prioridade: ' . $model->idPrioridade;
$this->params['breadcrumbs'][] = ['label' => 'Prioridades', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idPrioridade, 'url' => ['view', 'id' => $model->idPrioridade]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="prioridade-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
