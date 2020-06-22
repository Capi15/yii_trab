<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SRota */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="srota-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idServico')->textInput() ?>

    <?= $form->field($model, 'idRota')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
