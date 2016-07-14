 <?php 
 use yii\helpers\Url;
  ?>

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


   <h3>A paper-card with a simple heading, header image, body content, and actions</h3>
      <demo-snippet>
        <template>
          <paper-card heading="Emmental" image="http://placehold.it/350x150/FFC107/000000">
            <div class="card-content">
              Emmentaler or Emmental is a yellow, medium-hard cheese that originated in the area around Emmental, Switzerland. It is one of the cheeses of Switzerland, and is sometimes known as Swiss cheese.
            </div>
            <div class="card-actions">
              <paper-button>Share</paper-button>
              <paper-button>Explore!</paper-button>
            </div>
          </paper-card>
        </template>
      </demo-snippet>

<div style="width:350px">
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

<?php echo Url::base(); ?>