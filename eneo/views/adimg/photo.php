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
						<!-- <a href="#biz-comment-box" class="btn btn-primary">Write a comment</a> -->
						<?php echo Html::a('Back', 
								  ['adimg/album','biz_id' => $biz['id']], ['class' => 'btn btn-primary']) ?>
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
			
		</div>
			<div class="row">
				
				<div class="col-md-7">
					<div id="pano-photo"></div>
				</div>
				<div class="col-md-5">
					<h3><?=$photo['title']; ?></h3>
		        	<p><?php echo $photo['detail']; ?></p>
		        		
		        	</div>
				</div>
			
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





  <input id="imagePath" type="hidden" value="<?php echo Url::base();  ?>" name="">
  <input id="imageName" type="hidden" value="<?php echo $photo['url'];  ?>" name="">




   <script>
      function initPano() {
        // Set up Street View and initially set it visible. Register the
        // custom panorama provider function. Set the StreetView to display
        // the custom panorama 'reception' which we check for below.
        var panorama = new google.maps.StreetViewPanorama(
          document.getElementById('pano-photo'), {
            pano: 'reception',
            visible: true,
            panoProvider: getCustomPanorama
        });
      }

      var imagePath = document.getElementById('imagePath').value;
      var imageName = document.getElementById('imageName').value;
				// var imagePath = imagePath+'/images/x.jpg';
				var imagePath = imagePath+'/images/uploads/albums/'+imageName;
				console.log(imagePath);

      // Return a pano image given the panoID.
      function getCustomPanoramaTileUrl(pano, zoom, tileX, tileY) {
        // Note: robust custom panorama methods would require tiled pano data.
        // Here we're just using a single tile, set to the tile size and equal
        // to the pano "world" size.
        // return 'img/x.jpg';
        // return 'https://developers.google.com/maps/documentation/javascript/examples/full/images/panoReception1024-0.jpg';
        return imagePath;
      }

      // Construct the appropriate StreetViewPanoramaData given
      // the passed pano IDs.
      function getCustomPanorama(pano, zoom, tileX, tileY) {
        if (pano === 'reception') {
          return {
            location: {
              pano: 'reception',
              description: 'Google Sydney - Reception'
            },
            links: [],
            // The text for the copyright control.
            copyright: 'Imagery (c) 2010 Google',
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
   
