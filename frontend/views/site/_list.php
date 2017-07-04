<?php
use yii\helpers\HtmlPurifier;
use yii\helpers\Html;
?>
<div class="news-item">
    <h4><?= Html::encode(date('d.m.Y', $model->created_at)) ?></h4>
    <?= HtmlPurifier::process($model->short) ?>
</div>

