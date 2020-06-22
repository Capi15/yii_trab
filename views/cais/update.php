<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cais */

$this->title = 'Update Cais: ' . $model->idCais;
$this->params['breadcrumbs'][] = ['label' => 'Cais', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idCais, 'url' => ['view', 'id' => $model->idCais]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cais-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
