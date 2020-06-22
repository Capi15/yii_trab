<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Terminal */

$this->title = 'Update Terminal: ' . $model->idTerminal;
$this->params['breadcrumbs'][] = ['label' => 'Terminals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idTerminal, 'url' => ['view', 'id' => $model->idTerminal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="terminal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
