<?php

/* @var $this yii\web\View */

$this->title = 'Моя управляющая компания';
?>
<div class="site-index">
<p>
    Добро пожаловать на сайт моей управляющей компании
</p>
<div class="col-sm-2">
    Тут будут новости
    <?php foreach($dataProvider as $item)
        echo $item['short'];
    ?>
    <a href="news/index">Показать все</a>
</div>
<div class="col-sm-10">
    Основная информация о компании
</div>
</div>
