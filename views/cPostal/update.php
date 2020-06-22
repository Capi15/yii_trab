<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CPostal */

$this->title = 'Update C Postal: ' . $model->cPostal;
$this->params['breadcrumbs'][] = ['label' => 'C Postals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cPostal, 'url' => ['view', 'id' => $model->cPostal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cpostal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
