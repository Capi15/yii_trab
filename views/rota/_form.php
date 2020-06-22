<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Rota */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rota-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'localSaida')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'localChegada')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
