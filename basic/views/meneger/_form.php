<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Meneger $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="meneger-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'isAuthor')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
