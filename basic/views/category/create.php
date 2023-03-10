<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ProductHasCategories $model */

$this->title = 'Create Product Has Categories';
$this->params['breadcrumbs'][] = ['label' => 'Product Has Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-has-categories-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
