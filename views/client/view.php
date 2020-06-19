<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Client */
/* @var $modelC app\models\Contacts */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Clients', 'url' => ['view']];
$this->params['breadcrumbs'][] = 'Profile';
\yii\web\YiiAsset::register($this);
?>
<div class="client-view">

    <h1><?= Html::encode('Profile') ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>
    <?=
    DetailView::widget([
        'model' => $model,
        'modelC' => $modelC,
        'attributes' => [
            'username',
            'NIF',
            'email',
            'telefone'
        ],
    ]);
    ?>

</div>
