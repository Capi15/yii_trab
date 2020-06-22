<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SContentorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'S Contentors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="scontentor-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create S Contentor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $index, $widget) {
            return Html::a(Html::encode($model->idServico), ['view', 'idServico' => $model->idServico, 'idContentor' => $model->idContentor]);
        },
    ]) ?>


</div>
