<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Sortableleads */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sortableleads-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'col1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'col2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'col3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'col4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'col5')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
