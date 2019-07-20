<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\YiiActivitySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '活动预告';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yii-activity-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <!-- <p>
        <?= Html::a('Create Yii Activity', ['create'], ['class' => 'btn btn-success']) ?>
    </p> -->

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= ListView::widget([
    'id'=>'yii-activity',
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
