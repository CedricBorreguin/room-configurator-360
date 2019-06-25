<?php require_once('admin/config.php'); ?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Configurador</title>

		<meta property="og:url"                content="<?php echo $URL; ?>" />
		<meta property="og:type"               content="website" />
		<meta property="og:title"              content="Title site" />
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
            
            <a-assets>
                <img id="piso-1" src="img/piso_1-min.png">
                <img id="piso-2" src="img/piso_2-min.png">
                <img id="piso-3" src="img/piso_3-min.png">
                <img id="gabinetes-1" src="img/gabinetes_1-min.png">
                <img id="gabinetes-2" src="img/gabinetes_2-min.png">
                <img id="gabinetes-3" src="img/gabinetes_3-min.png">
                <img id="meseta-1" src="img/meseta_1-min.png">
                <img id="meseta-2" src="img/meseta_2-min.png">
                <img id="meseta-3" src="img/meseta_3-min.png">
            </a-assets>
            <a-sky src="img/fondo-min.jpg" rotation="0 0 0"
                   material="transparent: true; alphaTest: 0;"></a-sky>
            <a-sky id="piso-1-item" src="#piso-1" rotation="0 0 0"
                   material="transparent: true; alphaTest: 0;"></a-sky>
            <a-sky id="piso-2-item" src="#piso-2" rotation="0 0 0"
                   material="transparent: true; alphaTest: 0;"></a-sky>
            <a-sky id="piso-3-item" src="#piso-3" rotation="0 0 0"
                   material="transparent: true; alphaTest: 0;"></a-sky>
            <a-sky id="gabinetes-1-item" src="#gabinetes-1" rotation="0 0 0"
                   material="transparent: true; alphaTest: 0;"></a-sky>
            <a-sky id="gabinetes-2-item" src="#gabinetes-2" rotation="0 0 0"
                   material="transparent: true; alphaTest: 0;"></a-sky>
            <a-sky id="gabinetes-3-item" src="#gabinetes-3" rotation="0 0 0"
                   material="transparent: true; alphaTest: 0;"></a-sky>
            <a-sky id="meseta-1-item" src="#meseta-1" rotation="0 0 0"
                   material="transparent: true; alphaTest: 0;"></a-sky>
            <a-sky id="meseta-2-item" src="#meseta-2" rotation="0 0 0"
                   material="transparent: true; alphaTest: 0;"></a-sky>
            <a-sky id="meseta-3-item" src="#meseta-3" rotation="0 0 0"
                   material="transparent: true; alphaTest: 0;"></a-sky>
            <!-- "button" -->
            <a-entity 
                      animation="property: geometry.radius; easing: linear; loop: true; from: 1.8; to: 2; dur: 2000"
                      position="-20.4 0 -46.6" rotation="0 90 0" 
                      geometry="primitive: torus; radius: 0.5; radiusTubular: 0.08; arc: 360"
                      material="side: double; color:#000000">
            </a-entity>
            
            <a-entity 
                      id="button-change-environment"
                      animation="property: geometry.radius; easing: linear; loop: true; from: 0.9; to: 1; dur: 2000"
                      class="clickable" position="-20.4 0 -46.6" rotation="0 90 0" 
                      geometry="primitive: torus; radius: 0.4; radiusTubular: 0.45; arc: 360"
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

        <div class="configurator-main-menu container-fluid px-0">
            <div id="btn-a" onclick="showMenuA()" class="col-12 configurator-menu-item">
                <img class="main-menu-img" src="img/icons/piso-b.svg" />
                <p class="main-menu-text" href="#">Piso</p>
            </div>
            <div id="btn-b" onclick="showMenuB()" class="col-12 configurator-menu-item">
                <img class="main-menu-img" src="img/icons/plank-b.svg" />
                <p class="main-menu-text" href="#">Gabinetes y puertas</p>
            </div>
            <div id="btn-c" onclick="showMenuC()" class="col-12 configurator-menu-item">
                <img class="main-menu-img" src="img/icons/countertop-b.svg" />
                <p class="main-menu-text" href="#">Meseta</p>
            </div>
        </div>
        
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
        
        <div id="menu-a" class="position-absolute configurator-sub-menu container-fluid px-0 invisible" >
            <div onclick="showMenuAOpA()" class="col-12 configurator-sub-menu-item">
                <p class="sub-menu-text" href="#" style="color: white;">Tzalam</p>
                <img class="sub-menu-img" src="img/variaciones/variaciones-07.png" />
            </div>
            <div onclick="showMenuAOpB()" class="col-12 configurator-sub-menu-item">
                <p class="sub-menu-text" href="#" style="color: white;">Nogal</p>
                <img class="sub-menu-img" src="img/variaciones/variaciones-08.png" />
            </div>
            <div onclick="showMenuAOpC()" class="col-12 configurator-sub-menu-item">
                <p class="sub-menu-text" href="#" style="color: white;">Encino</p>
                <img class="sub-menu-img" src="img/variaciones/variaciones-09.png" />
            </div>
        </div>
        
        <div id="menu-b" class="position-absolute configurator-sub-menu container-fluid px-0 invisible" >
            <div class="col-12 configurator-sub-menu-spacer">
            </div>
            <div onclick="showMenuBOpA()" class="col-12 configurator-sub-menu-item">
                <p class="sub-menu-text" href="#" style="color: white;">Blanco</p>
                <img class="sub-menu-img" src="img/variaciones/variaciones-04.png" />
            </div>
            <div onclick="showMenuBOpB()" class="col-12 configurator-sub-menu-item">
                <p  class="sub-menu-text" href="#" style="color: white;">Nogal</p>
                <img class="sub-menu-img" src="img/variaciones/variaciones-05.png" />
            </div>
            <div onclick="showMenuBOpC()" class="col-12 configurator-sub-menu-item">
                <p  class="sub-menu-text" href="#" style="color: white;">Encino</p>
                <img class="sub-menu-img" src="img/variaciones/variaciones-06.png" />
            </div>
        </div>
    
        
        <div id="menu-c" class="position-absolute configurator-sub-menu container-fluid px-0 invisible" >
            <div class="col-12 configurator-sub-menu-spacer">
            </div>
            <div class="col-12 configurator-sub-menu-spacer">
            </div>
            <div onclick="showMenuCOpA()" class="col-12 configurator-sub-menu-item">
                <p class="sub-menu-text" href="#" style="color: white;">Granito White Dallas</p>
                <img class="sub-menu-img" src="img/variaciones/variaciones-01.png" />
            </div>
            <div onclick="showMenuCOpB()" class="col-12 configurator-sub-menu-item">
                <p class="sub-menu-text" href="#" style="color: white;">Granito Sta. Cecilia</p>
                <img class="sub-menu-img" src="img/variaciones/variaciones-02.png" />
            </div>
            <div onclick="showMenuCOpC()" class="col-12 configurator-sub-menu-item">
                <p class="sub-menu-text" href="#" style="color: white;">Granito Grisal</p>
                <img class="sub-menu-img" src="img/variaciones/variaciones-03.png" />
            </div>
        </div>
        

        <script>
            
            // Component to change to a sequential color on click.
            var sceneEl = document.querySelector('a-scene');

            var boxEl = sceneEl.querySelector('#button-change-environment');

            boxEl.addEventListener('click', function(){

                console.log("Click");
                window.location.href = 'exterior.php';

            });
            
            var menuAOpA = document.querySelector("#piso-1-item");
            var menuAOpB = document.querySelector("#piso-2-item");
            var menuAOpC = document.querySelector("#piso-3-item");
            menuAOpA.setAttribute("visible",true);
            menuAOpB.setAttribute("visible",true);
            menuAOpC.setAttribute("visible",true);
            menuAOpB.setAttribute("visible",false);
            menuAOpC.setAttribute("visible",false);
            
            var menuBOpA = document.querySelector("#gabinetes-1-item");
            var menuBOpB = document.querySelector("#gabinetes-2-item");
            var menuBOpC = document.querySelector("#gabinetes-3-item");
            menuBOpA.setAttribute("visible",true);
            menuBOpB.setAttribute("visible",true);
            menuBOpC.setAttribute("visible",true);
            menuBOpB.setAttribute("visible",false);
            menuBOpC.setAttribute("visible",false);
            
            var menuCOpA = document.querySelector("#meseta-1-item");
            var menuCOpB = document.querySelector("#meseta-2-item");
            var menuCOpC = document.querySelector("#meseta-3-item");
            menuCOpA.setAttribute("visible",true);
            menuCOpB.setAttribute("visible",true);
            menuCOpC.setAttribute("visible",true);
            menuCOpB.setAttribute("visible",false);
            menuCOpC.setAttribute("visible",false);
                        
            var lastMenuPressed=0;
            var menuAOpen = false;
            var menuBOpen = false;
            var menuCOpen = false;
            
            function showMenuA() {
                var mA = document.querySelector("#menu-a");
                var mB = document.querySelector("#menu-b");
                var mC = document.querySelector("#menu-c");
                var button = document.querySelector("#btn-a");
                var btnA = document.querySelector("#btn-b");
                var btnB = document.querySelector("#btn-c");
                
                if(lastMenuPressed==1){
                    if(menuAOpen){
                        mA.classList.remove("invisible");
                        mA.classList.add("visible-a");
                        button.classList.add("configurator-menu-item-clicked");
                        menuAOpen=false;
                    } else {
                        mA.classList.remove("visible-a");
                        mA.classList.add("invisible");
                        button.classList.remove("configurator-menu-item-clicked");
                        menuAOpen=true;
                    }
                    
                } else {
                    mA.classList.remove("visible-a");
                    mB.classList.remove("visible-a");
                    mC.classList.remove("visible-a");
                    mA.classList.remove("invisible");
                    mB.classList.remove("invisible");
                    mC.classList.remove("invisible");
                    btnA.classList.remove("configurator-menu-item-clicked");
                    btnB.classList.remove("configurator-menu-item-clicked");

                    mA.classList.add("visible-a");
                    mB.classList.add("invisible");
                    mC.classList.add("invisible");
                    
                    button.classList.add("configurator-menu-item-clicked");
                }
                
                lastMenuPressed=1;
                
            }
            
            
            function showMenuB() {
                var mA = document.querySelector("#menu-a");
                var mB = document.querySelector("#menu-b");
                var mC = document.querySelector("#menu-c");
                var button = document.querySelector("#btn-b");
                var btnA = document.querySelector("#btn-a");
                var btnB = document.querySelector("#btn-c");
                
                if(lastMenuPressed==2){
                    if(menuBOpen){
                        mB.classList.remove("invisible");
                        mB.classList.add("visible-a");
                        button.classList.add("configurator-menu-item-clicked");
                        menuBOpen=false;
                    } else {
                        mB.classList.remove("visible-a");
                        mB.classList.add("invisible");
                        button.classList.remove("configurator-menu-item-clicked");
                        menuBOpen=true;
                    }
                } else {
                    mA.classList.remove("visible-a");
                    mB.classList.remove("visible-a");
                    mC.classList.remove("visible-a");
                    mA.classList.remove("invisible");
                    mB.classList.remove("invisible");
                    mC.classList.remove("invisible");
                    btnA.classList.remove("configurator-menu-item-clicked");
                    btnB.classList.remove("configurator-menu-item-clicked");

                    mA.classList.add("invisible");
                    mB.classList.add("visible-a");
                    mC.classList.add("invisible");
                    
                    button.classList.add("configurator-menu-item-clicked");
                    
                }
                
                lastMenuPressed=2;
            }
            
            function showMenuC() {
                var mA = document.querySelector("#menu-a");
                var mB = document.querySelector("#menu-b");
                var mC = document.querySelector("#menu-c");
                var button = document.querySelector("#btn-c");
                var btnA = document.querySelector("#btn-a");
                var btnB = document.querySelector("#btn-b");
                
                if(lastMenuPressed==3){
                    if(menuCOpen){
                        mC.classList.remove("invisible");
                        mC.classList.add("visible-a");
                        button.classList.add("configurator-menu-item-clicked");
                        menuCOpen=false;
                    } else {
                        mC.classList.remove("visible-a");
                        mC.classList.add("invisible");
                        button.classList.remove("configurator-menu-item-clicked");
                        menuCOpen=true;
                    }
                } else {
                    mA.classList.remove("visible-a");
                    mB.classList.remove("visible-a");
                    mC.classList.remove("visible-a");
                    mA.classList.remove("invisible");
                    mB.classList.remove("invisible");
                    mC.classList.remove("invisible");
                    btnA.classList.remove("configurator-menu-item-clicked");
                    btnB.classList.remove("configurator-menu-item-clicked");

                    mA.classList.add("invisible");
                    mB.classList.add("invisible");
                    mC.classList.add("visible-a");
                    
                    button.classList.add("configurator-menu-item-clicked");
                    
                }
                
                lastMenuPressed=3;
            }
            
            var menuAitem1 = document.querySelector("#piso-1-item");
            var menuAitem2 = document.querySelector("#piso-2-item");
            var menuAitem3 = document.querySelector("#piso-3-item");
            
            function showMenuAOpA() {
                menuAitem1.setAttribute("visible",true);
                menuAitem2.setAttribute("visible",false);
                menuAitem3.setAttribute("visible",false);                   
            }
            
            function showMenuAOpB() {
                menuAitem1.setAttribute("visible",false);
                menuAitem2.setAttribute("visible",true);
                menuAitem3.setAttribute("visible",false);                   
            }
            
            function showMenuAOpC() {
                menuAitem1.setAttribute("visible",false);
                menuAitem2.setAttribute("visible",false);
                menuAitem3.setAttribute("visible",true);                   
            }
            
            var menuBitem1 = document.querySelector("#gabinetes-1-item");
            var menuBitem2 = document.querySelector("#gabinetes-2-item");
            var menuBitem3 = document.querySelector("#gabinetes-3-item");
            
            function showMenuBOpA() {
                menuBitem1.setAttribute("visible",true);
                menuBitem2.setAttribute("visible",false);
                menuBitem3.setAttribute("visible",false);                     
            }
            
            function showMenuBOpB() {
                menuBitem1.setAttribute("visible",false);
                menuBitem2.setAttribute("visible",true);
                menuBitem3.setAttribute("visible",false);                   
            }
            
            function showMenuBOpC() {
                menuBitem1.setAttribute("visible",false);
                menuBitem2.setAttribute("visible",false);
                menuBitem3.setAttribute("visible",true);                   
            }
            
            var menuCitem1 = document.querySelector("#meseta-1-item");
            var menuCitem2 = document.querySelector("#meseta-2-item");
            var menuCitem3 = document.querySelector("#meseta-3-item");
            
            function showMenuCOpA() {
                menuCitem1.setAttribute("visible",true);
                menuCitem2.setAttribute("visible",false);
                menuCitem3.setAttribute("visible",false);                   
            }
            
            function showMenuCOpB() {
                menuCitem1.setAttribute("visible",false);
                menuCitem2.setAttribute("visible",true);
                menuCitem3.setAttribute("visible",false);                   
            }
            
            function showMenuCOpC() {
                menuCitem1.setAttribute("visible",false);
                menuCitem2.setAttribute("visible",false);
                menuCitem3.setAttribute("visible",true);                   
            }
            
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