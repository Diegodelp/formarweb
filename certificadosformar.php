<?php

session_start();

if(!isset($_SESSION['privilegios']) ) {
    echo '
    <script>
        alert("Porfavor debes Iniciar Sesion");
        window.location = "login";
    </script>
    ';
    session_destroy();
    die();
    }
?>

<html>
 <link rel="stylesheet" href="css/estiloeditor.css">
<body>

<div class="top-div">

        <h1>Certificados<span class='highlight'>- FORMAR</span></h1>

        <div class="search-box">
              <span>Enter image url : </span>
              <input id="input-box" type="text">
              <input id="submit" class="button" type="submit" onclick="source()">
              <button id="show-original" class="button"  onclick="showOriginal()">Toggle Original</button>
              <button id="reset-all"  class="button" onclick="resetAll()">Reset All</button>

              <img id="originalImage" src="https://source.unsplash.com/sqL5xItVgpg">

              <p class="intro-text">Try the Gradients and Blend Modes, they're Awesome !</p>

              <button class="button btn-bar" onclick="toggleMirror()">Mirror Image</button>
              <button class="button btn-bar" onclick="toggleFlip()">Flip Image</button>
              <div class="dropdown">
                    <button class="button btn-bar" onclick="toggleShapes()">Clip Path Shapes</button>
                    <div class="dropdown-shapes">
                        <div class="shapes-div">
                            <div class="shapes" data-shape="none"><p>None</p><span></span></div>
                            <div class="shapes" data-shape="polygon(50% 0%, 0% 100%, 100% 100%)"><p>Triangle</p><span></span></div>
                            <div class="shapes" data-shape="circle(50% at 50% 50%)"><p>Circle</p><span></span></div>
                            <div class="shapes" data-shape="ellipse(25% 40% at 50% 50%)"><p>Eclipse</p><span></span></div>
                            <div class="shapes" data-shape="polygon(50% 0%, 61% 35%, 98% 35%, 68% 57%, 79% 91%, 50% 70%, 21% 91%, 32% 57%, 2% 35%, 39% 35%)"><p>Star</p><span></span></div>
                            <div class="shapes" data-shape="polygon(40% 0%, 40% 20%, 100% 20%, 100% 80%, 40% 80%, 40% 100%, 0% 50%)"><p>Left Arrow</p><span></span></div>
                            <div class="shapes" data-shape="polygon(0% 20%, 60% 20%, 60% 0%, 100% 50%, 60% 100%, 60% 80%, 0% 80%)"><p>Right Arrow</p><span></span></div>
                            <div class="shapes" data-shape="polygon(25% 0%, 100% 1%, 100% 100%, 25% 100%, 0% 50%)"><p>Left Point</p><span></span></div>
                            <div class="shapes" data-shape="polygon(0% 0%, 75% 0%, 100% 50%, 75% 100%, 0% 100%)"><p>Right Point</p><span></span></div>
                            <div class="shapes" data-shape="polygon(100% 0%, 75% 50%, 100% 100%, 25% 100%, 0% 50%, 25% 0%)"><p>Left Cheveron</p><span></span></div>
                            <div class="shapes" data-shape="polygon(75% 0%, 100% 50%, 75% 100%, 0% 100%, 25% 50%, 0% 0%)"><p>Right Cheveron</p><span></span></div>
                            <div class="shapes" data-shape="polygon(20% 0%, 80% 0%, 100% 100%, 0% 100%)"><p>Trapezoid</p><span></span></div>
                            <div class="shapes" data-shape="polygon(25% 0%, 100% 0%, 75% 100%, 0% 100%)"><p>Parallelogram</p><span></span></div>
                            <div class="shapes" data-shape="polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%)"><p>Rhombus</p><span></span></div>
                        </div>
                         <div class="shapes-div">
                            <div class="shapes" data-shape="none" onclick="toggleShapes"><p id="close-menu">Close</p></div>
                            <div class="shapes" data-shape="polygon(0% 0%, 100% 0%, 100% 75%, 75% 75%, 75% 100%, 50% 75%, 0% 75%)"><p>Message</p><span></span></div>
                            <div class="shapes" data-shape="polygon(20% 0%, 0% 20%, 30% 50%, 0% 80%, 20% 100%, 50% 70%, 80% 100%, 100% 80%, 70% 50%, 100% 20%, 80% 0%, 50% 30%)"><p>Close</p><span></span></div>
                            <div class="shapes" data-shape="polygon(0% 0%, 0% 100%, 25% 100%, 25% 25%, 75% 25%, 75% 75%, 25% 75%, 25% 100%, 100% 100%, 100% 0%)"><p>Frame</p><span></span></div>
                            <div class="shapes" data-shape="inset(5% 20% 15% 10%)"><p>Inset</p><span></span></div>
                            <div class="shapes" data-shape="polygon(10% 25%, 35% 25%, 35% 0%, 65% 0%, 65% 25%, 90% 25%, 90% 50%, 65% 50%, 65% 100%, 35% 100%, 35% 50%, 10% 50%)"><p>Cross</p><span></span></div>
                            <div class="shapes" data-shape="polygon(0% 15%, 15% 15%, 15% 0%, 85% 0%, 85% 15%, 100% 15%, 100% 85%, 85% 85%, 85% 100%, 15% 100%, 15% 85%, 0% 85%)"><p>Rabbet</p><span></span></div>
                            <div class="shapes" data-shape="polygon(20% 0%, 80% 0%, 100% 20%, 100% 80%, 80% 100%, 20% 100%, 0% 80%, 0% 20%)"><p>Bevel</p><span></span></div>
                            <div class="shapes" data-shape="polygon(50% 0%, 100% 38%, 82% 100%, 18% 100%, 0% 38%)"><p>Pentagon</p><span></span></div>
                            <div class="shapes" data-shape="polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%)"><p>Hexagon</p><span></span></div>
                            <div class="shapes" data-shape="polygon(50% 0%, 90% 20%, 100% 60%, 75% 100%, 25% 100%, 0% 60%, 10% 20%)"><p>Heptagon</p><span></span></div>
                            <div class="shapes" data-shape="polygon(30% 0%, 70% 0%, 100% 30%, 100% 70%, 70% 100%, 30% 100%, 0% 70%, 0% 30%)"><p>Octogon</p><span></span></div>
                            <div class="shapes" data-shape="polygon(50% 0%, 83% 12%, 100% 43%, 94% 78%, 68% 100%, 32% 100%, 6% 78%, 0% 43%, 17% 12%)"><p>Nonagon</p><span></span></div>
                            <div class="shapes" data-shape="polygon(50% 0%, 80% 10%, 100% 35%, 100% 70%, 80% 90%, 50% 100%, 20% 90%, 0% 70%, 0% 35%, 20% 10%)"><p>Decagon</p><span></span></div>
                        </div>
                    </div>
              </div>


        </div> <!-- End Search Box -->

      </div>  <!-- End Top Div -->

      <div class="right-div">
        <div class="controls">

            <label id="advice">* Confirm color by hovering over box after choice *</label>

            <p>Basic Adjustments</p>

            <div class="sliders"><label for="brightness">Brightness:</label>
            <input id="brightness" type="range" name="brightness" min="0" max="200" value="100" data-sizing="%"><span class="slider-value">100%<span></div>
            <div class="sliders"><label for="contrast">Contrast:</label>
            <input id="contrast" type="range" name="contrast" min="50" max="200" value="100" data-sizing="%"><span class="slider-value">100%<span></div>
            <div class="sliders"><label for="saturate">Saturation:</label>
            <input id="saturate" type="range" name="saturate" min="0" max="300" value="100" data-sizing="%"><span class="slider-value">100%<span></div>
            <div class="sliders"><label for="greyscale">Greyscale:</label>
            <input id="greyscale" type="range" name="greyscale" min="0" max="100" value="0" data-sizing="%"><span class="slider-value">0%<span></div>
            <div class="sliders"><label for="sepia">Sepia:</label>
            <input id="sepia" type="range" name="sepia" min="0" max="100" value="0" data-sizing="%"><span class="slider-value">0%<span></div>
            <div class="sliders"><label for="hue-rotate">Hue Rotate:</label>
            <input id="hue-rotate" type="range" name="hue-rotate" min="0" max="360" value="0" data-sizing="deg"><span class="slider-value">0deg<span></div>
            <div class="sliders"><label for="invert">Invert:</label>
            <input id="invert" type="range" name="invert" min="0" max="100" value="0" data-sizing="%"><span class="slider-value">0%<span></div>
            <div class="sliders"><label for="blur">Blur:</label>
            <input id="blur" type="range" name="blur" min="0" max="20" value="0" data-sizing="px"></input><span class="slider-value">0px<span></div>
            <div class="sliders"><label for="opacity">Opacity:</label>
            <input id="opacity" type="range" name="opacity" min="0" max="100" value="100" data-sizing="%"><span class="slider-value">100%<span></div>
            <div class="sliders"><label for="image-opacity">All Opacity:</label>
            <input id="image-opacity"  type="range" name="image-opacity" step="0.1" min="0" max="1" value="1" ><span class="slider-value">1<span></div>

            <p>Transforms</p>

            <div class="sliders"><label for="scaleXY">Scale X &amp; Y:</label>
            <input id="scaleXY" type="range" name="scaleXY" step="0.10" min="0" max="5" value="1" data-sizing=""><span class="slider-value">1<span></div>
            <div class="sliders"><label for="scaleX">Scale X:</label>
            <input id="scaleX" type="range" name="scaleX" step="0.10" min="-1" max="3" value="1" data-sizing=""><span class="slider-value">1<span></div>
            <div class="sliders"><label for="scaleY">Scale Y:</label>
            <input id="scaleY" type="range" name="scaleY" step="0.10" min="-1" max="3" value="1" data-sizing=""><span class="slider-value">1<span></div>
            <div class="sliders"><label for="translateX">Move X:</label>
            <input id="translateX" type="range" name="translateX" min="-500" max="800" value="0" data-sizing="px"><span class="slider-value">0px<span></div>
            <div class="sliders"><label for="translateY">Move Y:</label>
            <input id="translateY" type="range" name="translateY"  min="-500" max="500" value="0" data-sizing="px"><span class="slider-value">0px<span></div>
            <div class="sliders"><label for="skewX">Skew X:</label>
            <input id="skewX" type="range" name="skewX" min="-90" max="90" value="0" data-sizing="deg"><span class="slider-value">0deg<span></div>
            <div class="sliders"><label for="skewY">Skew Y:</label>
            <input id="skewY" type="range" name="skewY"  min="-90" max="90" value="0" data-sizing="deg"><span class="slider-value">0deg<span></div>
            <div class="sliders"><label for="rotate">Rotate:</label>
            <input id="rotate" type="range" name="rotate" min="0" max="360" value="0" data-sizing="deg"><span class="slider-value">0deg<span></div>

            <p>Gradients</p>

            <div class="sliders "><label for="linear-gradient-overlay-1">Linear Gradient 1:</label>
            <input id="linear-gradient-overlay-1" class="color" name="linear-gradient-overlay-1" type="text"><span class="noSuffix"></span></div>
            <div class="sliders"><label for="linear-gradient-overlay-2">Linear Gradient 2:</label>
            <input id="linear-gradient-overlay-2" class="color" name="linear-gradient-overlay-2" type="text"><span class="noSuffix"></span></div>
            <div class="sliders"><label for="linear-gradient-overlay-opacity">Linear Opacity:</label>
            <input id="linear-gradient-overlay-opacity" type="range" name="linear-gradient-overlay-opacity" step="0.1" min="0" max="1" value="0.5"><span class="slider-value">0.5<span></div>
            <div class="sliders"><label for="linear-gradient-flow"> Linear Flow:</label>
            <input id="linear-gradient-flow" type="range" name="linear-gradient-flow" min="-150" max="100" value="0" data-sizing="%"><span class="slider-value">0%<span></div>
            <div class="sliders"><label for="linear-gradient-direction">Linear Direction:</label>
            <input id="linear-gradient-direction" type="range" name="linear-gradient-direction" min="0" max="360" value="0" data-sizing="deg"><span class="slider-value">0deg<span></div>
            <div class="sliders"><label for="radial-gradient-overlay-1">Radial Gradient 1:</label>
            <input id="radial-gradient-overlay-1" class="color"  name="radial-gradient-overlay-1" type="text"><span class="noSuffix"></span></div>
            <div class="sliders"><label for="radial-gradient-overlay-2">Radial Gradient 2:</label>
            <input id="radial-gradient-overlay-2" class="color" name="radial-gradient-overlay-2" type="text"><span class="noSuffix"></span></div>
            <div class="sliders"><label for="radial-gradient-overlay-opacity">Radial Opacity:</label>
            <input id="radial-gradient-overlay-opacity" type="range" name="radial-gradient-overlay-opacity" step="0.1" min="0" max="1" value="0.5"><span class="slider-value">0.5<span></div>
            <div class="sliders"><label for="radial-gradient-size"> Radial Size:</label>
            <input id="radial-gradient-size" type="range" name="radial-gradient-size" min="-100" max="100" value="20" data-sizing="%"><span class="slider-value">0%<span></div>
            <div class="sliders"><label for="radial-gradient-position-x">Radial Position X:</label>
            <input id="radial-gradient-position-x" type="range" name="radial-gradient-position-x" min="0" max="100" value="50" data-sizing="%"><span class="slider-value">50%<span></div>
            <div class="sliders"><label for="radial-gradient-position-y">Radial Position Y:</label>
            <input id="radial-gradient-position-y" type="range" name="radial-gradient-position-y" min="0" max="100" value="50" data-sizing="%"><span class="slider-value">50%<span></div>

            <p>Mix Blend Mode:</p>

            <div class="mix-blend-modes">
                <form>
                    <div class="radio-div"><input class="mix-blend-mode" type="radio" name="mix-blend-mode" value="none"  onclick="resetBlenMode()"><span>None</span></div>
                    <div class="radio-div"><input class="mix-blend-mode" type="radio" name="mix-blend-mode" value="screen"><span>Screen</span></div>
                    <div class="radio-div"><input class="mix-blend-mode" type="radio" name="mix-blend-mode" value="darken"><span>Darken</span></div>
                    <div class="radio-div"><input class="mix-blend-mode" type="radio" name="mix-blend-mode" value="overlay"><span>Overlay</span></div>
                    <div class="radio-div"><input class="mix-blend-mode" type="radio" name="mix-blend-mode" value="lighten"><span>Lighten</span></div>
                    <div class="radio-div"><input class="mix-blend-mode" type="radio" name="mix-blend-mode" value="color-dodge"><span>Dodge</span></div>
                    <div class="radio-div"><input class="mix-blend-mode" type="radio" name="mix-blend-mode" value="color-burn"><span>Burn</span></div>
                    <div class="radio-div"><input class="mix-blend-mode" type="radio" name="mix-blend-mode" value="hard-light"><span>Hard Light</span></div>
                    <div class="radio-div"><input class="mix-blend-mode" type="radio" name="mix-blend-mode" value="soft-light"><span>Soft Light</span></div>
                    <div class="radio-div"><input class="mix-blend-mode" type="radio" name="mix-blend-mode" value="difference"><span>Difference</span></div>
                    <div class="radio-div"><input class="mix-blend-mode" type="radio" name="mix-blend-mode" value="exclusion"><span>Exclusion</span></div>
                    <div class="radio-div"><input class="mix-blend-mode" type="radio" name="mix-blend-mode" value="hue"><span>Hue</span></div>
                    <div class="radio-div"><input class="mix-blend-mode" type="radio" name="mix-blend-mode" value="saturation"><span>Saturation</span></div>
                    <div class="radio-div"><input class="mix-blend-mode" type="radio" name="mix-blend-mode" value="color"><span>Color</span></div>
                    <div class="radio-div"><input class="mix-blend-mode" type="radio" name="mix-blend-mode" value="luminosity"><span>Luminosity</span></div>
                    <div class="radio-div"><input class="mix-blend-mode" type="radio" name="mix-blend-mode" value="multiply"><span>Multiply</span></div>
                </form>
            </div>

            <p>Text Input</p>

            <div class="text-1 controls">

                <div class="sliders"><label id="text-label" for="text-content">Enter Text:</label>
                <input id="text-content"  type="text" name="text-content"><span class="noSuffix"><span></div>
                <button id="text-on-off" class="button" onclick="addText()">Add Text</button>
                <button id="text-on-off" class="button" onclick="removeText()">Remove Text</button>
                <button id="text-on-off" class="button" onclick="toggleText()">Toggle Text</button>
                <div class="sliders"><label for="text-color">Text Color:</label>
                <input id="text-color" class="color" type="text" name="text-color"><span class="noSuffix"><span></div>
                <div class="sliders"><label for="text-shadow-color">Shadow Color:</label>
                <input id="text-shadow-color" class="color" type="text" name="text-shadow-color"><span class="noSuffix"><span></div>
                <div class="sliders"><label for="text-size">Text Size:</label>
                <input id="text-size"  type="range" name="text-size"  min="0" max="300" value="30" data-sizing="px"><span class="slider-value">30px<span></div>
                <div class="sliders"><label for="text-translate-x">Text Move X:</label>
                <input id="text-translate-x" type="range" name="text-translate-x" min="-250" max="600" value="0" data-sizing="px"><span class="slider-value">0px<span></div>
                <div class="sliders"><label for="text-translate-y">Text Move Y:</label>
                <input id="text-translate-y" type="range" name="text-translate-y" min="-150" max="500" value="0" data-sizing="px"><span class="slider-value">0px<span></div>
                <div class="sliders"><label for="text-shadow">Shadow Size:</label>
                <input id="text-shadow"  type="range" name="text-shadow"  min="-20" max="20" value="1" data-sizing="px"><span >1px<span></div>
                <div class="sliders"><label for="letter-spacing">Letter Spacing:</label>
                <input id="letter-spacing" type="range" name="letter-spacing" min="-50" max="100" value="0" data-sizing="px"><span class="slider-value">0px<span></div>
                <div class="sliders"><label for="word-spacing">Word Spacing:</label>
                <input id="word-spacing" type="range" name="word-spacing" min="-5" step="0.25" max="3" value="0.15" data-sizing="em"><span class="slider-value">0.25em<span></div>
                <div class="sliders"><label for="text-skew">Text Skew:</label>
                <input id="text-skew" type="range" name="text-skew" min="-90" max="90" value="0" data-sizing="deg"><span class="slider-value">0deg<span></div>
                <div class="sliders"><label for="text-rotate">Text Rotate:</label>
                <input id="text-rotate" type="range" name="text-rotate" min="0" max="360" value="0" data-sizing="deg"><span class="slider-value">0deg<span></div>
            </div>

              <div class="fonts">
                <div class="radio-div"><input class="font-select" type="radio" name="font-select" value="Montserrat"><span >Montserrat</span></div>
                <div class="radio-div"><input class="font-select" type="radio" name="font-select" value="Lobster"><span>Lobster</span></div>
                <div class="radio-div"><input class="font-select" type="radio" name="font-select" value="Cinzel"><span>Cinzel</span></div>
                <div class="radio-div"><input class="font-select" type="radio" name="font-select" value="Barrio"><span>Barrio</span></div>
                <div class="radio-div"><input class="font-select" type="radio" name="font-select" value="Montserrat Subrayada"><span>Subrayada</span></div>
                <div class="radio-div"><input class="font-select" type="radio" name="font-select" value="El Messiri"><span>El Messiri</span></div>
                <div class="radio-div"><input class="font-select" type="radio" name="font-select" value="Dancing Script"><span>Dancing</span></div>
                <div class="radio-div"><input class="font-select" type="radio" name="font-select" value="Keania One"><span>Keania</span></div>
                <div class="radio-div"><input class="font-select" type="radio" name="font-select" value="Pacifico"><span>Pacifico</span></div>
                <div class="radio-div"><input class="font-select" type="radio" name="font-select" value="Bubbler One"><span>Bubbler</span></div>
             </div>

            <p>Border and Background Color</p>

            <div class="sliders"><label for="background-color">Background:</label>
            <input id="background-color"  class="color" type="text" name="background-color"><span class="noSuffix"><span></div>
            <div class="sliders"><label for="border-color">Border Color:</label>
            <input id="border-color" class="color" type="text" name="border-color" value="#5092c7"><span class="noSuffix"><span></div>

           <p>Border Styles:</p>

           <div class="sliders"><label for="outer-border-radius">Outer Border:</label>
          <input id="outer-border-radius"  type="range" name="outer-border-radius" min="0" max="200" value="0" data-sizing="%"><span class="slider-value">0%<span></div>
          <div class="sliders"><label for="border-width">Border Width:</label>
          <input id="border-width" type="range" name="border-width" min="0" max="50" value="0" data-sizing="px"><span class="slider-value">0px<span></div>
          <div class="sliders"><label for="border-radius">Border Radius:</label>
          <input id="border-radius" type="range" name="border-radius" min="0" max="250" value="0" data-sizing="px"><span class="slider-value">0px<span></div>

          <div class="border-styles-div">
            <form id="border-styles">
                <div class="radio-div"><input class="border-styles" type="radio" name="border-styles" value="none"><span>None</span></div>
                <div class="radio-div"><input class="border-styles" type="radio" name="border-styles" value="solid"><span>Solid</span></div>
                <div class="radio-div"><input class="border-styles" type="radio" name="border-styles" value="double"><span>Double</span></div>
                <div class="radio-div"><input class="border-styles" type="radio" name="border-styles" value="dashed"><span>Dashed</span></div>
                <div class="radio-div"><input class="border-styles" type="radio" name="border-styles" value="groove"><span>Groove</span></div>
                <div class="radio-div"><input class="border-styles" type="radio" name="border-styles" value="ridge"><span>Ridge</span></div>
                <div class="radio-div"><input class="border-styles" type="radio" name="border-styles" value="outset"><span>Outset</span></div>
                <div class="radio-div"><input class="border-styles" type="radio" name="border-styles" value="hidden"><span>Hidden</span></div>
            </form>
          </div>

        </div>
      </div> <!-- Fixed Position to Right Hand Side  End-->

      <!-- Start of Editor Image Area -->
      <div class="bottom-div">
          <div class="background">
              <div class="image-area" id="image-area">

                 <figure class="clip-path">
                    <figure class="overlay-2">
                      <figure class="overlay-1">
                        <img id="image" src="">
                      </figure>
                    </figure>
                 </figure>

          <div id="text-area"><span id="text-1"></span></div>
          </div>
      </div>



          <button id="full-size"  class="button" onclick="fullSize()">Full-Size</button>
          <span id="full-size-text">Open as a Full Size Image to take as a ScreenShot</span>


          <!-- Start of Full Size Image Area -->
          <div id="image-full-size">
             <div class="background">
                <div class="image-area" id="image-area">

                  <figure class="clip-path">
                    <figure class="overlay-2">
                      <figure class="overlay-1">
                        <img id="image-2" src="">
                      </figure>
                    </figure>
                  </figure>

                <div id="text-area-2"><span id="text-2"></span></div>
             </div>
             <span id="close-full-screen" onclick="">&times;</span>
          <div>
    </div>  <!-- Bottom Position Div End -->

<script src="js/actioneditor.js"></script>
</body>
</html>​
