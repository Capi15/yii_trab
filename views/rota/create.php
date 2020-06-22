<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Rota */

$this->title = 'Create Rota';
$this->params['breadcrumbs'][] = ['label' => 'Rotas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rota-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
