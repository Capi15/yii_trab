<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ContentorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contentor-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idContentor') ?>

    <?= $form->field($model, 'cor') ?>

    <?= $form->field($model, 'peso') ?>

    <?= $form->field($model, 'tamanho') ?>

    <?= $form->field($model, 'idServico') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
