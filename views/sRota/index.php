<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SRotaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'S Rotas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="srota-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create S Rota', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $index, $widget) {
            return Html::a(Html::encode($model->idServico), ['view', 'idServico' => $model->idServico, 'idRota' => $model->idRota]);
        },
    ]) ?>


</div>
