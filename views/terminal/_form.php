<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Terminal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="terminal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tipoTerminal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idCais')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
