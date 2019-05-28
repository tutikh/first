<?php

use yii\helpers\Html;

?>

<h1><?= $model->title ?></h1>

<div class="meta">
    <p>Автор: <?= $model->user->login ?> Дата публикации: <?= $model->publish_date ?> Категория: <?= $model->category->title ?></p>
</div>

<div class="content">
    <?= $model->anons ?>
</div>

<?= Html::a('Читать далее', ['view', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
