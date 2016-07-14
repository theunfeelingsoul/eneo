
<?php 

use yii\widgets\Breadcrumbs;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
$this->title = 'Business Profile';
$this->params['breadcrumbs'][] = $this->title;

 ?>
<div class="col-md-10">
    <div class="">
        <div class="widget-breadcrums">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
        </div>

        <h2><?= Html::encode($this->title) ?></h2>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
		<?php $form = ActiveForm::begin(); ?>
			<div class="form-group">
				<label>Question</label>
				<select name ="qid" class="form-control">
					<?php foreach ($ques as $key => $q):?>
						<?php if($qid == $q['id']): ?>
						<option selected value="<?= $q['id'] ?>"><?= $q['q'] ?></option>
						<?php else: ?>
						<option value="<?= $q['id'] ?>"><?= $q['q'] ?></option>
						<?php endif; ?>
					<?php endforeach; ?>
				
				</select>
			</div>

			<div class="form-group">
				<label>Answer</label>
				<select class="form-control">
					<option>Select</option>
					<?php if ($opt):?>
						<?php foreach ($opt as $key => $o):?>
							<option value="<?echo $key  ?>"><?= $o ?></option>
						<?php endforeach; ?>
					<?php endif; ?>
				</select>
			</div>

			<div class="form-group">
		        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-primary' : 'btn btn-primary']) ?>
		    </div>
	<?php ActiveForm::end(); ?>
      

    </div>
</div>

<script type="text/javascript">
	

	
</script>

