<?= $this->render('analyticstracking'); ?>
<?php 
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
 ?>
<div class="container-fluid">
	<div class="row">
		<!-- #business-banner -->
		<div id="business-banner">
			<div class="container">
				<div class="row">
					<div class="business-banner-content">
						<div class="col-md-8">
							<div class="business-banner-title">
								<?= $biz['name'] ?>
							</div>
							<div class="business-banner-detail">
								<div class="business-banner-detail-address">
									<span class="glyphicon glyphicon-home"></span>
									<?= $biz['address'] ?>
								</div>
								<div class="business-banner-detail-phone">
									<span class="glyphicon glyphicon-phone-alt"></span>
									<?= $biz['tel'] ?>
								</div>
								<div class="business-banner-detail-website">
									<span class="glyphicon glyphicon-globe"></span>
									<a href=""><?= $biz['website'] ?></a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div id="map-gecode"><?=$biz['geocode'];?></div>
							<div class="field-map" id="map-c">
								<!-- <div class="field-map"></div> -->
							</div>
							
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<div class="row">
		<div class="container">
			<div id="business-detail-review">
				<div class="col-ms-8">
					<div class="business-detail-review-rating"></div>
					<div class="business-detail-review-comment">
						<a href="#biz-comment-box" class="btn btn-primary">Write a comment</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- EOF: .conatiner-fluid -->
</div>

<div id="Page">
	<div id="main-content">
		<div class="container">
			<div class="row">

			<div class="col-md-4">
				<paper-card heading="Emmental" image="http://placehold.it/350x150/FFC107/000000">
					<div class="card-content">
						Emmentaler or Emmental is a yellow, medium-hard cheese that originated in the area around Emmental, Switzerland. It is one of the cheeses of Switzerland, and is sometimes known as Swiss cheese.
					</div>
					<div class="card-actions">
						<paper-button>Share</paper-button>
						<paper-button>Explore!</paper-button>
					</div>
				</paper-card>
			</div>
			<div class="col-md-4">
				<paper-card heading="Emmental" image="http://placehold.it/350x150/FFC107/000000">
					<div class="card-content">
						Emmentaler or Emmental is a yellow, medium-hard cheese that originated in the area around Emmental, Switzerland. It is one of the cheeses of Switzerland, and is sometimes known as Swiss cheese.
					</div>
					<div class="card-actions">
						<paper-button>Share</paper-button>
						<paper-button>Explore!</paper-button>
					</div>
				</paper-card>
			</div>
			<div class="col-md-4">
				<paper-card heading="Emmental" image="http://placehold.it/350x150/FFC107/000000">
					<div class="card-content">
						Emmentaler or Emmental is a yellow, medium-hard cheese that originated in the area around Emmental, Switzerland. It is one of the cheeses of Switzerland, and is sometimes known as Swiss cheese.
					</div>
					<div class="card-actions">
						<paper-button>Share</paper-button>
						<paper-button>Explore!</paper-button>
					</div>
				</paper-card>
			</div>
			

			
			</div> <!--/.row-->
		</div>
	</div>
</div>



<script src="<?php echo Url::base()?>/polymer/vendor/bower/webcomponentsjs/webcomponents-lite.js"></script>

  <link rel="import" href="<?php echo Url::base()?>/polymer/vendor/bower/iron-demo-helpers/demo-snippet.html">
  <link rel="import" href="<?php echo Url::base()?>/polymer/vendor/bower/iron-demo-helpers/demo-pages-shared-styles.html">

  <link rel="import" href="<?php echo Url::base()?>/polymer/vendor/bower/iron-collapse/iron-collapse.html">
  <link rel="import" href="<?php echo Url::base()?>/polymer/vendor/bower/iron-icons/iron-icons.html">
  <link rel="import" href="<?php echo Url::base()?>/polymer/vendor/bower/iron-icons/communication-icons.html">
  <link rel="import" href="<?php echo Url::base()?>/polymer/vendor/bower/iron-icons/hardware-icons.html">
  <link rel="import" href="<?php echo Url::base()?>/polymer/vendor/bower/iron-icons/social-icons.html">
  <link rel="import" href="<?php echo Url::base()?>/polymer/vendor/bower/iron-flex-layout/iron-flex-layout.html">
  <link rel="import" href="<?php echo Url::base()?>/polymer/vendor/bower/paper-button/paper-button.html">
  <link rel="import" href="<?php echo Url::base()?>/polymer/vendor/bower/paper-checkbox/paper-checkbox.html">
  <link rel="import" href="<?php echo Url::base()?>/polymer/vendor/bower/paper-icon-button/paper-icon-button.html">
  <link rel="import" href="<?php echo Url::base()?>/polymer/vendor/bower/paper-styles/color.html">
  <link rel="import" href="<?php echo Url::base()?>/polymer/vendor/bower/paper-styles/typography.html">
  <link rel="import" href="<?php echo Url::base()?>/polymer/vendor/bower/paper-card/paper-card.html">