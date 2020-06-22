<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Prioridade */

$this->title = 'Create Prioridade';
$this->params['breadcrumbs'][] = ['label' => 'Prioridades', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prioridade-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
