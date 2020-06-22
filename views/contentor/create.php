<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Contentor */

$this->title = 'Create Contentor';
$this->params['breadcrumbs'][] = ['label' => 'Contentors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contentor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
