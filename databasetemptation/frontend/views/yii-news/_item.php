<?php
namespace common\models;
use yii;
use yii\helpers\Html;

?>
<br>
<div class="panel panel-primary">
	<div class="panel-heading">
	<h3 class="panel-title" style="color:#FFFFFF"><?=Html::encode($model->标题);?></h3>
	</div> 
	<div class="panel-body">
		<div class="col-md">
			<span class ="glyphicon glyphicon-calendar " aria-hidden= "true"> 发布时间:</span> <em><?=Html::encode($model->发布时间);?></em><br>
		</div>
		<div class="col-md" style="margin-top: 8px;">
			<span class ="glyphicon glyphicon-thumbs-up" aria-hidden= "true"> 主要内容:</span> <em><?= $model->内容;?></em>
		</div>
	</div>
<br>
</div>
