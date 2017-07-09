<?php
//use yii\helpers\HtmlPurifier;
use yii\helpers\Html;
?>
<div class="news-item">
    <h4><?= Html::encode(date('d.m.Y', $model->created_at)) ?></h4>
    <?= Html::a($model->short, 'news/view?id=' . $model->id) ?>
</div>

