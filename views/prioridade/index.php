<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PrioridadeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Prioridades';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prioridade-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Prioridade', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $index, $widget) {
            return Html::a(Html::encode($model->idPrioridade), ['view', 'id' => $model->idPrioridade]);
        },
    ]) ?>


</div>
