<?php
namespace common\models;
use yii;
use yii\helpers\Html;

?>
<br>
<div class="panel panel-primary">
	<div class="panel-heading">
	<h3 class="panel-title" style="color:#FFFFFF"><?=Html::encode($model->名称);?></h3>
	</div> 
	<div class="panel-body">
		<div class="col-md">
			<span class ="glyphicon glyphicon-calendar " aria-hidden= "true"> 开展时间:</span> <em><?=Html::encode($model->时间);?></em><br>
		</div>
		<div class="col-md" style="margin-top: 8px;">
			<span class ="glyphicon glyphicon-map-marker" aria-hidden= "true" > 拟定地点:</span><em><?=Html::encode($model->地点);?></em><br>
		</div>
		<div class="col-md" style="margin-top: 8px;">
			<span class ="glyphicon glyphicon-user" aria-hidden= "true"> 主办单位:</span> <em><?=Html::encode(YiiOrganization::findOne($model->collegeid)->名称);?></em><br>
		</div>
		<div class="col-md" style="margin-top: 8px;">
			<span class ="glyphicon glyphicon-thumbs-up" aria-hidden= "true"> 活动主要内容: <?= $model->内容;?></span>
		</div>
	</div>
<br>
</div>
