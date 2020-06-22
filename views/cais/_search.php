<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CaisSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cais-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idCais') ?>

    <?= $form->field($model, 'noNavios') ?>

    <?= $form->field($model, 'noNaviosPartir') ?>

    <?= $form->field($model, 'noNaviosChegar') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
