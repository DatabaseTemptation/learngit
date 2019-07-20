<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\YiiPersonSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Yii People';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yii-person-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Yii Person', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'personid',
            '性别',
            '姓名',
            '简介',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>