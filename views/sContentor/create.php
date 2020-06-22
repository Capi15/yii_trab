<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SContentor */

$this->title = 'Create S Contentor';
$this->params['breadcrumbs'][] = ['label' => 'S Contentors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="scontentor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
