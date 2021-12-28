<?php

/* @var $this \yii\web\View */
/* @var $model \app\models\CalculatorForm */

use yii\helpers\Html;

?>

<p>You have entered the following information:</p>
<ul>
    <li><label>First Number</label>: <?= Html::encode($model->firstNumber) ?></li>
    <li><label>Second Number</label>: <?= Html::encode($model->secondNumber) ?></li>
    <li><label>Result</label>: <?= 'El resultado es:'?> <?= Html::encode($model->sumNumbers()) ?></li>
</ul>

<?php
    if ($message) {
        echo Html::tag('div', Html::encode($message), [
                'class' => 'alert alert-success'
        ]);
    }
?>


