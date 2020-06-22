<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Fatura */

$this->title = 'Update Fatura: ' . $model->idFatura;
$this->params['breadcrumbs'][] = ['label' => 'Faturas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idFatura, 'url' => ['view', 'id' => $model->idFatura]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fatura-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
