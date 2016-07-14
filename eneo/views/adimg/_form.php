<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Eneobizinfo;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Adimg */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="adimg-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'detail')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'url')->fileInput() ?>

	<?= $form->field($model, 'user_id')->hiddenInput(['value'=> Yii::$app->user->identity->id])->label(false); ?>

	<?= $form->field($model, 'biz_id')->dropDownList(

		ArrayHelper::map(
            Yii::$app->user->identity->role == "admin" ?
            Eneobizinfo::find() ->all():
            Eneobizinfo::find()->where(['user_id'=>Yii::$app->user->identity->id])->all()

            ,'id','name'),['prompt'=>'Select a business']
	); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-primary' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
