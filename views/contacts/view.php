<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Contacts */
?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idContacto',
            'email:email',
            'telefone',
        ],
    ]) ?>


