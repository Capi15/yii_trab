<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cais */

$this->title = 'Create Cais';
$this->params['breadcrumbs'][] = ['label' => 'Cais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cais-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
