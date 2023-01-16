<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ProductHasFavorite $model */

$this->title = 'Update Product Has Favorite: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Product Has Favorites', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="product-has-favorite-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
