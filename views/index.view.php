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
            <a-entity camera look-controls="reverseMouseDrag: true"></a-entity>
            <a-assets>
                <img id="puerta-1" src="img/Puerta_1.png">
                <img id="puerta-2" src="img/Puerta_2.png">
                <img id="puerta-3" src="img/Puerta_3.png">
                <img id="puerta-4" src="img/Puerta_4.png">
                <img id="pared-1" src="img/Pared_1.png">
                <img id="pared-2" src="img/Pared_2.png">
                <img id="pared-3" src="img/Pared_3.png">
                <img id="pared-4" src="img/Pared_4.png">
                <img id="meseta-1" src="img/Meseta_1.png">
                <img id="meseta-2" src="img/Meseta_2.png">
                <img id="meseta-3" src="img/Meseta_3.png">
                <img id="meseta-4" src="img/Meseta_4.png">
            </a-assets>
            <a-sky src="img/360.jpg" rotation="0 125 0"
                   material="transparent: true; alphaTest: 0;"></a-sky>
            <a-sky id="puerta-1-item" src="#puerta-1" rotation="0 125 0"
                   material="transparent: true; alphaTest: 0;"></a-sky>
            <a-sky id="puerta-2-item" src="#puerta-2" rotation="0 125 0"
                   material="transparent: true; alphaTest: 0;"></a-sky>
            <a-sky id="puerta-3-item" src="#puerta-3" rotation="0 125 0"
                   material="transparent: true; alphaTest: 0;"></a-sky>
            <a-sky id="puerta-4-item"src="#puerta-4" rotation="0 125 0"
                   material="transparent: true; alphaTest: 0;"></a-sky>
            <a-sky id="pared-1-item" src="#pared-1" rotation="0 125 0"
                   material="transparent: true; alphaTest: 0;"></a-sky>
            <a-sky id="pared-2-item" src="#pared-2" rotation="0 125 0"
                   material="transparent: true; alphaTest: 0;"></a-sky>
            <a-sky id="pared-3-item" src="#pared-3" rotation="0 125 0"
                   material="transparent: true; alphaTest: 0;"></a-sky>
            <a-sky id="pared-4-item"src="#pared-4" rotation="0 125 0"
                   material="transparent: true; alphaTest: 0;"></a-sky>
            <a-sky id="meseta-1-item" src="#meseta-1" rotation="0 125 0"
                   material="transparent: true; alphaTest: 0;"></a-sky>
            <a-sky id="meseta-2-item" src="#meseta-2" rotation="0 125 0"
                   material="transparent: true; alphaTest: 0;"></a-sky>
            <a-sky id="meseta-3-item" src="#meseta-3" rotation="0 125 0"
                   material="transparent: true; alphaTest: 0;"></a-sky>
            <a-sky id="meseta-4-item"src="#meseta-4" rotation="0 125 0"
                   material="transparent: true; alphaTest: 0;"></a-sky>
            
        </a-scene>

        <div class="configurator-main-menu container-fluid px-0">
            <div id="btn-puerta" onclick="showPuerta()" class="col-12 configurator-menu-item">
                <img class="main-menu-img" src="img/cristal-b.svg" />
                <p class="main-menu-text" href="#">Puerta</p>
            </div>
            <div id="btn-pared" onclick="showPared()" class="col-12 configurator-menu-item">
                <img class="main-menu-img" src="img/pared-b.svg" />
                <p class="main-menu-text" href="#">Pared</p>
            </div>
            <div id="btn-meseta" onclick="showMeseta()" class="col-12 configurator-menu-item">
                <img class="main-menu-img" src="img/countertop-b.svg" />
                <p class="main-menu-text" href="#">Barra</p>
            </div>
        </div>
        
        <div id="menu-puerta" class="position-absolute configurator-sub-menu container-fluid px-0 invisible" >
            <div onclick="showPuertaA()" class="col-12 configurator-sub-menu-item">
                <p class="sub-menu-text" href="#" style="color: white;">Puerta 1</p>
                <img class="sub-menu-img" src="img/variaciones/variaciones-05.png" />
            </div>
            <div onclick="showPuertaB()" class="col-12 configurator-sub-menu-item">
                <p class="sub-menu-text" href="#" style="color: white;">Puerta 2</p>
                <img class="sub-menu-img" src="img/variaciones/variaciones-08.png" />
            </div>
            <div onclick="showPuertaC()" class="col-12 configurator-sub-menu-item">
                <p class="sub-menu-text" href="#" style="color: white;">Puerta 3</p>
                <img class="sub-menu-img" src="img/variaciones/variaciones-07.png" />
            </div>
            <div onclick="showPuertaD()" class="col-12 configurator-sub-menu-item">
                <p class="sub-menu-text" href="#" style="color: white;">Puerta 4</p>
                <img class="sub-menu-img" src="img/variaciones/variaciones-06.png" />
            </div>
        </div>
        
        <div id="menu-pared" class="position-absolute configurator-sub-menu container-fluid px-0 invisible" >
            <div class="col-12 configurator-sub-menu-spacer">
            </div>
            <div onclick="showParedA()" class="col-12 configurator-sub-menu-item">
                <p class="sub-menu-text" href="#" style="color: white;">Pared 1</p>
                <img class="sub-menu-img" src="img/variaciones/variaciones-09.png" />
            </div>
            <div onclick="showParedB()" class="col-12 configurator-sub-menu-item">
                <p  class="sub-menu-text" href="#" style="color: white;">Pared 2</p>
                <img class="sub-menu-img" src="img/variaciones/variaciones-12.png" />
            </div>
            <div onclick="showParedC()" class="col-12 configurator-sub-menu-item">
                <p  class="sub-menu-text" href="#" style="color: white;">Pared 3</p>
                <img class="sub-menu-img" src="img/variaciones/variaciones-11.png" />
            </div>
            <div onclick="showParedD()" class="col-12 configurator-sub-menu-item">
                <p class="sub-menu-text" href="#" style="color: white;">Pared 4</p>
                <img class="sub-menu-img" src="img/variaciones/variaciones-10.png" />
            </div>
        </div>
    
        
        <div id="menu-meseta" class="position-absolute configurator-sub-menu container-fluid px-0 invisible" >
            <div class="col-12 configurator-sub-menu-spacer">
            </div>
            <div class="col-12 configurator-sub-menu-spacer">
            </div>
            <div onclick="showMesetaA()" class="col-12 configurator-sub-menu-item">
                <p class="sub-menu-text" href="#" style="color: white;">Meseta 1</p>
                <img class="sub-menu-img" src="img/variaciones/variaciones-03.png" />
            </div>
            <div onclick="showMesetaB()" class="col-12 configurator-sub-menu-item">
                <p class="sub-menu-text" href="#" style="color: white;">Meseta 2</p>
                <img class="sub-menu-img" src="img/variaciones/variaciones-02.png" />
            </div>
            <div onclick="showMesetaC()" class="col-12 configurator-sub-menu-item">
                <p class="sub-menu-text" href="#" style="color: white;">Meseta 3</p>
                <img class="sub-menu-img" src="img/variaciones/variaciones-04.png" />
            </div>
            <div onclick="showMesetaD()" class="col-12 configurator-sub-menu-item">
                <p class="sub-menu-text" href="#" style="color: white;">Meseta 4</p>
                <img class="sub-menu-img" src="img/variaciones/variaciones-01.png" />
            </div>
        </div>

        <!--<button id="button" onclick="myFunction()">Switch</button>-->

        <script>
            var pared1 = document.querySelector("#pared-1-item");
            var pared2 = document.querySelector("#pared-2-item");
            var pared3 = document.querySelector("#pared-3-item");
            var pared4 = document.querySelector("#pared-4-item");
            pared1.setAttribute("visible",true);
            pared2.setAttribute("visible",false);
            pared3.setAttribute("visible",false);
            pared4.setAttribute("visible",false);
            var puerta1 = document.querySelector("#puerta-1-item");
            var puerta2 = document.querySelector("#puerta-2-item");
            var puerta3 = document.querySelector("#puerta-3-item");
            var puerta4 = document.querySelector("#puerta-4-item");
            puerta1.setAttribute("visible",true);
            puerta2.setAttribute("visible",false);
            puerta3.setAttribute("visible",false);
            puerta4.setAttribute("visible",false);
            var meseta1 = document.querySelector("#meseta-1-item");
            var meseta2 = document.querySelector("#meseta-2-item");
            var meseta3 = document.querySelector("#meseta-3-item");
            var meseta4 = document.querySelector("#meseta-4-item");
            meseta1.setAttribute("visible",true);
            meseta2.setAttribute("visible",false);
            meseta3.setAttribute("visible",false);
            meseta4.setAttribute("visible",false);
            var lastWallPressed=0;
            var lastMenuPressed=0;
            var puerta = false;
            var pared = false;
            var meseta = false;
            function showPuerta() {
                var mpu = document.querySelector("#menu-puerta");
                var mpa = document.querySelector("#menu-pared");
                var mme = document.querySelector("#menu-meseta");
                var button = document.querySelector("#btn-puerta");
                var btnA = document.querySelector("#btn-pared");
                var btnB = document.querySelector("#btn-meseta");
                
                if(lastMenuPressed==1){
                    if(pared){
                        mpu.classList.remove("invisible");
                        mpu.classList.add("visible-a");
                        button.classList.add("configurator-menu-item-clicked");
                        pared=false;
                    } else {
                        mpu.classList.remove("visible-a");
                        mpu.classList.add("invisible");
                        button.classList.remove("configurator-menu-item-clicked");
                        pared=true;
                    }
                    
                } else {
                    mpu.classList.remove("visible-a");
                    mpa.classList.remove("visible-a");
                    mme.classList.remove("visible-a");
                    mpu.classList.remove("invisible");
                    mpa.classList.remove("invisible");
                    mme.classList.remove("invisible");
                    btnA.classList.remove("configurator-menu-item-clicked");
                    btnB.classList.remove("configurator-menu-item-clicked");

                    mpu.classList.add("visible-a");
                    mpa.classList.add("invisible");
                    mme.classList.add("invisible");
                    
                    button.classList.add("configurator-menu-item-clicked");
                }
                
                lastMenuPressed=1;
                
            }
            
            
            function showPared() {
                var mpu = document.querySelector("#menu-puerta");
                var mpa = document.querySelector("#menu-pared");
                var mme = document.querySelector("#menu-meseta");
                var button = document.querySelector("#btn-pared");
                var btnA = document.querySelector("#btn-puerta");
                var btnB = document.querySelector("#btn-meseta");
                
                if(lastMenuPressed==2){
                    if(puerta){
                        mpa.classList.remove("invisible");
                        mpa.classList.add("visible-a");
                        button.classList.add("configurator-menu-item-clicked");
                        puerta=false;
                    } else {
                        mpa.classList.remove("visible-a");
                        mpa.classList.add("invisible");
                        button.classList.remove("configurator-menu-item-clicked");
                        puerta=true;
                    }
                } else {
                    mpu.classList.remove("visible-a");
                    mpa.classList.remove("visible-a");
                    mme.classList.remove("visible-a");
                    mpu.classList.remove("invisible");
                    mpa.classList.remove("invisible");
                    mme.classList.remove("invisible");
                    btnA.classList.remove("configurator-menu-item-clicked");
                    btnB.classList.remove("configurator-menu-item-clicked");

                    mpu.classList.add("invisible");
                    mpa.classList.add("visible-a");
                    mme.classList.add("invisible");
                    
                    button.classList.add("configurator-menu-item-clicked");
                    
                }
                
                lastMenuPressed=2;
            }
            
            function showMeseta() {
                var mpu = document.querySelector("#menu-puerta");
                var mpa = document.querySelector("#menu-pared");
                var mme = document.querySelector("#menu-meseta");
                var button = document.querySelector("#btn-meseta");
                var btnA = document.querySelector("#btn-puerta");
                var btnB = document.querySelector("#btn-pared");
                
                if(lastMenuPressed==3){
                    if(meseta){
                        mme.classList.remove("invisible");
                        mme.classList.add("visible-a");
                        button.classList.add("configurator-menu-item-clicked");
                        meseta=false;
                    } else {
                        mme.classList.remove("visible-a");
                        mme.classList.add("invisible");
                        button.classList.remove("configurator-menu-item-clicked");
                        meseta=true;
                    }
                } else {
                    mpu.classList.remove("visible-a");
                    mpa.classList.remove("visible-a");
                    mme.classList.remove("visible-a");
                    mpu.classList.remove("invisible");
                    mpa.classList.remove("invisible");
                    mme.classList.remove("invisible");
                    btnA.classList.remove("configurator-menu-item-clicked");
                    btnB.classList.remove("configurator-menu-item-clicked");

                    mpu.classList.add("invisible");
                    mpa.classList.add("invisible");
                    mme.classList.add("visible-a");
                    
                    button.classList.add("configurator-menu-item-clicked");
                    
                }
                
                lastMenuPressed=3;
            }
            
            function showPuertaA() {
                var item1 = document.querySelector("#puerta-1-item");
                var item2 = document.querySelector("#puerta-2-item");
                var item3 = document.querySelector("#puerta-3-item");
                var item4 = document.querySelector("#puerta-4-item");
                
                item1.setAttribute("visible",true);
                item2.setAttribute("visible",false);
                item3.setAttribute("visible",false);                   
                item4.setAttribute("visible",false);
            }
            
            function showPuertaB() {
                var item1 = document.querySelector("#puerta-1-item");
                var item2 = document.querySelector("#puerta-2-item");
                var item3 = document.querySelector("#puerta-3-item");
                var item4 = document.querySelector("#puerta-4-item");
                
                item1.setAttribute("visible",false);
                item2.setAttribute("visible",true);
                item3.setAttribute("visible",false);                   
                item4.setAttribute("visible",false);
                
            }
            
            function showPuertaC() {
                var item1 = document.querySelector("#puerta-1-item");
                var item2 = document.querySelector("#puerta-2-item");
                var item3 = document.querySelector("#puerta-3-item");
                var item4 = document.querySelector("#puerta-4-item");
                
                item1.setAttribute("visible",false);
                item2.setAttribute("visible",false);
                item3.setAttribute("visible",true);                   
                item4.setAttribute("visible",false);
                
            }
            
            function showPuertaD() {
                var item1 = document.querySelector("#puerta-1-item");
                var item2 = document.querySelector("#puerta-2-item");
                var item3 = document.querySelector("#puerta-3-item");
                var item4 = document.querySelector("#puerta-4-item");
                
                item1.setAttribute("visible",false);
                item2.setAttribute("visible",false);
                item3.setAttribute("visible",false);                   
                item4.setAttribute("visible",true);
                
            }
            
            function showParedA() {
                var item1 = document.querySelector("#pared-1-item");
                var item2 = document.querySelector("#pared-2-item");
                var item3 = document.querySelector("#pared-3-item");
                var item4 = document.querySelector("#pared-4-item");
                
                item1.setAttribute("visible",true);
                item2.setAttribute("visible",false);
                item3.setAttribute("visible",false);                   
                item4.setAttribute("visible",false);
                
            }
            
            function showParedB() {
                var item1 = document.querySelector("#pared-1-item");
                var item2 = document.querySelector("#pared-2-item");
                var item3 = document.querySelector("#pared-3-item");
                var item4 = document.querySelector("#pared-4-item");
                
                item1.setAttribute("visible",false);
                item2.setAttribute("visible",true);
                item3.setAttribute("visible",false);                   
                item4.setAttribute("visible",false);
                
            }
            
            function showParedC() {
                var item1 = document.querySelector("#pared-1-item");
                var item2 = document.querySelector("#pared-2-item");
                var item3 = document.querySelector("#pared-3-item");
                var item4 = document.querySelector("#pared-4-item");
                
                item1.setAttribute("visible",false);
                item2.setAttribute("visible",false);
                item3.setAttribute("visible",true);                   
                item4.setAttribute("visible",false);
                
            }
            
            function showParedD() {
                var item1 = document.querySelector("#pared-1-item");
                var item2 = document.querySelector("#pared-2-item");
                var item3 = document.querySelector("#pared-3-item");
                var item4 = document.querySelector("#pared-4-item");
                
                item1.setAttribute("visible",false);
                item2.setAttribute("visible",false);
                item3.setAttribute("visible",false);                   
                item4.setAttribute("visible",true);
                
            }
            
            function showMesetaA() {
                var item1 = document.querySelector("#meseta-1-item");
                var item2 = document.querySelector("#meseta-2-item");
                var item3 = document.querySelector("#meseta-3-item");
                var item4 = document.querySelector("#meseta-4-item");
                
                item1.setAttribute("visible",true);
                item2.setAttribute("visible",false);
                item3.setAttribute("visible",false);                   
                item4.setAttribute("visible",false);
                
            }
            
            function showMesetaB() {
                var item1 = document.querySelector("#meseta-1-item");
                var item2 = document.querySelector("#meseta-2-item");
                var item3 = document.querySelector("#meseta-3-item");
                var item4 = document.querySelector("#meseta-4-item");
                
                item1.setAttribute("visible",false);
                item2.setAttribute("visible",true);
                item3.setAttribute("visible",false);                   
                item4.setAttribute("visible",false);
                
            }
            
            function showMesetaC() {
                var item1 = document.querySelector("#meseta-1-item");
                var item2 = document.querySelector("#meseta-2-item");
                var item3 = document.querySelector("#meseta-3-item");
                var item4 = document.querySelector("#meseta-4-item");
                
                item1.setAttribute("visible",false);
                item2.setAttribute("visible",false);
                item3.setAttribute("visible",true);                   
                item4.setAttribute("visible",false);
                
            }
            
            function showMesetaD() {
                var item1 = document.querySelector("#meseta-1-item");
                var item2 = document.querySelector("#meseta-2-item");
                var item3 = document.querySelector("#meseta-3-item");
                var item4 = document.querySelector("#meseta-4-item");
                
                item1.setAttribute("visible",false);
                item2.setAttribute("visible",false);
                item3.setAttribute("visible",false);                   
                item4.setAttribute("visible",true);
                
            }
            
        </script>
            
        <script  src="js/index.js"></script>

		<?php require("views/footer.view.php"); ?>	
		
		<!-- jQuery first, then Tether, then Bootstrap JS. -->
		<?php echo $jquery_js; ?>
		<?php echo $tether_js; ?>


		<!-- Javascripts own files  -->
		<?php echo $own_file_js; ?>

		<?php echo $bootstrap_v4_js; ?>

		<?php echo $font_awesome_js; ?>
        
		
	</body>
</html>