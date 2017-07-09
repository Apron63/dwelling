<?php
use yii\helpers\Html;
    use yii\helpers\HtmlPurifier;
?>
     
<div class="news-item">
    <h4><?= Html::encode(date('d.m.Y', $model->created_at)) ?></h4>
    <?= Html::a($model->short, 'news/view?id=' . $model->id)?>
</div>