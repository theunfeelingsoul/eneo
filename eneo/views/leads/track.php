<style type="text/css">
	body {
   /* min-width: 520px;
    font-family: "Trebuchet MS", "Helvetica", "Arial",  "Verdana", "sans-serif";
	font-size: 62.5%;*/
  }

  .column {
/*    width: 170px;
    float: left;
    padding-bottom: 100px;*/
    border-right: solid 1px #f5f5f5;
    height: 900px;
  }
  .portlet {
    margin: 0 1em 1em 0;
    padding: 0.3em;
  }
  .portlet-header {
    padding: 0.2em 0.3em;
    margin-bottom: 0.5em;
    position: relative;
  }
  .portlet-toggle {
    position: absolute;
    top: 50%;
    right: 0;
    margin-top: -8px;
  }
  .portlet-content {
    padding: 0.4em;
  }
  .portlet-placeholder {
    border: 1px dotted black;
    margin: 0 1em 1em 0;
    height: 50px;
  }

  .ui-corner-all, .ui-corner-bottom, .ui-corner-right, .ui-corner-br{
  	border-radius: 0px;
  }

  .ui-widget-header {
    background: #E1BEE7;
	}
	.ui-widget-content {
		/*border: 1px solid #aaaaaa;*/
		    border-bottom: solid 1px #E1BEE7;
	}

</style>

<?php use yii\widgets\Breadcrumbs;
$this->title = 'Track leads';
$this->params['breadcrumbs'][] = $this->title;
 ?>
<div class="col-md-10">
<div class="widget-breadcrums">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
        </div>
  <div id="sortable">
  	<div class="row">
  		<div class="col-md-3"><h4>Aquintance </h4></div>
  		<div class="col-md-3"><h4>Ally</h4></div>
  		<div class="col-md-3"><h4>Trust</h4></div>
  		<div class="col-md-3"><h4>Allow</h4></div>
  	</div>
  	<div class="row">
		<div class="col-md-3 column" id="col1">
			<!-- loop though the cards -->
			<?php foreach ($leads as $key => $lead): ?>
				<!-- check is the card ids are in the sorted column -->
				<?php if (in_array($lead['id'], explode(",",$sorted_leads['col1']))): ?>
					<div class="portlet" id="<?= $lead['id'] ?>">
						<div class="portlet-header"><?= $lead['title'] ?></div>
						<div class="portlet-content"><?= $lead['detail'] ?></div>
					</div>
				<?php endif ?>
			<?php endforeach ?>
		</div>
		 
		<div class="col-md-3  column" id="col2">
		 
		 <!-- loop though the cards -->
			<?php foreach ($leads as $key => $lead): ?>
				<!-- check is the card ids are in the sorted column -->
				<?php if (in_array($lead['id'], explode(",",$sorted_leads['col2']))): ?>
					<div class="portlet" id="<?= $lead['id'] ?>">
						<div class="portlet-header"><?= $lead['title'] ?></div>
						<div class="portlet-content"><?= $lead['detail'] ?></div>
					</div>
				<?php endif ?>
			<?php endforeach ?>
		</div>
		 
		<div class="col-md-3  column" id="col3">
		 

		 <!-- loop though the cards -->
			<?php foreach ($leads as $key => $lead): ?>
				<!-- check is the card ids are in the sorted column -->
				<?php if (in_array($lead['id'], explode(",",$sorted_leads['col3']))): ?>
					<div class="portlet" id="<?= $lead['id'] ?>">
						<div class="portlet-header"><?= $lead['title'] ?></div>
						<div class="portlet-content"><?= $lead['detail'] ?></div>
					</div>
				<?php endif ?>
			<?php endforeach ?>
		</div>
		<div class="col-md-3  column" id="col4">
		 
		  <!-- loop though the cards -->
			<?php foreach ($leads as $key => $lead): ?>
				<!-- check is the card ids are in the sorted column -->
				<?php if (in_array($lead['id'], explode(",",$sorted_leads['col4']))): ?>
					<div class="portlet" id="<?= $lead['id'] ?>">
						<div class="portlet-header"><?= $lead['title'] ?></div>
						<div class="portlet-content"><?= $lead['detail'] ?></div>
					</div>
				<?php endif ?>
			<?php endforeach ?>
		 
		</div>
		</div>
	
</div>
</div>