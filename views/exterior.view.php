<?php require_once('admin/config.php'); ?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Configurador</title>

		<meta property="og:url"                content="<?php echo $URL; ?>" />
		<meta property="og:type"               content="website" />
		<meta property="og:title"              content="Exterior" />
		<meta property="og:description"        content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. " />
		<meta property="og:image"              content="<?php echo $URL; ?>/img/sharing/example.png" />

		<?php echo $favicon; ?>
		<?php echo $normalize_css; ?>
		<?php echo $boostrap_v4_css ?>

		<!-- Font awesome -->
		<?php echo $font_awesome_css; ?>
		<!-- CSS own files -->
		<?php echo $own_file_css; ?>
		
		<?php echo $google_analitycs; ?>
        
        <!-- AFrame - Needs to be on head -->
        <?php echo $aframe_js; ?>
                
	</head>
    <body>

		<?php require("views/navbar.view.php"); ?>
    
        
        <a-scene style="position: absolute;">
            <!--<a-entity camera >
            </a-entity>-->

            <a-sky src="img/exteriores-min.jpg" rotation="0 -110 0"
                   material="transparent: true; alphaTest: 0;"></a-sky>
            <!-- "button" -->
            <a-entity 
                      animation="property: geometry.radius; easing: linear; loop: true; from: 0.8; to: 0.9; dur: 2000"
                      position="-7.5 2 -15" rotation="0 90 0" 
                      geometry="primitive: torus; radius: 0.5; radiusTubular: 0.04; arc: 360"
                      material="side: double; color:#000000">
            </a-entity>
            
            <a-entity 
                      id="button-change-environment"
                      animation="property: geometry.radius; easing: linear; loop: true; from: 0.8; to: 0.9; dur: 2000"
                      class="clickable" position="-7.5 2 -15" rotation="0 90 0" 
                      geometry="primitive: sphere; radius: 2"
                      material="side: double; color:#000000; opacity: 0.01">
            </a-entity>
            
            <a-camera wasd-controls-enabled="false" look-controls="reverseMouseDrag: true" mouse-cursor>
      
        
                <!-- Entity with cursor component and rayOrigin: mouse -->
                <a-entity cursor="rayOrigin: mouse;" raycaster="objects: .clickable;">
                  <!-- Add any cursor geometry here -->
                </a-entity>


                <!-- Old Cursor -->
                <!-- <a-cursor fuse="true" raycaster="objects: .clickable" fuse-timeout="1000"></a-cursor> -->

            </a-camera>
            
            <a-entity hand-controls laser-controls raycaster="far: 70"></a-entity>
            
        </a-scene>
        
        <!-- Modal -->
        <div class="modal fade" id="whatsModal" tabindex="-1" role="dialog" aria-labelledby="whatsModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title fnt-3 avenir-medium ml-auto" id="whatsModalLabel">Contáctanos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <figure class="d-flex justify-content-center py-0">
                    <a target="_blank" href="https://api.whatsapp.com/send?phone=5219993514929" data-toggle="tooltip" data-placement="top" title="Whatsapp">
                        <img src="img/whatsapp-black.png" style="max-height: 120px;">
                    </a>
                </figure>
              </div>
            </div>
          </div>
        </div>
        
        <script>
            setTimeout(function() {
                $('#whatsModal').modal('show');
            }, 10000);
        </script>
        
        <div class="logo position-absolute">
            <img class="img-fluid logo-img" src="img/logo.png">
        </div>
        
        <div class="contacto position-absolute">
            <div class="">
                <p class="avenir-medium fnt-1-5">Contáctanos</p>
                <figure class="px-auto">
                    <a target="_blank" href="https://api.whatsapp.com/send?phone=5219993514929" data-toggle="tooltip" data-placement="top" title="Whatsapp">
                        <img src="img/whatsapp-black.png">
                    </a>
                </figure>
            </div>
        </div>
        
        <script>
            
            // Component to change to a sequential color on click.
            var sceneEl = document.querySelector('a-scene');

            var boxEl = sceneEl.querySelector('#button-change-environment');

            boxEl.addEventListener('click', function(){

                console.log("Click");
                window.location.href = 'index.php';

            });
        </script>
            
        <script  src="js/index.js"></script>

		<?php require("views/footer.view.php"); ?>	
		
		<!-- jQuery first, then Tether, then Bootstrap JS. -->
		<?php echo $jquery_js; ?>
		<?php echo $tether_js; ?>


		<!-- Javascripts own files  -->
		

		<?php echo $bootstrap_v4_js; ?>

		<?php echo $font_awesome_js; ?>
        
		
	</body>
</html>