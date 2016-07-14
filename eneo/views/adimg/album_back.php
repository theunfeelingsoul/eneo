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
				<?php foreach ($album as $key => $photo): ?>
					<div class="col-md-4 photo-card">
						<paper-card heading="<?=$photo['title']; ?>" image="<?=Url::base()?>/images/uploads/albums/<?=$photo['url'] ?>">
							<div class="card-content">
								<?php echo substr($photo['detail'],0,300); ?>
							</div>
							<div class="card-actions">
								<paper-button class="card-id" id="<?php echo $photo['id']; ?>"data-toggle="modal" data-target="<?='#modal_'.$photo['id']; ?>"> Open</paper-button>
								<!-- <paper-button>Explore!</paper-button> -->
							</div>

							<!-- Modal -->
							<div class="modal fade" id="<?php echo 'modal_'.$photo['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        <h4 class="modal-title" id="myModalLabel"><?=$photo['title']; ?></h4>
							      </div>
							      <div class="modal-body">
							        <div class="col-md-8">
							        	<div id="pano-photo<?php echo $photo['id']; ?>"></div>
							        </div>
							        <div class="col-md-4">
							        	<h3><?=$photo['title']; ?></h3>
							        	<p><?php echo $photo['detail']; ?></p>
							        		
							        	</div>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
							        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
							      </div>
							    </div>
							  </div>
							</div>
					</div> <!--EOF.col-md-4-->

				<?php endforeach; ?>
				<?php if (!$album) {
					echo "No photos";
				} ?>
			
					<!-- <div id="pano-photo">dc</div> -->
			
			</div> <!--/.row-->
		</div>
	</div>
</div>

  <style>
    
      #pano-photo {
        height: 400px;
        width: 100%;
      }

      .modal-content{
      	
      }

      .modal-dialog{
      	width: 1000px;
		margin: 10px auto;
      }

      .modal-body{
      	height: 400px;
      	/*width: 500px;*/
      }

      #imagePath{
      	visibility: hidden;
      }
      .photo-card{
      	margin-bottom: 30px;
      }
      .photo-card .card-content{
      	height: 200px;
      }
    </style>


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


  <link rel="import" href="<?php echo Url::base()?>/polymer/vendor/bower/paper-dropdown-menu/paper-dropdown-menu.html">
  <link rel="import" href="<?php echo Url::base()?>/polymer/vendor/bower/paper-item/paper-item.html">
  <link rel="import" href="<?php echo Url::base()?>/polymer/vendor/bower/paper-listbox/paper-listbox.html">
  <link rel="import" href="<?php echo Url::base()?>/polymer/vendor/bower/paper-dialog-scrollable/paper-dialog-scrollable.html">

  <link rel="import" href="<?php echo Url::base()?>/polymer/vendor/bower/neon-animation/neon-animations.html">

  <link rel="import" href="<?php echo Url::base()?>/polymer/vendor/bower/paper-dialog/paper-dialog.html">


  <input id="imagePath" type="hidden" value="<?php echo Url::base();  ?>" name="">




   <script>
      function initPano() {
      	// var clicked_id = 'modal_9';
      	clicked_map ="pano-photo9";
		    $(".card-id").click(function(event) {
		        // alert();
		         var id = $(this).attr('id');
		          clicked_id = 'modal_'+id;
		          clicked_map = 'pano-photo'+id;
		        console.log(clicked_map);
		    });

        // Set up Street View and initially set it visible. Register the
        // custom panorama provider function. Set the StreetView to display
        // the custom panorama 'reception' which we check for below.
        var panorama = new google.maps.StreetViewPanorama(
          document.getElementById(clicked_map), {
            pano: 'reception',
            visible: true,
            panoProvider: getCustomPanorama
        });
      }

      console.log(window.location.host);
      var stuff = document.getElementById('stuff');
				// console.log(map_gecode);

				// image url
				
				var imagePath = document.getElementById('imagePath').value;
				var imagePath = imagePath+'/images/x.jpg';

      // Return a pano image given the panoID.
      function getCustomPanoramaTileUrl(pano, zoom, tileX, tileY) {
        // Note: robust custom panorama methods would require tiled pano data.
        // Here we're just using a single tile, set to the tile size and equal
        // to the pano "world" size.
        // return '/x.jpg';
        return imagePath;
      }

      // Construct the appropriate StreetViewPanoramaData given
      // the passed pano IDs.
      function getCustomPanorama(pano, zoom, tileX, tileY) {
        if (pano === 'reception') {
          return {
            location: {
              pano: 'Business Panorama',
              description: 'Eneosearch.com'
            },
            links: [],
            // The text for the copyright control.
            copyright: '',
            // The definition of the tiles for this panorama.
            tiles: {
              tileSize: new google.maps.Size(1024, 512),
              worldSize: new google.maps.Size(1024, 512),
              // The heading in degrees at the origin of the panorama
              // tile set.
              centerHeading: 105,
              getTileUrl: getCustomPanoramaTileUrl
            }
          };
        }
      }
    </script>

       <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjMBVn_GZdUo1xzvfQwcggnBrXN8bcMas&callback=initPano">
    </script>
   
