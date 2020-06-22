<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Prioridade */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="prioridade-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'expressoNormal')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
