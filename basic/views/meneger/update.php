<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Meneger $model */

$this->title = 'Update Meneger: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Menegers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="meneger-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
