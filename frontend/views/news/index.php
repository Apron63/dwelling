<?php

use yii\helpers\Html;
use yii\widgets\ListView;
//use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Новости';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?= ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_list',
    'emptyText' => 'Новостей пока что нет',
]);
?>
</div>
