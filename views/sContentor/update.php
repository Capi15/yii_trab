<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SContentor */

$this->title = 'Update S Contentor: ' . $model->idServico;
$this->params['breadcrumbs'][] = ['label' => 'S Contentors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idServico, 'url' => ['view', 'idServico' => $model->idServico, 'idContentor' => $model->idContentor]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="scontentor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
