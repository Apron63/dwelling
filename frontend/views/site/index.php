<?php

/* @var $this yii\web\View */

use yii\widgets\ListView;
$this->title = 'Моя управляющая компания';
?>
<div class="site-index">

    <p class="text-center">
        Добро пожаловать на сайт моей управляющей компании
    </p>

    <div class="col-sm-2">
        Последние новости
        <?= ListView::widget([
            'dataProvider' => $dataProvider,
            'itemView' => '_list',
            'layout' => '{items}',
        ]);
        ?>
        <a href="news/index">Все новости</a>
    </div>

    <div class="col-sm-10">
        Основная информация о компании
    </div>

</div>
