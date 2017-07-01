<?php
    use yii\helpers\Html;
    use yii\helpers\HtmlPurifier;
    ?>
     
    <div class="news-item">
        <h2><?= Html::encode($model->created_at) ?></h2>    
        <?= HtmlPurifier::process($model->short) ?>    
    </div>

</div>
