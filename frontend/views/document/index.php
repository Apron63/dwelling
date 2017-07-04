<?php

use yii\helpers\Html;
use yii\widgets\ListView;
//use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\DocumentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Документы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="document-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_list',
        'emptyText' => 'Нет загруженных документов',
    ]);
    ?>
</div>
