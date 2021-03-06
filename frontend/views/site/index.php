<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
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
        <div class="row">
            Основная информация о компании
        </div>
        <div class="col-sm-4">
            <?= Html::img('@web/image/main.jpg', [
                'alt' => 'Наш логотип',
                'style' => 'float:left;width:300px;height:300px;'
            ]) ?>
        </div>
        <div class="col-sm-8">
            Наша управляющая компания была основана в 2007 году и является гордостью района!
        </div>
    </div>

</div>
