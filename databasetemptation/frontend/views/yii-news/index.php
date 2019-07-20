<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\YiiNewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '校庆新闻';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yii-news-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <!-- <p>
        <?= Html::a('Create Yii News', ['create'], ['class' => 'btn btn-success']) ?>
    </p> -->

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <!-- <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'newsid',
            '标题',
            '内容',
            '发布时间',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?> -->

    <?= ListView::widget([
    'id'=>'yii-news',
    'dataProvider'=>$dataProvider,
    'itemView'=>'_item',
    'layout'=>'{items}<div class="col-lg-12 sum-pager">{summary}{pager}</div>',
    'pager'=>[
        'maxButtonCount'=>5,
        'firstPageLabel' => Yii::t('app','首页'),
        'nextPageLabel'=>Yii::t('app','下一页'),
        'prevPageLabel'=> Yii::t('app','上一页'),
        'lastPageLabel' => Yii::t('app','尾页'),
    ],
    ]) ?>

</div>
