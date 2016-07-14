<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Sortableleads */

$this->title = 'Create Sortableleads';
$this->params['breadcrumbs'][] = ['label' => 'Sortableleads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sortableleads-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
