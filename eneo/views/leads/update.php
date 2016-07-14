<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Leads */

$this->title = 'Update Leads: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Leads', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="col-md-6 col-md-offset-1">
	<div class="leads-update">

	    <h1><?= Html::encode($this->title) ?></h1>

	    <?= $this->render('_form', [
	        'model' => $model,
	    ]) ?>

	</div>
</div>
