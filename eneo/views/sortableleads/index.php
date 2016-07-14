<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SortableleadsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sortableleads';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sortableleads-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sortableleads', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'col1',
            'col2',
            'col3',
            'col4',
            // 'col5',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
