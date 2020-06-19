<?php

use yii\helpers\Html;

$userId = \app\models\Client::findIdentity(Yii::$app->user->getId());
?>
<div class="clients">
    <h2>
        Nome: <?= Html::encode($userId->username) ?>
    </h2>

    <p>
        Email:
    </p>

    <p>
        NIF: <?= Html::encode(2) ?>
    </p>

</div>
