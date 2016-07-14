<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Sortableleads */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sortableleads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sortableleads-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'col1',
            'col2',
            'col3',
            'col4',
            'col5',
        ],
    ]) ?>

</div>
