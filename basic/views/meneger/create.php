<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Meneger $model */

$this->title = 'Create Meneger';
$this->params['breadcrumbs'][] = ['label' => 'Menegers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="meneger-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
