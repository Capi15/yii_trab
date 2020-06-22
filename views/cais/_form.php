<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cais */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cais-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'noNavios')->textInput() ?>

    <?= $form->field($model, 'noNaviosPartir')->textInput() ?>

    <?= $form->field($model, 'noNaviosChegar')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
