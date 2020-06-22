<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RotaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rotas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rota-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Rota', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $index, $widget) {
            return Html::a(Html::encode($model->idRota), ['view', 'id' => $model->idRota]);
        },
    ]) ?>


</div>
