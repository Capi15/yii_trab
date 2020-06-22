<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Contentor */

$this->title = 'Update Contentor: ' . $model->idContentor;
$this->params['breadcrumbs'][] = ['label' => 'Contentors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idContentor, 'url' => ['view', 'id' => $model->idContentor]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="contentor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
