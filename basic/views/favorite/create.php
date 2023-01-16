<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ProductHasFavorite $model */

$this->title = 'Create Product Has Favorite';
$this->params['breadcrumbs'][] = ['label' => 'Product Has Favorites', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-has-favorite-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
