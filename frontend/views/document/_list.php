<?php
use yii\helpers\Html;
//use yii\helpers\HtmlPurifier;
?>
     
<div class="news-item">
    <h2><?= Html::encode($model->created_at) ?></h2>
    <?= Html::a($model->title, 'view?id=' . $model->id) ?>
</div>

</div>
