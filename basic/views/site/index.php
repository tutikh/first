<?php

use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="site-index">

            <div class="body-content">

                <h3>Блог</h3>
                <ul class="nav nav-pills">
                    <li><a href="<?= Url::toRoute('post/index'); ?>">Посты</a></li>
                    <li><a href="<?= Url::toRoute('category/index'); ?>">Категории</a></li>
                </ul>

            </div>
        </div>

    </div>
</div>
