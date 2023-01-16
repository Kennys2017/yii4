<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Adress $model */

$this->title = 'Create Adress';
$this->params['breadcrumbs'][] = ['label' => 'Adresses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adress-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
