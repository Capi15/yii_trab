<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SContentor */

$this->title = $model->idServico;
$this->params['breadcrumbs'][] = ['label' => 'S Contentors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="scontentor-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idServico' => $model->idServico, 'idContentor' => $model->idContentor], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idServico' => $model->idServico, 'idContentor' => $model->idContentor], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idServico',
            'idContentor',
        ],
    ]) ?>

</div>
