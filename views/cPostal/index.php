<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CPostalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'C Postals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cpostal-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create C Postal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $index, $widget) {
            return Html::a(Html::encode($model->cPostal), ['view', 'id' => $model->cPostal]);
        },
    ]) ?>


</div>
