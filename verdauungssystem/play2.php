<!DOCTYPE html>
<html lang="en">
<!-- Für Bio <3 -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="./img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./img/favicons/favicon-16x16.png">
    <link rel="manifest" href="./img/favicons/site.webmanifest">
    <link rel="mask-icon" href="./img/favicons/safari-pinned-tab.svg" color="#181818">
    <link rel="shortcut icon" href="./img/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#181818">
    <meta name="msapplication-config" content="./img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#181818">
    <title style="text-transform: capitalize;">Spiel 2, <?php print $_COOKIE["usersnmid"]; ?></title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/play.css">
    <link rel="stylesheet" href="./css/cookies.css">
    <link rel="stylesheet" href="./css/popup.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="mod-popup">
        <div class="innermodal <?php if (isset($_COOKIE["_gafigch"])) { echo "";} else{ echo "modopen";}?>">
            <header>Info</header>
            <div class="text">
                <p class="modaltext">Willkommen zum 2. Spiel! <br> Jetzt bewegst du dich durch den Körper und musst Fragen beantworten. <br><span> Figur wählen: </span></p>
                <div class="figures" style="display: flex;justify-content: space-around;padding-top: 10px;margin-bottom: -10px;">
                <svg class="fig1" style="height:25px;width:initial !important; color: #fff;cursor:pointer;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50"><path d="M 25 0 C 22.800781 0 21 1.800781 21 4 C 21 4.605469 21.160156 5.171875 21.40625 5.6875 C 20.019531 7.023438 18.464844 8.746094 17.21875 10.59375 C 15.972656 12.441406 15 14.414063 15 16.40625 C 15 19.335938 16.042969 21.550781 17.5 23.1875 C 17.1875 23.726563 17 24.328125 17 25 C 17 26.382813 17.765625 27.511719 18.875 28.21875 C 17.9375 30.066406 16.769531 31.175781 15.71875 32.15625 C 15.152344 32.6875 14.632813 33.179688 14.1875 33.78125 C 13.925781 34.136719 13.703125 34.546875 13.5625 35 L 13.3125 35 C 11.03125 35 9 36.710938 9 39 C 9 40.40625 9.753906 41.605469 10.875 42.3125 C 9.566406 43.664063 8.574219 45.089844 8.15625 46.4375 C 7.902344 47.253906 7.839844 48.109375 8.3125 48.875 C 8.785156 49.640625 9.691406 50 10.6875 50 L 39.3125 50 C 40.292969 50 41.207031 49.640625 41.65625 48.875 C 42.105469 48.109375 42.035156 47.246094 41.78125 46.4375 C 41.363281 45.097656 40.375 43.667969 39.09375 42.3125 C 40.226563 41.605469 41 40.414063 41 39 C 41 36.710938 38.949219 35 36.59375 35 L 36.4375 35 C 36.296875 34.546875 36.078125 34.136719 35.8125 33.78125 C 35.367188 33.179688 34.847656 32.679688 34.28125 32.15625 C 33.214844 31.171875 32.035156 30.089844 31.09375 28.25 C 32.222656 27.546875 33 26.398438 33 25 C 33 24.363281 32.8125 23.800781 32.53125 23.28125 C 34.015625 21.683594 35 19.332031 35 16.5 C 35 14.507813 34.042969 12.535156 32.8125 10.6875 C 31.582031 8.839844 30.050781 7.113281 28.71875 5.78125 C 28.691406 5.746094 28.660156 5.714844 28.625 5.6875 C 28.863281 5.175781 29 4.601563 29 4 C 29 1.800781 27.199219 0 25 0 Z M 25 2 C 26.117188 2 27 2.882813 27 4 C 27 5.117188 26.117188 6 25 6 C 23.882813 6 23 5.117188 23 4 C 23 2.882813 23.882813 2 25 2 Z M 22.6875 7.21875 C 23.347656 7.699219 24.128906 8 25 8 C 25.863281 8 26.65625 7.722656 27.3125 7.25 C 28.574219 8.511719 30.046875 10.117188 31.15625 11.78125 C 32.277344 13.460938 33 15.195313 33 16.5 C 33 18.792969 32.21875 20.578125 31.15625 21.78125 C 30.394531 21.289063 29.464844 21 28.5 21 L 21.5 21 C 20.558594 21 19.65625 21.28125 18.90625 21.75 C 17.777344 20.441406 17 18.800781 17 16.40625 C 17 15.101563 17.746094 13.363281 18.875 11.6875 C 19.976563 10.050781 21.398438 8.46875 22.6875 7.21875 Z M 21.5 23 L 28.5 23 C 29.945313 23 31 23.925781 31 25 C 31 26.074219 29.945313 27 28.5 27 L 21.5 27 C 20.054688 27 19 26.074219 19 25 C 19 23.925781 20.054688 23 21.5 23 Z M 20.75 28.9375 C 20.996094 28.976563 21.246094 29 21.5 29 L 28.5 29 C 28.742188 29 28.984375 28.972656 29.21875 28.9375 C 30.339844 31.222656 31.804688 32.605469 32.90625 33.625 C 33.476563 34.152344 33.941406 34.59375 34.21875 34.96875 C 34.230469 34.984375 34.238281 34.988281 34.25 35 L 15.75 35 C 15.761719 34.988281 15.769531 34.984375 15.78125 34.96875 C 16.058594 34.59375 16.523438 34.15625 17.09375 33.625 C 18.183594 32.605469 19.636719 31.214844 20.75 28.9375 Z M 13.3125 37 L 36.59375 37 C 38.039063 37 39 37.886719 39 39 C 39 40.113281 38.007813 41 36.6875 41 L 13.3125 41 C 11.992188 41 11 40.113281 11 39 C 11 37.886719 11.992188 37 13.3125 37 Z M 13.03125 42.96875 C 13.125 42.976563 13.21875 43 13.3125 43 L 36.6875 43 C 36.773438 43 36.851563 42.972656 36.9375 42.96875 C 38.429688 44.375 39.523438 46.007813 39.84375 47.03125 C 40.003906 47.546875 39.960938 47.804688 39.9375 47.84375 C 39.914063 47.882813 39.882813 48 39.3125 48 L 10.6875 48 C 10.085938 48 10.027344 47.886719 10 47.84375 C 9.972656 47.800781 9.902344 47.542969 10.0625 47.03125 C 10.378906 46.019531 11.496094 44.375 13.03125 42.96875 Z"></path></svg>
                <svg class="fig2" style="height:25px;width:initial !important; color: #fff;cursor:pointer;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50"><path d="M 25 2 C 21.699219 2 19 4.699219 19 8 C 19 10.261719 20.265625 12.238281 22.125 13.261719 C 14.121094 14.632813 8 21.609375 8 30 C 8 31.644531 9.355469 33 11 33 C 12.644531 33 14 31.644531 14 30 C 14 28.652344 14.289063 27.386719 14.734375 26.195313 C 15.152344 27.929688 15.867188 29.515625 17.007813 30.8125 L 17.007813 44.5 C 17.007813 46.421875 18.585938 48 20.507813 48 C 22.429688 48 24.007813 46.421875 24.007813 44.5 L 24.007813 34.398438 C 24.339844 34.429688 24.660156 34.5 25 34.5 C 25.34375 34.5 25.664063 34.429688 26 34.394531 L 26 44.5 C 26 46.421875 27.578125 48 29.5 48 C 31.421875 48 33 46.421875 33 44.5 L 33 30.800781 C 34.136719 29.511719 34.851563 27.925781 35.265625 26.195313 C 35.710938 27.386719 36 28.652344 36 30 C 36 31.65625 37.367188 33 38.996094 33 C 40.363281 33 41.34375 31.976563 41.699219 30.714844 C 41.890625 30.527344 42 30.269531 42 30 C 42 21.609375 35.878906 14.632813 27.875 13.261719 C 29.734375 12.238281 31 10.261719 31 8 C 31 4.699219 28.300781 2 25 2 Z M 25 4 C 27.222656 4 29 5.777344 29 8 C 29 10.222656 27.222656 12 25 12 C 22.777344 12 21 10.222656 21 8 C 21 5.777344 22.777344 4 25 4 Z M 24.9375 15 L 25.0625 15 C 33.3125 15.035156 39.984375 21.71875 40 29.972656 C 39.996094 29.984375 39.996094 29.992188 39.996094 30 C 39.996094 30.5625 39.558594 31 38.996094 31 C 38.417969 31 38 30.601563 38 30 C 38 27.15625 37.082031 24.519531 35.53125 22.375 C 35.265625 22.015625 34.792969 21.871094 34.375 22.027344 C 33.953125 22.179688 33.6875 22.597656 33.722656 23.042969 C 33.742188 23.273438 33.75 23.511719 33.75 23.75 C 33.75 26.121094 32.808594 28.261719 31.28125 29.839844 C 31.101563 30.023438 31 30.273438 31 30.53125 L 31 44.5 C 31 45.339844 30.339844 46 29.5 46 C 28.660156 46 28 45.339844 28 44.5 L 28 33.296875 C 28 32.992188 27.863281 32.707031 27.632813 32.515625 C 27.398438 32.328125 27.089844 32.253906 26.796875 32.3125 C 26.214844 32.433594 25.617188 32.5 25 32.5 C 24.386719 32.5 23.789063 32.4375 23.210938 32.316406 C 22.917969 32.253906 22.609375 32.332031 22.375 32.519531 C 22.144531 32.710938 22.007813 32.996094 22.007813 33.296875 L 22.007813 44.5 C 22.007813 45.339844 21.347656 46 20.507813 46 C 19.667969 46 19.007813 45.339844 19.007813 44.5 L 19.007813 30.542969 C 19.007813 30.28125 18.90625 30.03125 18.722656 29.84375 C 17.191406 28.269531 16.25 26.125 16.25 23.75 C 16.25 23.511719 16.257813 23.277344 16.277344 23.039063 C 16.3125 22.59375 16.042969 22.179688 15.625 22.027344 C 15.203125 21.871094 14.734375 22.015625 14.46875 22.375 C 12.917969 24.519531 12 27.15625 12 30 C 12 30.5625 11.5625 31 11 31 C 10.4375 31 10 30.5625 10 30 C 10 21.730469 16.675781 15.035156 24.9375 15 Z"></path></svg>
                <svg class="fig3" style="height:25px;width:initial !important; color: #fff;cursor:pointer;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50"><path d="M 17 3 C 15.894531 3 15 3.894531 15 5 L 15 10 L 13 10 C 9.132813 10 6 13.132813 6 17 L 6 36 C 6 39.867188 9.132813 43 13 43 L 13 47 L 37 47 L 37 43 C 40.867188 43 44 39.867188 44 36 L 44 17 C 44 13.132813 40.867188 10 37 10 L 35 10 L 35 5 C 35 3.894531 34.105469 3 33 3 Z M 17 5 L 33 5 L 33 10 L 17 10 Z M 13 12 L 37 12 C 39.757813 12 42 14.242188 42 17 L 42 36 C 42 38.757813 39.757813 41 37 41 L 13 41 C 10.242188 41 8 38.757813 8 36 L 8 17 C 8 14.242188 10.242188 12 13 12 Z M 19 22 C 17.894531 22 17 22.894531 17 24 C 17 25.105469 17.894531 26 19 26 C 20.105469 26 21 25.105469 21 24 C 21 22.894531 20.105469 22 19 22 Z M 31 22 C 29.894531 22 29 22.894531 29 24 C 29 25.105469 29.894531 26 31 26 C 32.105469 26 33 25.105469 33 24 C 33 22.894531 32.105469 22 31 22 Z M 19.3125 30.96875 C 19.25 30.972656 19.1875 30.984375 19.125 31 C 18.738281 31.078125 18.429688 31.375 18.34375 31.757813 C 18.257813 32.144531 18.402344 32.542969 18.71875 32.78125 C 20.4375 34.171875 22.621094 35 25 35 C 27.375 35 29.5625 34.171875 31.28125 32.78125 C 31.714844 32.4375 31.78125 31.804688 31.4375 31.375 C 31.09375 30.941406 30.460938 30.875 30.03125 31.21875 C 28.65625 32.332031 26.910156 33 25 33 C 23.089844 33 21.34375 32.332031 19.96875 31.21875 C 19.789063 31.058594 19.554688 30.96875 19.3125 30.96875 Z M 15 43 L 35 43 L 35 45 L 15 45 Z"></path></svg></div>
                <center><button id="accepted" class="btnsubm bntfigsubm">Bestätigen</button></center>
            </div>
        </div>
    </div>
    <div class="dicemodal">
        <div class="inndice">
            <div class="dicewrapper">
                <img id="die-1">
            </div>
            <p id="total"></p>
            <button id="rolldc" class="dcbtn">Würfeln...</button>
        </div>
    </div>
    <div class="dicescel" id="dicescel">
        <p class="chngdcsec">Los</p>
    </div>
    <div class="dicescel" id="dicescel1" style="transform:scale(0);">
        <p class="chngdcsec">Weiter</p>
    </div>
    <div class="overlay <?php if (isset($_COOKIE["_gafigch"])) { echo "";} else{ echo "modopen";}?>"></div>
    <section class="mainbodysection">
        <div class="main-game-pt2">
            <div class="svgcont">
                <svg 
                xmlns:dc="http://purl.org/dc/elements/1.1/"
                xmlns:cc="http://creativecommons.org/ns#"
                xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                xmlns:svg="http://www.w3.org/2000/svg"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
                xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
                width="175.57045mm"
                height="229.19267mm"
                viewBox="0 0 622.10002 812.10002"
                id="svg29157"
                class="zommam <?php if (isset($_COOKIE["_gafigch"])) { echo "completedzm";} else{ echo "";}?>"
                version="1.1"
                inkscape:version="0.91 r13725"
                sodipodi:docname="Digestive_system_diagram_de.svg"
                zoomam>
                <defs
                    id="defs29159">
                    <marker
                    inkscape:stockid="DotM"
                    orient="auto"
                    refY="0"
                    refX="0"
                    id="marker20298"
                    style="overflow:visible"
                    inkscape:isstock="true">
                    <path
                        inkscape:connector-curvature="0"
                        id="path20300"
                        d="m -2.5,-1 c 0,2.76 -2.24,5 -5,5 -2.76,0 -5,-2.24 -5,-5 0,-2.76 2.24,-5 5,-5 2.76,0 5,2.24 5,5 z"
                        style="fill:#000000;fill-opacity:1;fill-rule:evenodd;stroke:#fff;stroke-width:1pt;stroke-opacity:1"
                        transform="matrix(0.4,0,0,0.4,2.96,0.4)" />
                    </marker>
                    <marker
                    inkscape:isstock="true"
                    style="overflow:visible"
                    id="marker19586"
                    refX="0"
                    refY="0"
                    orient="auto"
                    inkscape:stockid="DotM"
                    inkscape:collect="always">
                    <path
                        transform="matrix(0.4,0,0,0.4,2.96,0.4)"
                        style="fill:#000000;fill-opacity:1;fill-rule:evenodd;stroke:#fff;stroke-width:1pt;stroke-opacity:1"
                        d="m -2.5,-1 c 0,2.76 -2.24,5 -5,5 -2.76,0 -5,-2.24 -5,-5 0,-2.76 2.24,-5 5,-5 2.76,0 5,2.24 5,5 z"
                        id="path19588"
                        inkscape:connector-curvature="0" />
                    </marker>
                    <marker
                    inkscape:stockid="DotM"
                    orient="auto"
                    refY="0"
                    refX="0"
                    id="marker19070"
                    style="overflow:visible"
                    inkscape:isstock="true">
                    <path
                        inkscape:connector-curvature="0"
                        id="path19072"
                        d="m -2.5,-1 c 0,2.76 -2.24,5 -5,5 -2.76,0 -5,-2.24 -5,-5 0,-2.76 2.24,-5 5,-5 2.76,0 5,2.24 5,5 z"
                        style="fill:#000000;fill-opacity:1;fill-rule:evenodd;stroke:#fff;stroke-width:1pt;stroke-opacity:1"
                        transform="matrix(0.4,0,0,0.4,2.96,0.4)" />
                    </marker>
                    <marker
                    inkscape:isstock="true"
                    style="overflow:visible"
                    id="marker5262"
                    refX="0"
                    refY="0"
                    orient="auto"
                    inkscape:stockid="DotM"
                    inkscape:collect="always">
                    <path
                        transform="matrix(0.4,0,0,0.4,2.96,0.4)"
                        style="fill:#000000;fill-opacity:1;fill-rule:evenodd;stroke:#fff;stroke-width:1pt;stroke-opacity:1"
                        d="m -2.5,-1 c 0,2.76 -2.24,5 -5,5 -2.76,0 -5,-2.24 -5,-5 0,-2.76 2.24,-5 5,-5 2.76,0 5,2.24 5,5 z"
                        id="path5264"
                        inkscape:connector-curvature="0" />
                    </marker>
                    <marker
                    inkscape:stockid="DotM"
                    orient="auto"
                    refY="0"
                    refX="0"
                    id="marker33917"
                    style="overflow:visible"
                    inkscape:isstock="true"
                    inkscape:collect="always">
                    <path
                        inkscape:connector-curvature="0"
                        id="path33919"
                        d="m -2.5,-1 c 0,2.76 -2.24,5 -5,5 -2.76,0 -5,-2.24 -5,-5 0,-2.76 2.24,-5 5,-5 2.76,0 5,2.24 5,5 z"
                        style="fill:#000000;fill-opacity:1;fill-rule:evenodd;stroke:#fff;stroke-width:1pt;stroke-opacity:1"
                        transform="matrix(0.4,0,0,0.4,2.96,0.4)" />
                    </marker>
                    <marker
                    inkscape:isstock="true"
                    style="overflow:visible"
                    id="marker33757"
                    refX="0"
                    refY="0"
                    orient="auto"
                    inkscape:stockid="DotM"
                    inkscape:collect="always">
                    <path
                        transform="matrix(0.4,0,0,0.4,2.96,0.4)"
                        style="fill:#000000;fill-opacity:1;fill-rule:evenodd;stroke:#fff;stroke-width:1pt;stroke-opacity:1"
                        d="m -2.5,-1 c 0,2.76 -2.24,5 -5,5 -2.76,0 -5,-2.24 -5,-5 0,-2.76 2.24,-5 5,-5 2.76,0 5,2.24 5,5 z"
                        id="path33759"
                        inkscape:connector-curvature="0" />
                    </marker>
                    <marker
                    inkscape:stockid="DotM"
                    orient="auto"
                    refY="0"
                    refX="0"
                    id="marker33603"
                    style="overflow:visible"
                    inkscape:isstock="true"
                    inkscape:collect="always">
                    <path
                        inkscape:connector-curvature="0"
                        id="path33605"
                        d="m -2.5,-1 c 0,2.76 -2.24,5 -5,5 -2.76,0 -5,-2.24 -5,-5 0,-2.76 2.24,-5 5,-5 2.76,0 5,2.24 5,5 z"
                        style="fill:#000000;fill-opacity:1;fill-rule:evenodd;stroke:#fff;stroke-width:1pt;stroke-opacity:1"
                        transform="matrix(0.4,0,0,0.4,2.96,0.4)" />
                    </marker>
                    <marker
                    inkscape:isstock="true"
                    style="overflow:visible"
                    id="marker33455"
                    refX="0"
                    refY="0"
                    orient="auto"
                    inkscape:stockid="DotM"
                    inkscape:collect="always">
                    <path
                        transform="matrix(0.4,0,0,0.4,2.96,0.4)"
                        style="fill:#000000;fill-opacity:1;fill-rule:evenodd;stroke:#fff;stroke-width:1pt;stroke-opacity:1"
                        d="m -2.5,-1 c 0,2.76 -2.24,5 -5,5 -2.76,0 -5,-2.24 -5,-5 0,-2.76 2.24,-5 5,-5 2.76,0 5,2.24 5,5 z"
                        id="path33457"
                        inkscape:connector-curvature="0" />
                    </marker>
                    <marker
                    inkscape:stockid="DotM"
                    orient="auto"
                    refY="0"
                    refX="0"
                    id="marker22341"
                    style="overflow:visible"
                    inkscape:isstock="true"
                    inkscape:collect="always">
                    <path
                        inkscape:connector-curvature="0"
                        id="path22343"
                        d="m -2.5,-1 c 0,2.76 -2.24,5 -5,5 -2.76,0 -5,-2.24 -5,-5 0,-2.76 2.24,-5 5,-5 2.76,0 5,2.24 5,5 z"
                        style="fill:#000000;fill-opacity:1;fill-rule:evenodd;stroke:#fff;stroke-width:1pt;stroke-opacity:1"
                        transform="matrix(0.4,0,0,0.4,2.96,0.4)" />
                    </marker>
                    <marker
                    inkscape:isstock="true"
                    style="overflow:visible"
                    id="marker20714"
                    refX="0"
                    refY="0"
                    orient="auto"
                    inkscape:stockid="DotM">
                    <path
                        transform="matrix(0.4,0,0,0.4,2.96,0.4)"
                        style="fill:#000000;fill-opacity:1;fill-rule:evenodd;stroke:#fff;stroke-width:1pt;stroke-opacity:1"
                        d="m -2.5,-1 c 0,2.76 -2.24,5 -5,5 -2.76,0 -5,-2.24 -5,-5 0,-2.76 2.24,-5 5,-5 2.76,0 5,2.24 5,5 z"
                        id="path20716"
                        class=""
                        inkscape:connector-curvature="0" />
                    </marker>
                    <marker
                    inkscape:stockid="DotM"
                    orient="auto"
                    refY="0"
                    refX="0"
                    id="marker16152"
                    style="overflow:visible"
                    inkscape:isstock="true">
                    <path
                        inkscape:connector-curvature="0"
                        id="path16154"
                        d="m -2.5,-1 c 0,2.76 -2.24,5 -5,5 -2.76,0 -5,-2.24 -5,-5 0,-2.76 2.24,-5 5,-5 2.76,0 5,2.24 5,5 z"
                        style="fill:#000000;fill-opacity:1;fill-rule:evenodd;stroke:#fff;stroke-width:1pt;stroke-opacity:1"
                        transform="matrix(0.4,0,0,0.4,2.96,0.4)" />
                    </marker>
                    <marker
                    inkscape:isstock="true"
                    style="overflow:visible"
                    id="marker15406"
                    refX="0"
                    refY="0"
                    orient="auto"
                    inkscape:stockid="DotM">
                    <path
                        transform="matrix(0.4,0,0,0.4,2.96,0.4)"
                        style="fill:#000000;fill-opacity:1;fill-rule:evenodd;stroke:#fff;stroke-width:1pt;stroke-opacity:1"
                        d="m -2.5,-1 c 0,2.76 -2.24,5 -5,5 -2.76,0 -5,-2.24 -5,-5 0,-2.76 2.24,-5 5,-5 2.76,0 5,2.24 5,5 z"
                        id="path15408"
                        inkscape:connector-curvature="0" />
                    </marker>
                    <marker
                    inkscape:stockid="DotM"
                    orient="auto"
                    refY="0"
                    refX="0"
                    id="marker10160"
                    style="overflow:visible"
                    inkscape:isstock="true">
                    <path
                        id="path10162"
                        d="m -2.5,-1 c 0,2.76 -2.24,5 -5,5 -2.76,0 -5,-2.24 -5,-5 0,-2.76 2.24,-5 5,-5 2.76,0 5,2.24 5,5 z"
                        style="fill:#000000;fill-opacity:1;fill-rule:evenodd;stroke:#fff;stroke-width:1pt;stroke-opacity:1"
                        transform="matrix(0.4,0,0,0.4,2.96,0.4)"
                        inkscape:connector-curvature="0" />
                    </marker>
                    <marker
                    inkscape:stockid="DotM"
                    orient="auto"
                    refY="0"
                    refX="0"
                    id="marker11296"
                    style="overflow:visible"
                    inkscape:isstock="true">
                    <path
                        id="path11298"
                        d="m -2.5,-1 c 0,2.76 -2.24,5 -5,5 -2.76,0 -5,-2.24 -5,-5 0,-2.76 2.24,-5 5,-5 2.76,0 5,2.24 5,5 z"
                        style="fill:#000000;fill-opacity:1;fill-rule:evenodd;stroke:#fff;stroke-width:1pt;stroke-opacity:1"
                        transform="matrix(0.4,0,0,0.4,2.96,0.4)"
                        inkscape:connector-curvature="0" />
                    </marker>
                    <marker
                    inkscape:isstock="true"
                    style="overflow:visible"
                    id="marker10783"
                    refX="0"
                    refY="0"
                    orient="auto"
                    inkscape:stockid="DotM">
                    <path
                        transform="matrix(0.4,0,0,0.4,2.96,0.4)"
                        style="fill:#000000;fill-opacity:1;fill-rule:evenodd;stroke:#fff;stroke-width:1pt;stroke-opacity:1"
                        d="m -2.5,-1 c 0,2.76 -2.24,5 -5,5 -2.76,0 -5,-2.24 -5,-5 0,-2.76 2.24,-5 5,-5 2.76,0 5,2.24 5,5 z"
                        id="path10785"
                        inkscape:connector-curvature="0" />
                    </marker>
                    <marker
                    inkscape:isstock="true"
                    style="overflow:visible"
                    id="marker10900"
                    refX="0"
                    refY="0"
                    orient="auto"
                    inkscape:stockid="DotM">
                    <path
                        transform="matrix(0.4,0,0,0.4,2.96,0.4)"
                        style="fill:#000000;fill-opacity:1;fill-rule:evenodd;stroke:#fff;stroke-width:1pt;stroke-opacity:1"
                        d="m -2.5,-1 c 0,2.76 -2.24,5 -5,5 -2.76,0 -5,-2.24 -5,-5 0,-2.76 2.24,-5 5,-5 2.76,0 5,2.24 5,5 z"
                        id="path10902"
                        inkscape:connector-curvature="0" />
                    </marker>
                    <marker
                    inkscape:isstock="true"
                    style="overflow:visible"
                    id="marker10887"
                    refX="0"
                    refY="0"
                    orient="auto"
                    inkscape:stockid="DotM">
                    <path
                        transform="matrix(0.4,0,0,0.4,2.96,0.4)"
                        style="fill:#000000;fill-opacity:1;fill-rule:evenodd;stroke:#fff;stroke-width:1pt;stroke-opacity:1"
                        d="m -2.5,-1 c 0,2.76 -2.24,5 -5,5 -2.76,0 -5,-2.24 -5,-5 0,-2.76 2.24,-5 5,-5 2.76,0 5,2.24 5,5 z"
                        id="path10889"
                        inkscape:connector-curvature="0" />
                    </marker>
                    <marker
                    inkscape:isstock="true"
                    style="overflow:visible"
                    id="marker10874"
                    refX="0"
                    refY="0"
                    orient="auto"
                    inkscape:stockid="DotM">
                    <path
                        transform="matrix(0.4,0,0,0.4,2.96,0.4)"
                        style="fill:#000000;fill-opacity:1;fill-rule:evenodd;stroke:#fff;stroke-width:1pt;stroke-opacity:1"
                        d="m -2.5,-1 c 0,2.76 -2.24,5 -5,5 -2.76,0 -5,-2.24 -5,-5 0,-2.76 2.24,-5 5,-5 2.76,0 5,2.24 5,5 z"
                        id="path10876"
                        inkscape:connector-curvature="0" />
                    </marker>
                    <marker
                    inkscape:isstock="true"
                    style="overflow:visible"
                    id="marker10952"
                    refX="0"
                    refY="0"
                    orient="auto"
                    inkscape:stockid="DotM">
                    <path
                        transform="matrix(0.4,0,0,0.4,2.96,0.4)"
                        style="fill:#000000;fill-opacity:1;fill-rule:evenodd;stroke:#fff;stroke-width:1pt;stroke-opacity:1"
                        d="m -2.5,-1 c 0,2.76 -2.24,5 -5,5 -2.76,0 -5,-2.24 -5,-5 0,-2.76 2.24,-5 5,-5 2.76,0 5,2.24 5,5 z"
                        id="path10954"
                        inkscape:connector-curvature="0" />
                    </marker>
                    <marker
                    inkscape:isstock="true"
                    style="overflow:visible"
                    id="marker10913"
                    refX="0"
                    refY="0"
                    orient="auto"
                    inkscape:stockid="DotM">
                    <path
                        transform="matrix(0.4,0,0,0.4,2.96,0.4)"
                        style="fill:#000000;fill-opacity:1;fill-rule:evenodd;stroke:#fff;stroke-width:1pt;stroke-opacity:1"
                        d="m -2.5,-1 c 0,2.76 -2.24,5 -5,5 -2.76,0 -5,-2.24 -5,-5 0,-2.76 2.24,-5 5,-5 2.76,0 5,2.24 5,5 z"
                        id="path10915"
                        inkscape:connector-curvature="0" />
                    </marker>
                    <marker
                    inkscape:isstock="true"
                    style="overflow:visible"
                    id="marker10796"
                    refX="0"
                    refY="0"
                    orient="auto"
                    inkscape:stockid="DotM">
                    <path
                        transform="matrix(0.4,0,0,0.4,2.96,0.4)"
                        style="fill:#000000;fill-opacity:1;fill-rule:evenodd;stroke:#fff;stroke-width:1pt;stroke-opacity:1"
                        d="m -2.5,-1 c 0,2.76 -2.24,5 -5,5 -2.76,0 -5,-2.24 -5,-5 0,-2.76 2.24,-5 5,-5 2.76,0 5,2.24 5,5 z"
                        id="path10798"
                        inkscape:connector-curvature="0" />
                    </marker>
                    <marker
                    inkscape:isstock="true"
                    style="overflow:visible"
                    id="marker10835"
                    refX="0"
                    refY="0"
                    orient="auto"
                    inkscape:stockid="DotM">
                    <path
                        transform="matrix(0.4,0,0,0.4,2.96,0.4)"
                        style="fill:#000000;fill-opacity:1;fill-rule:evenodd;stroke:#fff;stroke-width:1pt;stroke-opacity:1"
                        d="m -2.5,-1 c 0,2.76 -2.24,5 -5,5 -2.76,0 -5,-2.24 -5,-5 0,-2.76 2.24,-5 5,-5 2.76,0 5,2.24 5,5 z"
                        id="path10837"
                        inkscape:connector-curvature="0" />
                    </marker>
                    <marker
                    inkscape:isstock="true"
                    style="overflow:visible"
                    id="marker10822"
                    refX="0"
                    refY="0"
                    orient="auto"
                    inkscape:stockid="DotM">
                    <path
                        transform="matrix(0.4,0,0,0.4,2.96,0.4)"
                        style="fill:#000000;fill-opacity:1;fill-rule:evenodd;stroke:#fff;stroke-width:1pt;stroke-opacity:1"
                        d="m -2.5,-1 c 0,2.76 -2.24,5 -5,5 -2.76,0 -5,-2.24 -5,-5 0,-2.76 2.24,-5 5,-5 2.76,0 5,2.24 5,5 z"
                        id="path10824"
                        inkscape:connector-curvature="0" />
                    </marker>
                    <marker
                    inkscape:isstock="true"
                    style="overflow:visible"
                    id="marker10809"
                    refX="0"
                    refY="0"
                    orient="auto"
                    inkscape:stockid="DotM">
                    <path
                        transform="matrix(0.4,0,0,0.4,2.96,0.4)"
                        style="fill:#000000;fill-opacity:1;fill-rule:evenodd;stroke:#fff;stroke-width:1pt;stroke-opacity:1"
                        d="m -2.5,-1 c 0,2.76 -2.24,5 -5,5 -2.76,0 -5,-2.24 -5,-5 0,-2.76 2.24,-5 5,-5 2.76,0 5,2.24 5,5 z"
                        id="path10811"
                        inkscape:connector-curvature="0" />
                    </marker>
                    <marker
                    inkscape:isstock="true"
                    style="overflow:visible"
                    id="marker10770"
                    refX="0"
                    refY="0"
                    orient="auto"
                    inkscape:stockid="DotM">
                    <path
                        transform="matrix(0.4,0,0,0.4,2.96,0.4)"
                        style="fill:#000000;fill-opacity:1;fill-rule:evenodd;stroke:#fff;stroke-width:1pt;stroke-opacity:1"
                        d="m -2.5,-1 c 0,2.76 -2.24,5 -5,5 -2.76,0 -5,-2.24 -5,-5 0,-2.76 2.24,-5 5,-5 2.76,0 5,2.24 5,5 z"
                        id="path10772"
                        inkscape:connector-curvature="0" />
                    </marker>
                    <marker
                    inkscape:isstock="true"
                    style="overflow:visible"
                    id="marker10744"
                    refX="0"
                    refY="0"
                    orient="auto"
                    inkscape:stockid="DotM">
                    <path
                        transform="matrix(0.4,0,0,0.4,2.96,0.4)"
                        style="fill:#000000;fill-opacity:1;fill-rule:evenodd;stroke:#fff;stroke-width:1pt;stroke-opacity:1"
                        d="m -2.5,-1 c 0,2.76 -2.24,5 -5,5 -2.76,0 -5,-2.24 -5,-5 0,-2.76 2.24,-5 5,-5 2.76,0 5,2.24 5,5 z"
                        id="path10746"
                        inkscape:connector-curvature="0" />
                    </marker>
                    <marker
                    inkscape:isstock="true"
                    style="overflow:visible"
                    id="marker10718"
                    refX="0"
                    refY="0"
                    orient="auto"
                    inkscape:stockid="DotM">
                    <path
                        transform="matrix(0.4,0,0,0.4,2.96,0.4)"
                        style="fill:#000000;fill-opacity:1;fill-rule:evenodd;stroke:#fff;stroke-width:1pt;stroke-opacity:1"
                        d="m -2.5,-1 c 0,2.76 -2.24,5 -5,5 -2.76,0 -5,-2.24 -5,-5 0,-2.76 2.24,-5 5,-5 2.76,0 5,2.24 5,5 z"
                        id="path10720"
                        inkscape:connector-curvature="0" />
                    </marker>
                    <marker
                    inkscape:isstock="true"
                    style="overflow:visible"
                    id="marker10731"
                    refX="0"
                    refY="0"
                    orient="auto"
                    inkscape:stockid="DotM">
                    <path
                        transform="matrix(0.4,0,0,0.4,2.96,0.4)"
                        style="fill:#000000;fill-opacity:1;fill-rule:evenodd;stroke:#fff;stroke-width:1pt;stroke-opacity:1"
                        d="m -2.5,-1 c 0,2.76 -2.24,5 -5,5 -2.76,0 -5,-2.24 -5,-5 0,-2.76 2.24,-5 5,-5 2.76,0 5,2.24 5,5 z"
                        id="path10733"
                        inkscape:connector-curvature="0" />
                    </marker>
                    <linearGradient
                    y2="864.57129"
                    x2="353.1377"
                    y1="557.91602"
                    x1="452.14749"
                    gradientUnits="userSpaceOnUse"
                    id="XMLID_8_">
                    <stop
                        id="stop23"
                        style="stop-color:#6C9D31"
                        offset="0" />
                    <stop
                        id="stop25"
                        style="stop-color:#6C9C32"
                        offset="0.2906" />
                    <stop
                        id="stop27"
                        style="stop-color:#6B9A36"
                        offset="0.4226" />
                    <stop
                        id="stop29"
                        style="stop-color:#67963E"
                        offset="0.5227" />
                    <stop
                        id="stop31"
                        style="stop-color:#62914A"
                        offset="0.6066" />
                    <stop
                        id="stop33"
                        style="stop-color:#5C8B59"
                        offset="0.6803" />
                    <stop
                        id="stop35"
                        style="stop-color:#528368"
                        offset="0.747" />
                    <stop
                        id="stop37"
                        style="stop-color:#467977"
                        offset="0.8084" />
                    <stop
                        id="stop39"
                        style="stop-color:#356D87"
                        offset="0.8656" />
                    <stop
                        id="stop41"
                        style="stop-color:#1C6095"
                        offset="0.9173" />
                    <stop
                        id="stop43"
                        style="stop-color:#0054A6"
                        offset="0.9607" />
                    <stop
                        id="stop45"
                        style="stop-color:#2E4BA0"
                        offset="0.9696" />
                    <stop
                        id="stop47"
                        style="stop-color:#5A3795"
                        offset="0.9893" />
                    <stop
                        id="stop49"
                        style="stop-color:#662D91"
                        offset="1" />
                    </linearGradient>
                    <inkscape:path-effect
                    effect="skeletal"
                    id="path-effect3956-8-4-1"
                    is_visible="true"
                    pattern="m 867.55667,515.13262 1.38896,40.4061 -2.77792,0 z"
                    copytype="single_stretched"
                    prop_scale="1"
                    scale_y_rel="false"
                    spacing="0"
                    normal_offset="0"
                    tang_offset="0"
                    prop_units="false"
                    vertical_pattern="true"
                    fuse_tolerance="0" />
                    <inkscape:path-effect
                    effect="skeletal"
                    id="path-effect3956-0-7-8-7"
                    is_visible="true"
                    pattern="m 892.49044,501.34066 1.38896,40.4061 -2.77792,0 z"
                    copytype="single_stretched"
                    prop_scale="1"
                    scale_y_rel="false"
                    spacing="0"
                    normal_offset="0"
                    tang_offset="0"
                    prop_units="false"
                    vertical_pattern="true"
                    fuse_tolerance="0" />
                    <inkscape:path-effect
                    effect="skeletal"
                    id="path-effect3956-9-5-3-5"
                    is_visible="true"
                    pattern="m 918.20473,489.55495 1.38896,40.4061 -2.77792,0 z"
                    copytype="single_stretched"
                    prop_scale="1"
                    scale_y_rel="false"
                    spacing="0"
                    normal_offset="0"
                    tang_offset="0"
                    prop_units="false"
                    vertical_pattern="true"
                    fuse_tolerance="0" />
                    <inkscape:path-effect
                    effect="skeletal"
                    id="path-effect3956-6-5-2-9"
                    is_visible="true"
                    pattern="m 946.06187,484.1978 1.38896,40.4061 -2.77792,0 z"
                    copytype="single_stretched"
                    prop_scale="1"
                    scale_y_rel="false"
                    spacing="0"
                    normal_offset="0"
                    tang_offset="0"
                    prop_units="false"
                    vertical_pattern="true"
                    fuse_tolerance="0" />
                    <inkscape:path-effect
                    effect="skeletal"
                    id="path-effect3956-99-4-3-1"
                    is_visible="true"
                    pattern="m 971.41901,476.69781 1.38896,40.4061 -2.77792,0 z"
                    copytype="single_stretched"
                    prop_scale="1"
                    scale_y_rel="false"
                    spacing="0"
                    normal_offset="0"
                    tang_offset="0"
                    prop_units="false"
                    vertical_pattern="true"
                    fuse_tolerance="0" />
                    <inkscape:path-effect
                    effect="skeletal"
                    id="path-effect3956-5-6-6-6"
                    is_visible="true"
                    pattern="m 996.77616,468.48352 1.38896,40.4061 -2.77792,0 z"
                    copytype="single_stretched"
                    prop_scale="1"
                    scale_y_rel="false"
                    spacing="0"
                    normal_offset="0"
                    tang_offset="0"
                    prop_units="false"
                    vertical_pattern="true"
                    fuse_tolerance="0" />
                    <inkscape:path-effect
                    effect="skeletal"
                    id="path-effect3956-5-1-1-8-7"
                    is_visible="true"
                    pattern="m 1020.9946,461.1538 1.389,40.4061 -2.7779,0 z"
                    copytype="single_stretched"
                    prop_scale="1"
                    scale_y_rel="false"
                    spacing="0"
                    normal_offset="0"
                    tang_offset="0"
                    prop_units="false"
                    vertical_pattern="true"
                    fuse_tolerance="0" />
                    <inkscape:path-effect
                    effect="skeletal"
                    id="path-effect3956-5-1-8-8-6-6"
                    is_visible="true"
                    pattern="m 1011.9512,455.71387 1.3889,40.4061 -2.7779,0 z"
                    copytype="single_stretched"
                    prop_scale="1"
                    scale_y_rel="false"
                    spacing="0"
                    normal_offset="0"
                    tang_offset="0"
                    prop_units="false"
                    vertical_pattern="true"
                    fuse_tolerance="0" />
                    <inkscape:path-effect
                    effect="skeletal"
                    id="path-effect3956-99-0-6-9-9"
                    is_visible="true"
                    pattern="m 982.75323,451.88036 1.38896,40.4061 -2.77792,0 z"
                    copytype="single_stretched"
                    prop_scale="1"
                    scale_y_rel="false"
                    spacing="0"
                    normal_offset="0"
                    tang_offset="0"
                    prop_units="false"
                    vertical_pattern="true"
                    fuse_tolerance="0" />
                    <inkscape:path-effect
                    effect="skeletal"
                    id="path-effect3956-99-0-8-9-5-5-6"
                    is_visible="true"
                    pattern="m 877.4889,482.80023 1.38896,40.4061 -2.77792,0 z"
                    copytype="single_stretched"
                    prop_scale="1"
                    scale_y_rel="false"
                    spacing="0"
                    normal_offset="0"
                    tang_offset="0"
                    prop_units="false"
                    vertical_pattern="true"
                    fuse_tolerance="0" />
                    <inkscape:path-effect
                    effect="skeletal"
                    id="path-effect3956-99-0-8-2-6-1-7"
                    is_visible="true"
                    pattern="m 902.4889,475.65737 1.38896,40.4061 -2.77792,0 z"
                    copytype="single_stretched"
                    prop_scale="1"
                    scale_y_rel="false"
                    spacing="0"
                    normal_offset="0"
                    tang_offset="0"
                    prop_units="false"
                    vertical_pattern="true"
                    fuse_tolerance="0" />
                    <inkscape:path-effect
                    effect="skeletal"
                    id="path-effect3956-99-0-8-8-8-4-1"
                    is_visible="true"
                    pattern="m 930.34605,464.58594 1.38896,40.4061 -2.77792,0 z"
                    copytype="single_stretched"
                    prop_scale="1"
                    scale_y_rel="false"
                    spacing="0"
                    normal_offset="0"
                    tang_offset="0"
                    prop_units="false"
                    vertical_pattern="true"
                    fuse_tolerance="0" />
                    <inkscape:path-effect
                    effect="skeletal"
                    id="path-effect3956-99-0-8-4-8-3-0"
                    is_visible="true"
                    pattern="m 956.41747,458.51451 1.38896,40.4061 -2.77792,0 z"
                    copytype="single_stretched"
                    prop_scale="1"
                    scale_y_rel="false"
                    spacing="0"
                    normal_offset="0"
                    tang_offset="0"
                    prop_units="false"
                    vertical_pattern="true"
                    fuse_tolerance="0" />
                    <inkscape:path-effect
                    effect="skeletal"
                    id="path-effect3956-99-0-8-7-54-5-4"
                    is_visible="true"
                    pattern="m 840.72815,544.58595 1.38896,40.4061 -2.77792,0 z"
                    copytype="single_stretched"
                    prop_scale="1"
                    scale_y_rel="false"
                    spacing="0"
                    normal_offset="0"
                    tang_offset="0"
                    prop_units="false"
                    vertical_pattern="true"
                    fuse_tolerance="0" />
                    <inkscape:path-effect
                    effect="skeletal"
                    id="path-effect3956-99-0-8-7-5-6-6-6"
                    is_visible="true"
                    pattern="m 810.88054,563.63437 1.38896,40.4061 -2.77792,0 z"
                    copytype="single_stretched"
                    prop_scale="1"
                    scale_y_rel="false"
                    spacing="0"
                    normal_offset="0"
                    tang_offset="0"
                    prop_units="false"
                    vertical_pattern="true"
                    fuse_tolerance="0" />
                    <inkscape:path-effect
                    effect="skeletal"
                    id="path-effect3956-99-0-8-7-1-85-6-3"
                    is_visible="true"
                    pattern="m 855.3741,464.33771 1.38896,40.4061 -2.77792,0 z"
                    copytype="single_stretched"
                    prop_scale="1"
                    scale_y_rel="false"
                    spacing="0"
                    normal_offset="0"
                    tang_offset="0"
                    prop_units="false"
                    vertical_pattern="true"
                    fuse_tolerance="0" />
                    <inkscape:path-effect
                    effect="skeletal"
                    id="path-effect3956-99-0-8-7-1-8-0-7-1"
                    is_visible="true"
                    pattern="m 791.45401,504.67833 1.38896,40.4061 -2.77792,0 z"
                    copytype="single_stretched"
                    prop_scale="1"
                    scale_y_rel="false"
                    spacing="0"
                    normal_offset="0"
                    tang_offset="0"
                    prop_units="false"
                    vertical_pattern="true"
                    fuse_tolerance="0" />
                    <inkscape:path-effect
                    effect="skeletal"
                    id="path-effect3956-99-0-8-7-1-8-4-8-2-6"
                    is_visible="true"
                    pattern="m 839.28056,530.78447 1.38896,40.4061 -2.77792,0 z"
                    copytype="single_stretched"
                    prop_scale="1"
                    scale_y_rel="false"
                    spacing="0"
                    normal_offset="0"
                    tang_offset="0"
                    prop_units="false"
                    vertical_pattern="true"
                    fuse_tolerance="0" />
                    <radialGradient
                    r="45.931713"
                    fy="103.94829"
                    fx="124.12415"
                    cy="103.94829"
                    cx="124.12415"
                    gradientTransform="matrix(0.40556169,-0.33554526,0.13154845,0.15899795,551.5587,451.48843)"
                    gradientUnits="userSpaceOnUse"
                    id="radialGradient29329"
                    xlink:href="#linearGradient4072-7"
                    inkscape:collect="always" />
                    <linearGradient
                    inkscape:collect="always"
                    id="linearGradient4072-7">
                    <stop
                        style="stop-color:#d6a186;stop-opacity:1;"
                        offset="0"
                        id="stop4074-6" />
                    <stop
                        style="stop-color:#d6a186;stop-opacity:0;"
                        offset="1"
                        id="stop4076-5" />
                    </linearGradient>
                    <inkscape:path-effect
                    effect="skeletal"
                    id="path-effect3182-0-0-8"
                    is_visible="true"
                    pattern="#rect4451"
                    copytype="repeated_stretched"
                    prop_scale="1"
                    scale_y_rel="false"
                    spacing="2"
                    normal_offset="0"
                    tang_offset="0"
                    prop_units="false"
                    vertical_pattern="false"
                    fuse_tolerance="0" />
                    <linearGradient
                    inkscape:collect="always"
                    xlink:href="#linearGradient5128"
                    id="linearGradient5134"
                    x1="123.69081"
                    y1="155.8502"
                    x2="131.33696"
                    y2="161.78656"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(0.67207627,0,0,0.67207627,381.67751,37.544503)" />
                    <linearGradient
                    inkscape:collect="always"
                    id="linearGradient5128">
                    <stop
                        style="stop-color:#95bff2;stop-opacity:1;"
                        offset="0"
                        id="stop5130" />
                    <stop
                        style="stop-color:#86b6f0;stop-opacity:0"
                        offset="1"
                        id="stop5132" />
                    </linearGradient>
                    <linearGradient
                    gradientTransform="matrix(0.3829586,0.5522945,-0.5522945,0.3829586,546.08161,-3.2713455)"
                    inkscape:collect="always"
                    xlink:href="#linearGradient5128"
                    id="linearGradient5134-9"
                    x1="122.03947"
                    y1="154.08974"
                    x2="129.2478"
                    y2="160.95337"
                    gradientUnits="userSpaceOnUse" />
                    <linearGradient
                    inkscape:collect="always"
                    xlink:href="#linearGradient5128"
                    id="linearGradient5164"
                    gradientUnits="userSpaceOnUse"
                    x1="123.26936"
                    y1="155.34445"
                    x2="129.73541"
                    y2="162.29231"
                    gradientTransform="matrix(0.67207627,0,0,0.67207627,403.8917,4.1963433)" />
                    <linearGradient
                    inkscape:collect="always"
                    xlink:href="#linearGradient5128"
                    id="linearGradient5168"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(0.67207627,0,0,0.67207627,461.9017,24.36388)"
                    x1="120.57202"
                    y1="153.32146"
                    x2="128.38675"
                    y2="163.64098" />
                    <linearGradient
                    inkscape:collect="always"
                    xlink:href="#XMLID_8_"
                    id="linearGradient10163"
                    gradientUnits="userSpaceOnUse"
                    x1="452.44589"
                    y1="557.77557"
                    x2="353.1377"
                    y2="864.57129"
                    gradientTransform="matrix(0.94760496,-0.01496359,0.01412178,0.97366428,317.23734,-10.872048)" />
                </defs>
                <metadata
                    id="metadata29162">
                    <rdf:RDF>
                    <cc:Work
                        rdf:about="">
                        <dc:format>image/svg+xml</dc:format>
                        <dc:type
                        rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
                        <dc:title />
                    </cc:Work>
                    </rdf:RDF>
                </metadata>
                <g
                    inkscape:label="Draw"
                    inkscape:groupmode="layer"
                    id="layer1"
                    transform="translate(11.050001,-11.312195)"
                    style="display:inline"
                    sodipodi:insensitive="true">
                    <path
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation-filters:linearRGB;fill:#f9bb9d;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1.59230006;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                    d="m 300.15486,201.88216 10.15689,-10.28138 c 0.79938,6.31831 2.98781,13.46761 3.30911,21.99026 0.78338,20.77971 -0.10359,53.86479 -3.36736,81.9743 -0.41586,3.58164 -0.27856,12.24857 0.0984,15.84723 6.32367,60.36964 9.55229,106.68853 9.88949,115.75434 -5.58931,-0.27022 -10.45492,0.54509 -16.76792,-0.81067 -6.44873,-25.40914 -11.80958,-68.67098 -6.01658,-115.77883 0.42757,-3.47696 1.23528,-10.59348 0.57233,-13.97205 -8.16935,-41.63308 4.19128,-88.7211 5.39662,-91.94061 -0.20287,-1.4231 -1.9273,-3.12979 -3.27096,-2.78259 z"
                    id="rect4987"
                    inkscape:connector-curvature="0"
                    sodipodi:nodetypes="ccsssccssccc" />
                    <g
                    style="display:inline"
                    id="g9404"
                    transform="translate(-392.53397,17.789071)">
                    <path
                        sodipodi:nodetypes="sscsssscccss"
                        id="path2176"
                        d="m 699.17492,408.68343 c 29.50074,0.002 35.24118,-2.32859 56.12986,1.68747 7.34454,1.41206 18.02491,3.81796 19.64342,8.78381 -4.81837,-5.81707 -21.40836,-2.81967 -45.08268,4.47143 -10.91231,3.36071 -22.03702,8.84399 -44.7751,19.11431 -5.96069,2.69233 -14.54166,3.21686 -27.81642,10.31319 -4.25505,2.27463 -6.7132,6.36266 -10.84491,8.77021 -9.73642,5.67341 -15.28192,13.6467 -20.29745,16.41251 -13.11253,7.00344 -33.27427,43.45164 -34.26417,55.88926 -0.82888,-9.24674 -0.70825,-20.46366 -1.02754,-29.74254 0,0 -4.56192,-45.23082 5.25832,-64.72051 25.77227,-51.1488 78.67275,-30.9812 103.07667,-30.97914 z"
                        style="display:inline;fill:#c47a51;fill-opacity:1;stroke:none"
                        inkscape:connector-curvature="0" />
                    <path
                        sodipodi:nodetypes="cscccssccsssccc"
                        inkscape:connector-curvature="0"
                        id="path2348"
                        d="m 658.12068,451.63936 c -4.58469,1.64888 -9.54882,13.60867 -22.65756,13.41588 -5.18292,-0.0762 -19.41317,10.82593 -16.12315,17.00535 -15.05895,19.01644 -37.14189,57.164 -23.37885,53.92457 14.7785,-3.7601 37.6597,-35.64334 57.01229,-44.02315 9.49361,-1.59715 29.57129,3.60567 38.95063,-8.38419 8.37362,-10.70421 13.09782,-7.00382 16.82389,-11.70182 1.90363,-2.40018 3.91562,-5.91727 4.71569,-8.90269 -1.08359,-4.37008 3.13837,-11.5592 10.48293,-11.14954 10.5594,-10.12815 21.65758,-19.529 32.22769,-23.62957 17.33625,-6.72544 20.82137,-7.74501 18.20191,-10.73668 -4.67826,-5.34301 -25.79501,-2.81046 -56.27652,10.39794 -8.21019,3.55767 -26.14438,10.89023 -33.36179,15.15402 -1.1386,0.3094 -2.25817,0.6182 -3.35644,0.92574 -10.20334,2.85716 -18.56752,5.60509 -23.26072,7.70414 z"
                        style="color:#000000;display:inline;overflow:visible;visibility:visible;opacity:0.9125;fill:#966548;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1;marker:none;enable-background:accumulate" />
                    <path
                        sodipodi:nodetypes="cssccccscc"
                        inkscape:connector-curvature="0"
                        id="path4717"
                        d="m 688.57452,407.37384 c 0,0 -0.51503,-1.0143 -2.08499,0.8143 -3.31838,3.86508 -8.77585,12.83959 -10.58976,17.62169 -0.54807,1.44493 -1.32699,12.38636 -2.66994,18.97812 1.90534,2.07206 2.32426,2.3385 2.32426,2.3385 l 1.39334,-1.84401 c 0,0 0.23394,0.11318 -0.037,-0.96655 0.46707,-4.21314 0.72309,-13.40252 1.98523,-18.27561 1.83002,-7.06565 9.6789,-18.66644 9.6789,-18.66644 z"
                        style="color:#000000;display:inline;overflow:visible;visibility:visible;fill:#cc987b;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1px;marker:none;enable-background:accumulate" />
                    <path
                        sodipodi:nodetypes="cccccc"
                        inkscape:connector-curvature="0"
                        id="rect7015"
                        d="m 673.13806,444.3314 1.36614,-0.10767 1.81144,1.57424 c 0.21729,0.83007 0.35098,1.23483 0.18332,1.99618 l -1.9758,-1.83322 z"
                        style="color:#000000;display:inline;overflow:visible;visibility:visible;opacity:0.7125;fill:#ddbaa6;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0;marker:none;enable-background:accumulate" />
                    <path
                        sodipodi:nodetypes="csccscc"
                        inkscape:connector-curvature="0"
                        id="path4743"
                        d="m 677.08474,445.32334 c 0,0 10.61248,12.59225 13.60559,16.21632 5.17775,6.26924 6.4554,16.49578 6.4554,16.49578 l -1.95543,0.97771 c 0,0 -2.08688,-10.54739 -6.53449,-16.28848 -3.473,-4.48304 -8.15818,-11.63264 -12.9919,-15.54201 0.57154,-0.58764 1.42083,-1.85932 1.42083,-1.85932 z"
                        style="color:#000000;display:inline;overflow:visible;visibility:visible;fill:#8a5537;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1;marker:none;enable-background:accumulate" />
                    <ellipse
                        ry="1.629527"
                        rx="1.7924798"
                        cy="444.39645"
                        cx="675.20984"
                        id="path7013"
                        style="color:#000000;display:inline;overflow:visible;visibility:visible;fill:#ddbaa6;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0;marker:none;enable-background:accumulate" />
                    <path
                        sodipodi:nodetypes="cccsscc"
                        inkscape:connector-curvature="0"
                        id="rect7010"
                        d="m 688.37205,460.01645 c 10.84477,-3.79623 17.38104,1.47248 23.66889,5.13301 0,0 2.24867,0.0242 5.94969,4.7102 2.15217,8.74397 6.88202,22.03209 3.01271,27.71739 -2.5382,3.72944 -8.89512,2.48986 -13.38193,2.02107 -3.91542,-0.40909 -11.26467,-4.13946 -11.26467,-4.13946 1.94331,-7.78262 -2.66344,-23.01553 -7.98469,-35.44221 z"
                        style="color:#000000;display:inline;overflow:visible;visibility:visible;opacity:0.27916667;fill:#ffaaaa;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0;marker:none;enable-background:accumulate" />
                    <path
                        sodipodi:nodetypes="ccccccc"
                        inkscape:connector-curvature="0"
                        id="rect6053"
                        d="m 668.85848,473.13414 c 2.43026,-5.67967 2.57727,-8.08438 3.32988,-11.53031 3.38189,0.48329 5.76413,0.16944 16.28275,-1.48035 5.35467,13.36052 9.6499,27.19814 7.78588,34.01419 -1.90577,-0.39209 -3.18547,1.32763 -5.2771,1.09219 -4.04516,-4.98604 -9.64357,-8.28267 -15.2774,-8.08179 1.85204,-4.78452 -0.72367,-9.84266 -6.84401,-14.01393 z"
                        style="color:#000000;display:inline;overflow:visible;visibility:visible;opacity:0.47083333;fill:#ffaaaa;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0;marker:none;enable-background:accumulate" />
                    <path
                        sodipodi:nodetypes="sscsccscscssss"
                        id="path2174"
                        d="m 661.79451,519.63028 c 7.16907,-8.17154 11.66158,-12.22174 19.67131,-14.22578 8.59783,-2.15118 29.24775,-6.40545 40.30403,-9.89681 21.25649,-6.37668 32.22567,-4.99988 46.30808,-10.12396 6.93461,-2.52326 9.48689,-8.27121 16.52216,-9.83223 5.60929,1.02452 8.99708,16.76986 4.17883,21.11138 -2.02434,2.46756 -7.67552,9.02568 -12.09056,11.71724 -15.02745,9.16128 -58.91259,26.78478 -76.95067,34.34924 -5.84885,2.21963 -4.89253,7.55905 -2.21271,11.29262 1.68282,2.34454 5.31766,1.03968 4.78656,5.23779 -1.98054,1.79005 -11.28842,3.97115 -23.48328,2.60028 -4.87506,-0.54802 -8.89929,-3.26137 -12.70847,-6.2619 -3.26738,-2.57375 -6.15118,-5.19514 -7.87815,-9.02091 -4.4517,-9.86186 -1.58605,-21.08946 3.55287,-26.94696 z"
                        style="display:inline;opacity:0.9;fill:#e89e55;stroke:#201b17;stroke-width:0.03476759"
                        inkscape:connector-curvature="0" />
                    <path
                        sodipodi:nodetypes="ccccccc"
                        id="path2254"
                        d="m 733.71983,511.77742 c 1.4038,-0.34278 1.96567,-1.37056 3.36992,-1.37056 0,0 0.84237,-1.37057 1.12331,-1.37057 l 0.84281,-0.34277 0.28093,0 0,-0.34278 0.84237,-1.37056"
                        style="display:inline;fill:none"
                        inkscape:connector-curvature="0" />
                    <path
                        sodipodi:nodetypes="ccsscccc"
                        id="path2256"
                        d="m 746.07709,513.49076 2.52755,0 1.12331,0 c 0.28138,0 0.56188,0.68555 0.84281,0.68555 l 0.28094,0 0.28094,0 0.56143,0 1.96612,0"
                        style="display:inline;fill:none"
                        inkscape:connector-curvature="0" />
                    <path
                        sodipodi:nodetypes="cccccc"
                        id="path2259"
                        d="m 732.31558,517.94576 c 0.56143,0 1.12331,-0.34278 1.68518,-0.34278 l 1.12331,0.34278 1.12375,0.34277 0.84237,0.68501 c 0.28094,0.34278 1.12331,0 1.12331,0.68556"
                        style="display:inline;fill:none"
                        inkscape:connector-curvature="0" />
                    <path
                        sodipodi:nodetypes="ccsc"
                        id="path2261"
                        d="m 720.23925,524.16035 2.61898,0 0.29109,0 c 0.58175,0 0.87284,0.2911 1.16394,0.2911"
                        style="display:inline;fill:none"
                        inkscape:connector-curvature="0" />
                    <path
                        sodipodi:nodetypes="ccsscccc"
                        id="path2263"
                        d="m 685.90055,528.23437 c 0.87284,0 1.45458,0.29155 2.03724,0.29155 0,0 1.16394,0.58174 1.45458,0.58174 0.29064,0 0.2911,0.87284 0.58174,0.87284 l 0.2911,0 0,0.2911 0,0.2911 c 0,0 0.87284,-0.2911 0.87284,0.2911"
                        style="display:inline;fill:none"
                        inkscape:connector-curvature="0" />
                    <path
                        sodipodi:nodetypes="cccccsc"
                        id="path2265"
                        d="m 705.39778,529.39785 2.32833,0 2.32834,0 0.58174,0.29155 0.58174,0.2911 0.29155,0 c 0.58174,0 1.45458,0.2911 2.32788,0.2911"
                        style="display:inline;fill:none"
                        inkscape:connector-curvature="0" />
                    <path
                        sodipodi:nodetypes="ccccc"
                        id="path2268"
                        d="m 748.32415,507.32296 c 0.56143,-0.34278 1.4038,-1.02779 1.96611,-1.37057 l 0.56144,-0.68555 0.56143,-0.34277 c 0.56144,0 1.12331,-0.68502 1.12331,-1.37056"
                        style="display:inline;fill:none"
                        inkscape:connector-curvature="0" />
                    <path
                        sodipodi:nodetypes="cssccccccc"
                        id="path2271"
                        d="m 720.23925,519.6591 0,-1.02833 c 0,-0.34278 0.56143,-2.39835 0.56143,-2.74112 l 0,-1.37057 0.28094,-0.68555 0.28094,-0.68501 0.56143,0 0.28094,-0.34278 0.28137,-0.34277 c 0.28094,0 0.84238,-0.68555 0.84238,-1.02833"
                        style="display:inline;fill:none"
                        inkscape:connector-curvature="0" />
                    <path
                        id="path2304"
                        d="m 655.34523,526.19713 c -1.45504,-0.29064 -2.91008,-0.58174 -4.36512,-0.58174 -0.58219,0 -2.03723,-0.29064 -2.32833,-0.29064 l -0.8733,0 -0.29109,0 0,-0.29156 -0.2911,0 c -0.2911,0 0,-1.16394 0,-1.74568"
                        style="display:inline;fill:none"
                        inkscape:connector-curvature="0" />
                    <path
                        id="path2346"
                        d="m 638.07139,525.48992 c 1.45367,0.87192 3.05289,1.59921 4.36101,2.47114 0.87238,0.72684 2.4716,1.01748 4.07036,1.01748 1.45367,0 3.19844,-0.43619 4.50656,-0.43619"
                        style="display:inline;fill:none"
                        inkscape:connector-curvature="0" />
                    <path
                        id="path2533"
                        d="m 658.83554,405.43927 c 14.54718,0 33.7492,2.90916 29.09436,22.69338 -6.98272,31.42132 -38.98624,24.43906 -62.26137,47.71418 -2.90916,2.90916 -9.31014,22.11119 -3.49136,25.0208 12.8015,5.81878 26.76649,-2.90916 33.16701,-13.96498 18.03854,-28.51216 31.42178,-72.15324 72.15324,-72.15324 1.16394,0 -43.05888,6.98226 -43.05888,23.85732 0,22.69338 2.90916,50.0416 2.90916,75.06286 0,32.34435 -22.69338,20.60139 -22.69338,32.00306 0,5.2375 -12.2193,5.81924 -5.23704,4.07356 l 4.79355,-3.88284 c 0.58174,-2.90916 29.53739,-13.57396 33.61049,-13.57396 8.1462,0 23.27558,-4.0731 26.18474,-9.89188 0.58174,-1.16394 34.91314,-5.23704 34.91314,-11.05582"
                        style="display:inline;fill:none"
                        inkscape:connector-curvature="0" />
                    <path
                        sodipodi:nodetypes="cccccccccccccccccccccsccc"
                        inkscape:connector-curvature="0"
                        id="path7189"
                        d="m 688.37263,460.14686 7.37373,-4.08933 c -0.11701,-8.38511 -0.65508,-17.68117 0.89789,-25.92712 -4.52945,-3.25666 -7.05398,-8.10238 -8.1835,-17.40623 1.20663,5.18269 3.91265,13.2834 8.61697,16.41984 1.99791,-3.10574 6.3105,-12.04105 9.95455,-15.05714 -2.89555,3.60703 -6.88046,11.04345 -8.55263,14.32457 -1.47546,8.5292 -1.62314,17.66946 -0.87835,26.19865 5.06795,-5.84594 8.5712,-13.44114 12.7673,-19.86831 2.84505,-6.25568 1.74811,-5.49445 5.49972,-11.36161 0.34621,-3.74167 0.47254,-8.55529 0.28981,-12.46546 1.00663,4.14386 1.06688,8.44693 0.81038,11.92259 -0.20905,0.34259 21.25715,-5.42453 21.05313,-5.07992 -0.23739,0.40097 -21.1664,6.01777 -21.3971,6.42142 -2.99935,5.24783 -2.424,4.52748 -4.44035,10.16852 l 45.64387,-13.82279 -30.33117,10.296 10.33625,5.84745 -12.67813,-4.90313 -14.10001,4.77356 c -0.55419,1.45735 -6.78576,11.59302 -8.49284,14.48358 1.57722,1.57623 8.48072,5.24583 8.09279,5.41759 -0.35566,0.15747 -7.2517,-2.58169 -8.79854,-3.9634 -4.48138,5.46478 -8.77422,7.26206 -12.54161,9.43216 z"
                        style="color:#000000;display:inline;overflow:visible;visibility:visible;opacity:0.5;fill:#339967;fill-opacity:1;fill-rule:nonzero;stroke:#201b17;stroke-width:0.03476759;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;marker:none;enable-background:accumulate" />
                    <path
                        sodipodi:nodetypes="ccccccccccccccccccccccccc"
                        inkscape:connector-curvature="0"
                        id="path4622-7"
                        d="m 671.80592,461.41022 c -1.83591,-0.85753 -6.37986,-2.22907 -10.90003,-3.1153 -4.50868,-12.10081 -3.9279,-41.61227 0.19712,-44.71769 -5.12626,3.46918 -6.87391,31.57947 -1.88378,44.28805 -3.1667,-0.66392 -7.60887,-1.29287 -11.7489,-2.2359 0.89825,-11.26094 -6.6804,-32.3258 -15.66106,-39.69058 6.55385,7.93871 14.86632,28.39996 13.90448,39.74539 l -13.07342,0.57042 c -5.33637,-11.02312 -15.09391,-15.21352 -25.12047,-18.98818 10.86781,4.93366 21.05045,10.20291 22.76899,19.6179 -7.39523,1.34713 -12.85885,3.20722 -18.96198,4.90406 -5.97099,-0.75929 -7.41829,-1.41057 -13.94926,-1.80561 6.81237,1.22029 6.48932,1.9613 13.55444,3.06024 -0.0543,6.31666 -12.98418,19.63411 -14.43269,18.16771 8.2179,-1.83126 15.72964,-11.589 16.12835,-18.63313 7.51398,-1.96856 14.69961,-3.54195 22.40486,-4.55416 l 9.38159,-0.59171 14.88868,2.47043 c -21.22136,6.92705 -49.40474,24.0266 -62.75437,39.13074 5.46478,-5.38367 12.75203,-10.07771 16.09821,-12.25128 0.18213,0.46869 3.6318,15.37381 6.68066,19.02244 0.22707,0.0486 -5.21559,-16.72927 -4.6951,-20.43494 16.01202,-11.30691 35.10531,-19.69528 47.00648,-24.64906 4.28272,0.82885 6.67474,2.13037 9.86451,3.23246 z"
                        style="color:#000000;display:inline;overflow:visible;visibility:visible;opacity:0.5;fill:#339967;fill-opacity:1;fill-rule:nonzero;stroke:#201b17;stroke-width:0.03476759;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;marker:none;enable-background:accumulate" />
                    <path
                        sodipodi:nodetypes="cssssssccssc"
                        inkscape:connector-curvature="0"
                        id="path7192"
                        d="m 644.49094,474.59249 c -4.42349,-1.62386 -10.58455,-2.71484 -17.57081,-3.11141 -3.2437,-0.18413 -4.89106,0.28515 -8.14646,2.32065 -0.53407,0.33394 -0.81316,0.0887 -0.83144,0.0887 -0.0589,0 -0.26752,-0.0588 0.11851,-0.58304 2.99242,-4.06419 8.03533,-6.85666 13.19359,-6.71365 2.66296,0.0738 6.76667,-0.21728 11.46424,1.14127 5.15774,1.49164 7.10844,2.31237 17.51659,5.659 1.93648,0.59915 6.65846,0.78079 5.72425,1.19743 -0.0124,0.0133 -3.54884,0.52006 -4.97169,0.77393 -2.46278,0.43944 -5.24994,0.82145 -6.64115,0.84886 -3.70573,0.073 -6.33988,-0.35671 -9.85563,-1.62169 z"
                        style="color:#000000;display:inline;overflow:visible;visibility:visible;fill:#3e765c;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.0762;marker:none;enable-background:accumulate" />
                    <path
                        sodipodi:nodetypes="ssssssscccssss"
                        inkscape:connector-curvature="0"
                        id="path4783"
                        d="m 632.74165,484.08929 c -5.4535,-0.28702 -11.08828,-2.54646 -12.6102,-3.61952 -1.04203,-0.73471 -2.12963,-1.90601 -2.30173,-2.97363 -0.18901,-1.17261 -0.68658,-2.45608 0.098,-3.27578 2.00616,-2.09597 5.36762,-2.98412 7.75392,-2.99694 1.73277,-0.009 5.77807,0.37787 8.61481,0.80109 4.15614,0.62008 6.83512,0.99458 10.63193,2.33072 2.82787,0.99516 5.48399,1.86926 9.13133,1.72932 5.10526,-0.59273 10.24326,-0.93652 12.25882,-1.71467 -2.26894,2.03311 -5.21407,3.59634 -7.68574,4.78831 -4.11758,1.89541 -8.71738,2.9753 -12.07856,3.46715 -4.25986,0.62335 -13.81265,1.46393 -13.81265,1.46393 l 0,0 z"
                        style="color:#000000;display:inline;overflow:visible;visibility:visible;fill:#468566;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.0762;marker:none;enable-background:accumulate" />
                    <path
                        sodipodi:nodetypes="ccccc"
                        inkscape:connector-curvature="0"
                        id="rect3146"
                        d="m 657.57658,526.64467 c 4.86104,-0.0977 6.35382,0.0345 11.02038,-0.0436 l -1.35449,1.60327 c -4.66117,0.24706 -5.13629,-0.10772 -9.70359,-0.004 z"
                        style="color:#000000;display:inline;overflow:visible;visibility:visible;fill:#339967;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.0762;marker:none;enable-background:accumulate" />
                    <path
                        sodipodi:nodetypes="cssccsscc"
                        id="rect3146-7"
                        d="m 673.54095,526.72615 c 0,0 3.96804,0.38982 5.66693,0.28434 2.60117,-0.16152 5.05833,-1.40216 7.65901,-1.57132 2.77501,-0.18051 4.7346,0.60382 4.7346,0.60382 l -1.56117,2.03451 c -2.82293,0.19422 -0.76703,-0.25938 -3.42156,-0.28723 -1.75281,-0.0184 -4.7361,1.12891 -7.32611,1.25887 -2.07633,0.10418 -4.67961,-0.46891 -6.73462,-0.53291 z"
                        style="color:#000000;display:inline;overflow:visible;visibility:visible;fill:#339967;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.06329374;marker:none;enable-background:accumulate"
                        inkscape:connector-curvature="0" />
                    <path
                        sodipodi:nodetypes="sss"
                        inkscape:original-d="m 707.82539,537.42242 c 0,0 -2.30404,-3.77254 -2.88063,-5.87647 -0.64156,-2.34102 -0.57612,-7.25917 -0.57612,-7.25917"
                        inkscape:path-effect="#path-effect3956-8-4-1"
                        inkscape:connector-curvature="0"
                        id="path3954"
                        d="m 707.82529,537.42226 c -0.008,-0.0166 -0.0163,-0.0339 -0.0241,-0.0505 -0.0213,-0.0448 -0.0425,-0.0897 -0.0635,-0.13463 -0.076,-0.1621 -0.15092,-0.32461 -0.22498,-0.48746 l 0,0 0,0 0,0 c -0.24243,-0.53307 -0.47591,-1.06914 -0.69894,-1.60819 l 0,0 0,0 0,0 c -0.52022,-1.26055 -1.03941,-2.51858 -1.23492,-3.76928 l 0,0 0,0 c -0.23278,-1.39687 -0.13014,-2.84319 -0.0511,-4.35131 0,0 0,0 0,0 0.0765,-0.91487 0.15309,-1.82718 0.22969,-2.73694 -0.46168,0.001 -0.92458,0.002 -1.38869,0.003 0,0 0,0 0,0 -0.46411,8.8e-4 -0.92701,0.002 -1.38869,0.003 0.10868,0.93495 0.21733,1.86734 0.32594,2.79717 0,0 0,10e-6 0,10e-6 0.20648,1.50963 0.43931,3.1164 1.00485,4.63257 0,0 0,10e-6 0,10e-6 0.52169,1.3663 1.3001,2.52756 2.06344,3.65774 0,0 0,0 0,0 0.32896,0.48907 0.66623,0.97102 1.01055,1.44663 0,0 0,0 0,0 l 0,0 c 0.10519,0.14529 0.21107,0.29004 0.31788,0.43397 0.0296,0.0399 0.0593,0.0797 0.089,0.11943 0.011,0.0147 0.0225,0.0301 0.0336,0.0448 z"
                        style="color:#000000;display:inline;overflow:visible;visibility:visible;fill:#339967;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0;marker:none;enable-background:accumulate" />
                    <path
                        sodipodi:nodetypes="sss"
                        inkscape:original-d="m 719.20186,531.12959 c 0,0 -2.30404,-3.77253 -2.88063,-5.87647 -0.64156,-2.34101 -0.57612,-7.25917 -0.57612,-7.25917"
                        inkscape:path-effect="#path-effect3956-0-7-8-7"
                        inkscape:connector-curvature="0"
                        id="path3954-6"
                        d="m 719.20176,531.12943 c -0.33819,-0.76207 -0.67588,-1.52324 -1.01306,-2.28351 -0.52055,-1.26112 -1.03923,-2.51823 -1.23341,-3.76657 0,0 0,0 0,0 -0.23279,-1.39685 -0.13015,-2.84316 -0.0512,-4.35129 0,0 0,0 0,0 0.0765,-0.91487 0.15308,-1.82718 0.22967,-2.73694 -0.46168,0.001 -0.92458,0.002 -1.38869,0.003 0,0 0,0 0,0 -0.46411,8.8e-4 -0.92701,0.002 -1.38869,0.003 0.10868,0.93495 0.21732,1.86734 0.32593,2.79718 0,0 0,0 0,0 0.20646,1.50963 0.43928,3.1164 1.00482,4.63259 0,0 0,0 0,0 0.52302,1.36868 1.30193,2.53085 2.06495,3.66047 0.48372,0.68158 0.96694,1.36228 1.44964,2.04207 z"
                        style="color:#000000;display:inline;overflow:visible;visibility:visible;fill:#339967;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0;marker:none;enable-background:accumulate" />
                    <path
                        sodipodi:nodetypes="sss"
                        inkscape:original-d="m 730.93445,525.75216 c 0,0 -2.30403,-3.77254 -2.88062,-5.87647 -0.64156,-2.34102 -0.57612,-7.25918 -0.57612,-7.25918"
                        inkscape:path-effect="#path-effect3956-9-5-3-5"
                        inkscape:connector-curvature="0"
                        id="path3954-0"
                        d="m 730.93435,525.752 c -0.33819,-0.76207 -0.67588,-1.52324 -1.01305,-2.28351 -0.52055,-1.26112 -1.03923,-2.51823 -1.23341,-3.76657 0,0 0,0 0,0 -0.23279,-1.39685 -0.13015,-2.84317 -0.0512,-4.3513 0,0 0,0 0,0 0.0765,-0.91487 0.15308,-1.82718 0.22967,-2.73694 -0.46168,0.001 -0.92458,0.002 -1.38869,0.003 0,0 0,0 0,0 -0.46411,8.8e-4 -0.92701,0.002 -1.38869,0.003 0.10868,0.93495 0.21732,1.86734 0.32593,2.79718 0.20646,1.50964 0.43929,3.11641 1.00482,4.6326 0,0 0,0 0,0 0.52302,1.36868 1.30193,2.53085 2.06494,3.66046 0.48373,0.68159 0.96694,1.36228 1.44964,2.04208 z"
                        style="color:#000000;display:inline;overflow:visible;visibility:visible;fill:#339967;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0;marker:none;enable-background:accumulate" />
                    <path
                        sodipodi:nodetypes="sss"
                        inkscape:original-d="m 743.65416,523.04294 c 0,0 -2.69825,-4.17102 -3.52356,-6.5723 -0.9183,-2.67187 -1.49186,-8.43498 -1.49186,-8.43498"
                        inkscape:path-effect="#path-effect3956-6-5-2-9"
                        inkscape:connector-curvature="0"
                        id="path3954-2"
                        d="m 743.65407,523.0428 c -0.01,-0.0181 -0.0195,-0.0369 -0.029,-0.055 -0.0258,-0.0492 -0.0516,-0.0985 -0.0772,-0.14782 -0.0928,-0.17861 -0.18443,-0.35769 -0.27527,-0.53715 l 0,0 0,0 0,0 c -0.2987,-0.59007 -0.58854,-1.18368 -0.86823,-1.78088 l 0,0 0,0 c -0.66048,-1.41233 -1.31521,-2.8246 -1.6624,-4.26145 0,0 0,0 0,0 -0.40873,-1.64768 -0.49314,-3.36971 -0.60238,-5.14241 0,0 0,0 0,0 -0.0405,-1.08122 -0.0807,-2.16032 -0.12072,-3.23731 -0.45902,0.0515 -0.91905,0.10316 -1.38012,0.15486 0,0 0,0 0,0 -0.46107,0.0517 -0.92109,0.10341 -1.38009,0.15515 0.22921,1.07685 0.45817,2.15158 0.68686,3.2242 l 0,0 c 0.40234,1.73878 0.82907,3.55755 1.57373,5.26575 0,0 0,0 0,0 0.66288,1.50199 1.56825,2.80745 2.46444,4.08469 0,0 0,0 0,0 0.38111,0.54452 0.77045,1.08198 1.1669,1.61305 0,0 0,0 0,0 l 0,0 c 0.12057,0.16151 0.24183,0.32247 0.36402,0.4826 0.0337,0.0442 0.0675,0.0884 0.10149,0.13245 0.0125,0.0162 0.0254,0.0331 0.038,0.0493 z"
                        style="color:#000000;display:inline;overflow:visible;visibility:visible;fill:#339967;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0;marker:none;enable-background:accumulate" />
                    <path
                        sodipodi:nodetypes="sss"
                        inkscape:original-d="m 754.87337,516.52365 c 0,0 -2.70527,-3.08645 -3.63263,-4.99797 -1.03187,-2.12691 -2.03982,-6.97478 -2.03982,-6.97478"
                        inkscape:path-effect="#path-effect3956-99-4-3-1"
                        inkscape:connector-curvature="0"
                        id="path3954-05"
                        d="m 754.87324,516.5235 c -0.01,-0.0141 -0.0203,-0.0287 -0.0302,-0.0428 -0.0266,-0.0379 -0.053,-0.0758 -0.0794,-0.11377 -0.0952,-0.13707 -0.18942,-0.2747 -0.28294,-0.41275 l 0,0 c -0.30714,-0.45341 -0.60648,-0.91098 -0.89684,-1.37284 0,0 0,0 0,0 -0.6884,-1.09682 -1.36877,-2.19407 -1.76873,-3.33427 0,0 0,0 0,0 -0.48165,-1.33518 -0.67595,-2.76883 -0.90714,-4.25542 0,0 0,0 0,0 -0.11757,-0.91594 -0.23463,-1.82967 -0.35117,-2.7412 -0.45076,0.0999 -0.90271,0.20011 -1.35586,0.30048 0,0 0,0 0,0 -0.45315,0.10037 -0.90508,0.20064 -1.35579,0.30081 0.30798,0.89154 0.61544,1.78088 0.9224,2.66801 0,0 0,0 0,0 0.51855,1.41859 1.07087,2.92034 1.89886,4.2846 0,0 0,0 0,0 0.72518,1.179 1.6388,2.14024 2.54005,3.07262 0,0 0,0 0,0 0.38244,0.39698 0.77126,0.7862 1.16552,1.16844 0,0 0,0 0,0 l 0,0 c 0.12005,0.11639 0.24064,0.23217 0.36194,0.34704 0.0336,0.0318 0.0673,0.0636 0.10104,0.0952 0.0126,0.0118 0.0257,0.0241 0.0383,0.0358 z"
                        style="color:#000000;display:inline;overflow:visible;visibility:visible;fill:#339967;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0;marker:none;enable-background:accumulate" />
                    <path
                        sodipodi:nodetypes="sss"
                        inkscape:original-d="m 766.24207,510.03684 c 0,0 -2.76649,-2.22784 -3.77751,-3.73579 -1.12494,-1.67787 -2.42717,-5.73254 -2.42717,-5.73254"
                        inkscape:path-effect="#path-effect3956-5-6-6-6"
                        inkscape:connector-curvature="0"
                        id="path3954-8"
                        d="m 766.24189,510.03669 c -0.45445,-0.49849 -0.90807,-0.99626 -1.36084,-1.4933 -0.726,-0.84476 -1.44327,-1.68823 -1.8851,-2.59862 0,0 0,0 0,0 -0.53689,-1.06647 -0.80857,-2.26372 -1.13154,-3.51758 0,0 0,0 0,0 -0.1319,-0.5342 -0.25416,-1.07052 -0.36829,-1.6086 l 0,0 0,0 c -0.0349,-0.1649 -0.0689,-0.32914 -0.10138,-0.49269 l 0,0 0,0 0,0 c -0.009,-0.0445 -0.0172,-0.0884 -0.0254,-0.13191 -0.43731,0.12315 -0.87822,0.24651 -1.32218,0.37156 10e-6,0 -0.01,0.003 -0.01,0.003 0,0 0,0 0,0 0,0 -0.01,0.003 -0.01,0.003 -0.43314,0.15872 -0.86259,0.31722 -1.28894,0.47401 0.0213,0.047 0.0427,0.0935 0.0639,0.13932 0,0 0,0 0,0 0.0754,0.16186 0.15144,0.32233 0.22801,0.48161 0,0 0,0 0,0 0.24973,0.51949 0.50746,1.03523 0.77415,1.54601 l 0,0 0,0 c 0.59185,1.14447 1.23581,2.37897 2.12835,3.44453 l 0,0 0,0 0,0 c 0.78977,0.92656 1.71959,1.60137 2.62755,2.24705 0.56122,0.37816 1.12161,0.7556 1.68117,1.13231 z"
                        style="color:#000000;display:inline;overflow:visible;visibility:visible;fill:#339967;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0;marker:none;enable-background:accumulate" />
                    <path
                        sodipodi:nodetypes="sss"
                        inkscape:original-d="m 780.75758,500.73679 c 0,0 -4.35954,-1.01936 -5.95274,-1.70932 -1.77271,-0.76771 -3.82482,-2.62293 -3.82482,-2.62293"
                        inkscape:path-effect="#path-effect3956-5-1-1-8-7"
                        inkscape:connector-curvature="0"
                        id="path3954-8-2"
                        d="m 780.75739,500.7368 c -0.77215,-0.30201 -1.54361,-0.60385 -2.31439,-0.90552 -1.16534,-0.47463 -2.33056,-0.9238 -3.32291,-1.53176 0,0 0,0 0,0 -0.78003,-0.47282 -1.46523,-1.11508 -2.16447,-1.80053 0,0 0,0 0,0 -0.26058,-0.26012 -0.51365,-0.52609 -0.75897,-0.79744 l 0,0 c -0.0706,-0.0786 -0.13927,-0.1567 -0.20572,-0.23436 l -1e-5,0 c -0.2386,0.22092 -0.47983,0.44455 -0.72367,0.67086 -0.0938,0.087 -0.18826,0.17415 -0.28277,0.26194 0,0 -0.004,0.005 -0.004,0.005 0,0 0,0 0,0 0,0 -0.004,0.005 -0.004,0.005 -0.0764,0.10415 -0.15196,0.20814 -0.22747,0.3114 -0.19637,0.26854 -0.38992,0.53417 -0.58071,0.79694 l -10e-6,1e-5 c 0.10613,0.0734 0.21164,0.14456 0.31639,0.21381 0.34283,0.22478 0.6904,0.44015 1.0422,0.64593 0,0 0,0 0,0 0.90479,0.53488 1.89371,1.04972 2.96316,1.37787 0,0 0,0 0,0 l 0,0 c 1.28995,0.38043 2.55691,0.52539 3.79583,0.68742 0.82468,0.0981 1.64867,0.19611 2.47199,0.29392 z"
                        style="color:#000000;display:inline;overflow:visible;visibility:visible;fill:#339967;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0;marker:none;enable-background:accumulate" />
                    <path
                        sodipodi:nodetypes="sss"
                        inkscape:original-d="m 775.32303,489.02676 c 0,0 -3.73817,2.21904 -5.10429,3.72103 -1.52004,1.67125 -3.27967,5.70989 -3.27967,5.70989"
                        inkscape:path-effect="#path-effect3956-5-1-8-8-6-6"
                        inkscape:connector-curvature="0"
                        id="path3954-8-2-9"
                        d="m 775.32284,489.02682 c -0.0165,0.008 -0.0336,0.0155 -0.0501,0.0231 -0.0443,0.0205 -0.0885,0.0412 -0.13275,0.0619 -0.15921,0.0747 -0.31801,0.15049 -0.47647,0.22712 l 0,0 c 0,0 0,0 0,0 -0.51628,0.24966 -1.02949,0.50812 -1.53883,0.77688 0,0 0,0 0,0 -1.15695,0.6067 -2.34984,1.22883 -3.40885,2.17455 l 0,0 0,0 c -1.10598,1.01021 -1.94611,2.25671 -2.70352,3.42455 0,0 0,0 0,0 -0.44394,0.71878 -0.88915,1.44022 -1.33564,2.16432 0.41948,0.19246 0.84027,0.38526 1.26238,0.57841 0,0 0,0 0,0 0.42211,0.19315 0.84295,0.38584 1.26253,0.57806 0.27146,-0.77052 0.54419,-1.5437 0.81819,-2.31955 0,0 0,0 0,0 0.5042,-1.27036 0.96063,-2.49033 1.7018,-3.51104 0,0 0,0 0,0 0.69007,-0.97734 1.69415,-1.81225 2.6945,-2.65586 0,0 0,0 0,0 0.43572,-0.36659 0.87945,-0.72578 1.32968,-1.07833 0,0 0,0 0,0 l 0,0 c 0.13818,-0.10821 0.27693,-0.21575 0.41651,-0.3224 0.0388,-0.0296 0.0776,-0.0592 0.1165,-0.0886 0.0144,-0.0109 0.0296,-0.0223 0.0441,-0.0331 z"
                        style="color:#000000;display:inline;overflow:visible;visibility:visible;fill:#339967;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0;marker:none;enable-background:accumulate" />
                    <path
                        sodipodi:nodetypes="sss"
                        inkscape:original-d="m 759.89841,489.59264 c 0,0 -2.70526,3.42909 -3.63263,5.5528 -1.03187,2.36302 -2.03982,7.74907 -2.03982,7.74907"
                        inkscape:path-effect="#path-effect3956-99-0-6-9-9"
                        inkscape:connector-curvature="0"
                        id="path3954-05-1"
                        d="m 759.89829,489.59279 c -0.0126,0.0132 -0.0256,0.027 -0.0381,0.0402 -0.0338,0.0357 -0.0675,0.0715 -0.10107,0.1074 l 0,0 c -0.12155,0.12977 -0.24231,0.26042 -0.36246,0.39168 l 0,0 0,0 0,0 c -0.39574,0.43229 -0.78531,0.87144 -1.16779,1.31813 l 0,0 0,0 c -0.90983,1.05969 -1.82672,2.14967 -2.5398,3.44337 l 0,0 0,0 0,0 c -0.83213,1.52504 -1.37723,3.17785 -1.89648,4.74901 l 0,0 c -0.2316,0.696 -0.45331,1.39554 -0.66632,2.09768 0,0 0,0 0,0 -0.0652,0.21473 -0.12961,0.43041 -0.19309,0.64718 l 0,0 0,0 0,0 c -0.0177,0.0607 -0.0354,0.12183 -0.053,0.18347 0.32127,0.0774 0.64421,0.15513 0.96883,0.2331 0.12339,0.0296 0.24699,0.0594 0.37086,0.0892 0,0 0.006,0.001 0.006,0.001 0,0 0,0 0,0 0,0 0.006,0.001 0.006,0.001 0.12616,0.0175 0.25211,0.0349 0.37781,0.0523 0.33068,0.0459 0.65972,0.0915 0.98712,0.13688 0.005,-0.0579 0.0106,-0.11617 0.0162,-0.17491 0,0 0,0 0,0 0.0207,-0.21533 0.0428,-0.43132 0.0657,-0.64791 0,0 0,0 0,0 0.0752,-0.70845 0.15914,-1.41596 0.25325,-2.12235 0,0 0,0 0,0 0.22798,-1.64608 0.42065,-3.24047 0.91027,-4.74228 0,0 0,0 0,0 0.39872,-1.25236 1.07895,-2.46559 1.77016,-3.67641 0,0 0,0 0,0 0.28918,-0.50583 0.58776,-1.00754 0.89459,-1.50519 0,0 0,0 0,0 l 10e-6,0 c 0.0932,-0.1511 0.18706,-0.30178 0.28202,-0.45191 0.0263,-0.0415 0.0526,-0.083 0.0791,-0.12438 0.01,-0.0153 0.0201,-0.0313 0.0299,-0.0466 z"
                        style="color:#000000;display:inline;overflow:visible;visibility:visible;fill:#339967;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0;marker:none;enable-background:accumulate" />
                    <path
                        inkscape:transform-center-y="6.2289284"
                        inkscape:transform-center-x="3.2207644"
                        sodipodi:nodetypes="css"
                        inkscape:original-d="m 710.31678,506.0775 c 0,0 -0.68204,3.68675 -1.07002,6.37144 -0.43172,2.98722 -0.0847,9.24798 -0.0847,9.24798"
                        inkscape:path-effect="#path-effect3956-99-0-8-9-5-5-6"
                        inkscape:connector-curvature="0"
                        id="path3954-05-1-4"
                        d="m 710.31674,506.07772 c -0.54431,2.09223 -1.08896,4.1866 -1.63396,6.28312 0,0 0,0 0,0 -0.447,1.93063 -0.58498,3.91769 -0.71819,5.83485 0,0 0,0 0,0 -0.059,0.83699 -0.10743,1.67506 -0.14652,2.51363 0,0 0,0 0,0 -0.0119,0.25566 -0.0229,0.512 -0.0327,0.7691 0,0 0,0 0,0 l 0,0 c -0.003,0.0716 -0.005,0.14354 -0.008,0.21593 l 0,0 c 0.33208,7.9e-4 0.66585,0.001 1.00132,0.002 0.1258,2.1e-4 0.25184,5.4e-4 0.37812,7.1e-4 0,0 0.005,-1.3e-4 0.005,-1.3e-4 0,0 0,0 0,0 0,0 0.005,-3.9e-4 0.005,-3.9e-4 0.12551,-0.0137 0.25079,-0.0276 0.37584,-0.0413 0.33348,-0.0365 0.66529,-0.0729 0.99544,-0.10921 -0.01,-0.0663 -0.0191,-0.1331 -0.0285,-0.20028 l 0,0 c 0,0 0,-10e-6 0,-10e-6 -0.0343,-0.24634 -0.0675,-0.49356 -0.0998,-0.74153 0,0 0,0 0,0 -0.10609,-0.81355 -0.20322,-1.62836 -0.28994,-2.44462 0,0 0,0 0,0 -0.19726,-1.90714 -0.40927,-3.76767 -0.30918,-5.62255 l 0,0 c 0.16832,-2.15096 0.33699,-4.30407 0.506,-6.45932 z"
                        style="color:#000000;display:inline;overflow:visible;visibility:visible;fill:#339967;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0;marker:none;enable-background:accumulate" />
                    <path
                        inkscape:transform-center-y="5.4408342"
                        inkscape:transform-center-x="3.1425198"
                        sodipodi:nodetypes="sss"
                        inkscape:original-d="m 722.74975,501.28123 c 0,0 -1.75907,4.24818 -2.13352,6.61074 -0.41664,2.62878 -0.0818,8.13832 -0.0818,8.13832"
                        inkscape:path-effect="#path-effect3956-99-0-8-2-6-1-7"
                        inkscape:connector-curvature="0"
                        id="path3954-05-1-4-5"
                        d="m 722.74968,501.2814 c -0.009,0.0169 -0.018,0.0345 -0.0268,0.0514 -0.0239,0.0458 -0.0476,0.0917 -0.0712,0.13757 l 0,0 c -0.0856,0.16613 -0.17017,0.33285 -0.25406,0.49997 l 0,0 c 0,0 0,0 0,0 -0.2761,0.54997 -0.5448,1.10459 -0.80503,1.66428 0,0 0,0 0,0 -0.61603,1.32088 -1.23343,2.66943 -1.60808,4.15717 0,0 0,0 0,0 -0.42447,1.71555 -0.55063,3.48182 -0.66897,5.17028 0,0 0,0 0,0 -0.0561,1.0433 -0.11221,2.08861 -0.1682,3.13593 0.4613,-0.0224 0.92368,-0.045 1.38714,-0.0678 0,0 0,0 0,0 0.46345,-0.0228 0.92583,-0.0455 1.38713,-0.0681 -0.13307,-1.0185 -0.26622,-2.039 -0.39945,-3.0615 0,0 0,0 0,0 -0.18003,-1.67665 -0.3765,-3.3 -0.27411,-4.90863 0,0 0,0 0,0 0.0794,-1.37735 0.43359,-2.78577 0.79567,-4.19586 0,0 0,0 0,0 0.15256,-0.59291 0.31481,-1.18437 0.48564,-1.77419 0,0 0,0 0,0 l 0,0 c 0.0519,-0.17923 0.10459,-0.35826 0.15839,-0.53706 0.0149,-0.0494 0.0298,-0.0988 0.0449,-0.14817 0.006,-0.0182 0.0114,-0.0372 0.0171,-0.0554 z"
                        style="color:#000000;display:inline;overflow:visible;visibility:visible;fill:#339967;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0;marker:none;enable-background:accumulate" />
                    <path
                        inkscape:transform-center-y="5.4261724"
                        inkscape:transform-center-x="3.1358707"
                        sodipodi:nodetypes="sss"
                        inkscape:original-d="m 735.07326,495.73793 c 0,0 -0.65823,4.05629 -1.03267,6.41886 -0.41664,2.62878 -1.1826,8.3302 -1.1826,8.3302"
                        inkscape:path-effect="#path-effect3956-99-0-8-8-8-4-1"
                        inkscape:connector-curvature="0"
                        id="path3954-05-1-4-2"
                        d="m 735.07323,495.73813 c -0.54345,2.1075 -1.08695,4.21523 -1.63049,6.32319 0,0 0,0 0,0 l 0,0 c -0.43111,1.6913 -0.82845,3.39022 -1.22591,5.0813 l 0,0 c -0.17394,0.74043 -0.34679,1.48114 -0.51869,2.22206 l 0,0 0,0 c -0.0525,0.22642 -0.10498,0.45293 -0.15732,0.67955 l 0,0 0,0 0,0 c -0.0145,0.0627 -0.0289,0.12536 -0.0434,0.18811 l 0,0 c 0.3254,0.061 0.65247,0.12229 0.98122,0.18377 0.12433,0.0233 0.24888,0.0467 0.37369,0.07 0,0 0.006,9e-4 0.006,9e-4 0,0 0,0 0,0 0,0 0.006,6.2e-4 0.006,6.2e-4 0.12654,0.0105 0.25285,0.0208 0.3789,0.0313 0.33331,0.0276 0.66495,0.055 0.99491,0.0821 0.003,-0.0637 0.005,-0.12748 0.008,-0.19129 l 0,0 c 0,0 0,-10e-6 0,-10e-6 0.01,-0.2314 0.0193,-0.46287 0.029,-0.69442 l 0,0 0,0 c 0.032,-0.75773 0.0651,-1.51543 0.0992,-2.2731 l 0,0 c 0.0785,-1.73568 0.15446,-3.4642 0.26492,-5.18991 l 0,0 0,0 c 0.14489,-2.17115 0.28981,-4.34252 0.43479,-6.51413 z"
                        style="color:#000000;display:inline;overflow:visible;visibility:visible;fill:#339967;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0;marker:none;enable-background:accumulate" />
                    <path
                        inkscape:transform-center-y="5.4895729"
                        inkscape:transform-center-x="3.1304832"
                        sodipodi:nodetypes="sss"
                        inkscape:original-d="m 746.59906,492.33132 c 0,0 -1.75908,4.24818 -2.13352,6.61074 -0.41665,2.62878 -0.0818,8.13832 -0.0818,8.13832"
                        inkscape:path-effect="#path-effect3956-99-0-8-4-8-3-0"
                        inkscape:connector-curvature="0"
                        id="path3954-05-1-4-1"
                        d="m 746.59899,492.33149 c -0.009,0.0169 -0.018,0.0345 -0.0268,0.0515 -0.0239,0.0458 -0.0476,0.0917 -0.0712,0.13757 -0.0856,0.16613 -0.17017,0.33285 -0.25406,0.49997 0,0 0,0 0,0 -0.27611,0.54997 -0.5448,1.10459 -0.80504,1.66428 0,0 0,0 0,0 -0.61603,1.32088 -1.23342,2.66943 -1.60807,4.15717 l 0,0 c -0.42448,1.71555 -0.55064,3.48182 -0.66897,5.17028 0,0 0,0 0,0 -0.0562,1.04331 -0.11222,2.08862 -0.1682,3.13593 0.4613,-0.0224 0.92368,-0.045 1.38714,-0.0678 0,0 0,0 0,0 0.46345,-0.0228 0.92583,-0.0455 1.38713,-0.0681 -0.13307,-1.0185 -0.26622,-2.039 -0.39945,-3.0615 0,0 0,0 0,0 -0.18003,-1.67665 -0.3765,-3.3 -0.27411,-4.90863 0,0 0,0 0,0 0.0794,-1.37735 0.43358,-2.78577 0.79566,-4.19586 0,0 0,0 0,0 0.15257,-0.59291 0.31482,-1.18436 0.48565,-1.77419 0,0 0,0 0,0 l 0,0 c 0.0519,-0.17923 0.10459,-0.35826 0.15839,-0.53706 0.0149,-0.0494 0.0298,-0.0988 0.0449,-0.14817 0.006,-0.0182 0.0114,-0.0372 0.0171,-0.0554 z"
                        style="color:#000000;display:inline;overflow:visible;visibility:visible;fill:#339967;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0;marker:none;enable-background:accumulate" />
                    <path
                        inkscape:transform-center-y="-3.3732331"
                        inkscape:transform-center-x="6.0153358"
                        sodipodi:nodetypes="css"
                        inkscape:original-d="m 693.24659,558.82241 c 0,0 -5.21082,-8.34764 -6.56786,-10.57106 -1.67408,-2.74285 -6.21224,-6.3116 -6.21224,-6.3116"
                        inkscape:path-effect="#path-effect3956-99-0-8-7-54-5-4"
                        inkscape:connector-curvature="0"
                        id="path3954-05-1-4-16"
                        d="m 693.24655,558.82234 c -1.95989,-3.66619 -3.91921,-7.33145 -5.87797,-10.99581 -0.95495,-1.77673 -2.31252,-3.26614 -3.63156,-4.62708 0,0 0,0 0,0 -0.79414,-0.77562 -1.59036,-1.55301 -2.38866,-2.33218 -0.29348,0.3566 -0.58744,0.71409 -0.88187,1.07248 0,0 0,0 0,0 -0.29443,0.35839 -0.58831,0.71594 -0.88164,1.07266 0.86162,0.64608 1.72533,1.29393 2.59113,1.94356 0,0 0,0 0,0 1.43279,1.16997 2.82008,2.30565 3.8129,3.7202 2.41978,3.38297 4.839,6.76503 7.25767,10.14617 z"
                        style="color:#000000;display:inline;overflow:visible;visibility:visible;fill:#339967;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0;marker:none;enable-background:accumulate" />
                    <path
                        inkscape:transform-center-y="-3.3732331"
                        inkscape:transform-center-x="6.0153358"
                        sodipodi:nodetypes="csc"
                        inkscape:original-d="m 682.4873,558.25332 c 0,0 -3.18765,-3.35776 -5.46655,-5.47243 -2.23246,-2.07157 -3.42862,-6.27622 -3.42862,-6.27622"
                        inkscape:path-effect="#path-effect3956-99-0-8-7-5-6-6-6"
                        inkscape:connector-curvature="0"
                        id="path3954-05-1-4-16-8"
                        d="m 682.48718,558.25319 c -1.65279,-1.99327 -3.30883,-3.98971 -4.96812,-5.98931 -0.93928,-1.04786 -1.48705,-2.40615 -1.97553,-3.81705 0,0 0,0 0,0 -0.21286,-0.79657 -0.42387,-1.58804 -0.63303,-2.37439 -0.43818,0.14398 -0.87763,0.28805 -1.31837,0.43223 0,0 0,0 0,0 -0.44074,0.14418 -0.88016,0.28838 -1.31826,0.4326 0.37999,0.79773 0.75813,1.59035 1.13442,2.37786 0.77527,1.44682 1.76295,2.90522 3.11415,3.98277 0,0 0,0 0,0 1.98499,1.6486 3.97324,3.30036 5.96474,4.95529 z"
                        style="color:#000000;display:inline;overflow:visible;visibility:visible;fill:#339967;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0;marker:none;enable-background:accumulate" />
                    <path
                        inkscape:transform-center-y="1.4986979"
                        inkscape:transform-center-x="-2.4574274"
                        sodipodi:nodetypes="css"
                        inkscape:original-d="m 701.04191,514.54689 c 0,0 3.47201,-0.55583 4.55551,-0.47081 1.33662,0.10488 3.64385,1.41045 3.64385,1.41045"
                        inkscape:path-effect="#path-effect3956-99-0-8-7-1-85-6-3"
                        inkscape:connector-curvature="0"
                        id="path3954-05-1-4-16-5"
                        d="m 701.04215,514.54685 c 0.0234,1.2e-4 0.0224,6e-5 0.0458,1.8e-4 0.0397,2.2e-4 0.0794,5.1e-4 0.11912,8.4e-4 0.14102,0.001 0.28195,0.003 0.42284,0.005 l 0,0 0,0 c 0.44662,0.007 0.89249,0.0173 1.33707,0.0331 0,0 0,0 0,0 0.91503,0.0331 1.82027,0.0221 2.57189,0.23571 0,0 0,0 0,0 0.62977,0.16626 1.20739,0.59945 1.89304,1.03466 0,0 0,0 0,0 0.27378,0.18713 0.54199,0.38224 0.80551,0.58391 0,0 0,0 0,0 l 0,0 c 0.0782,0.0605 0.15464,0.12093 0.22896,0.18142 l 0,0 c 0.18182,-0.26581 0.36599,-0.53553 0.55253,-0.80915 0.0724,-0.10618 0.14557,-0.21273 0.21865,-0.32005 0,0 0.004,-0.006 0.004,-0.006 0,0 0,0 0,0 0,0 0.003,-0.006 0.003,-0.006 0.0527,-0.11884 0.10457,-0.23725 0.15649,-0.35481 0.1338,-0.30292 0.26511,-0.60169 0.39396,-0.89639 -0.11426,-0.0424 -0.2275,-0.0829 -0.33971,-0.12173 0,0 0,0 0,0 -0.35486,-0.1211 -0.71311,-0.23338 -1.07417,-0.33529 0,0 0,0 0,0 -0.79144,-0.23734 -1.73677,-0.48088 -2.72503,-0.44158 0,0 0,0 0,0 -1.02937,0.0739 -1.91051,0.3798 -2.76758,0.63909 0,0 0,0 0,0 -0.43105,0.12761 -0.85953,0.26 -1.28613,0.39596 l -10e-6,0 c -0.13458,0.0429 -0.26901,0.0862 -0.40321,0.12991 l 0,0 c -0.0378,0.0123 -0.0755,0.0247 -0.11328,0.0371 -0.0199,0.007 -0.0237,0.008 -0.0436,0.0143 z"
                        style="color:#000000;display:inline;overflow:visible;visibility:visible;fill:#339967;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0;marker:none;enable-background:accumulate" />
                    <path
                        inkscape:transform-center-x="-0.17450138"
                        inkscape:transform-center-y="-4.1227119"
                        sodipodi:nodetypes="css"
                        inkscape:original-d="m 673.68366,537.20573 c 0,0 2.47103,-2.44379 3.12094,-3.52197 0.80175,-1.33006 1.65836,-4.99891 1.65836,-4.99891"
                        inkscape:path-effect="#path-effect3956-99-0-8-7-1-8-0-7-1"
                        inkscape:connector-curvature="0"
                        id="path3954-05-1-4-16-5-7"
                        d="m 673.68383,537.20556 c 0.009,-0.006 0.0277,-0.0208 0.0362,-0.0272 0.0314,-0.0236 0.0627,-0.0473 0.094,-0.071 0.1115,-0.0845 0.22268,-0.16946 0.33359,-0.25487 l 0,0 c 0.35464,-0.27308 0.70691,-0.55041 1.05615,-0.8332 l 0,0 0,0 0,0 c 0.73223,-0.58796 1.5062,-1.17533 2.16178,-1.99742 l 0,0 0,0 c 0.7333,-0.94967 1.20035,-2.05338 1.62374,-3.02811 l 0,0 0,0 0,0 c 0.27307,-0.65524 0.54679,-1.31296 0.82116,-1.97316 -0.44748,-0.11174 -0.89665,-0.22366 -1.34749,-0.33577 0,0 0,0 0,0 -0.45084,-0.11211 -0.90004,-0.22389 -1.34759,-0.33534 -0.0807,0.68307 -0.16213,1.36862 -0.24417,2.05666 l 0,0 c 0,0 0,0 0,0 -0.17108,1.07107 -0.26102,2.06456 -0.62755,2.93946 l 0,0 c -0.3105,0.7806 -0.87926,1.53386 -1.42639,2.31162 0,0 0,0 0,0 -0.25617,0.3635 -0.51794,0.72434 -0.78399,1.08289 0,0 0,0 0,0 l 0,0 c -0.0832,0.11213 -0.16681,0.22401 -0.25097,0.33557 -0.0236,0.0313 -0.0473,0.0626 -0.071,0.0939 -0.006,0.008 -0.0217,0.0284 -0.0275,0.036 z"
                        style="color:#000000;display:inline;overflow:visible;visibility:visible;fill:#339967;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0;marker:none;enable-background:accumulate" />
                    <path
                        inkscape:transform-center-x="1.761895"
                        inkscape:transform-center-y="-1.0950458"
                        sodipodi:nodetypes="css"
                        inkscape:original-d="m 691.70051,545.62494 c 0,0 -2.4938,0.37286 -3.56917,0.53028 -1.32658,0.1942 -4.03669,-0.90865 -4.03669,-0.90865"
                        inkscape:path-effect="#path-effect3956-99-0-8-7-1-8-4-8-2-6"
                        inkscape:connector-curvature="0"
                        id="path3954-05-1-4-16-5-7-4"
                        d="m 691.70018,545.62499 c -0.0115,-3.6e-4 -0.0232,-6.5e-4 -0.0346,-0.001 l -0.0875,-0.002 c -0.10345,-0.003 -0.2069,-0.006 -0.31035,-0.009 l 0,0 c -0.33361,-0.01 -0.66721,-0.0191 -1.00079,-0.0287 l 0,0 0,0 c -0.74345,-0.0214 -1.48669,-0.0427 -2.22891,-0.0662 l 0,0 0,0 c -0.66862,-0.0313 -1.31031,-0.43605 -2.09502,-0.79303 0,0 0,0 0,0 -0.32004,-0.16548 -0.63442,-0.34175 -0.94444,-0.52648 l 0,0 c -0.0929,-0.0561 -0.1838,-0.1124 -0.27234,-0.16918 l 0,0 c -0.14848,0.2853 -0.29903,0.57537 -0.45164,0.87019 -0.0587,0.11339 -0.11823,0.22728 -0.17752,0.34203 0,0 -0.002,0.005 -0.002,0.005 0,0 0,0 0,0 0,0 -0.002,0.005 -0.002,0.005 -0.0358,0.12432 -0.0706,0.24803 -0.10571,0.3708 -0.0912,0.3192 -0.18025,0.63334 -0.26714,0.94251 0.13058,0.0281 0.2598,0.0541 0.38767,0.0785 l 0,0 0,0 c 0.40078,0.0742 0.80433,0.13749 1.20946,0.18747 0.84221,0.12645 1.8969,0.23851 2.90761,-0.0386 0,0 0,0 0,0 0.70664,-0.23557 1.41168,-0.4729 2.11654,-0.71006 l 0,0 c 0.31636,-0.10643 0.63269,-0.21292 0.94899,-0.31946 l 0,0 c 0.0981,-0.033 0.19615,-0.0661 0.29423,-0.0991 l 0.0829,-0.028 c 0.0109,-0.004 0.022,-0.007 0.0328,-0.0111 z"
                        style="color:#000000;display:inline;overflow:visible;visibility:visible;fill:#339967;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0;marker:none;enable-background:accumulate" />
                    <path
                        sodipodi:nodetypes="ccscscc"
                        inkscape:connector-curvature="0"
                        id="rect4052"
                        d="m 610.75807,425.53606 c 6.39157,-6.14744 11.29341,-8.57058 15.96937,-10.42897 13.18788,-5.49729 15.2609,-4.73709 13.80124,-2.07192 -1.30201,2.37733 -10.95524,5.29265 -12.49762,7.61231 -6.69163,4.67151 -9.64816,7.09116 -16.88683,13.1087 -5.21804,4.33778 -9.9388,15.1236 -12.11876,11.98601 -0.29814,-6.40947 6.1503,-13.79666 11.7326,-20.20613 z"
                        style="color:#000000;display:inline;overflow:visible;visibility:visible;fill:url(#radialGradient29329);fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1;marker:none;enable-background:accumulate" />
                    <path
                        sodipodi:nodetypes="cccscccccssscc"
                        inkscape:connector-curvature="0"
                        id="rect4019"
                        d="m 679.88602,487.36285 -5.48449,21.69703 c -23.38496,-3.78201 -27.99349,35.60662 -7.22029,48.72065 16.13348,8.13026 33.408,6.12971 39.54799,-1.06972 7.75656,-9.09493 3.32702,-26.40347 14.97111,-30.14234 6.05561,4.37979 21.09737,-10.1778 20.28285,44.02037 l -2.70048,25.88075 c -6.33894,-3.08715 -10.81714,-4.38357 -16.3454,-7.24741 l 4.71565,-35.37257 c -2.83395,25.23201 -16.17745,37.64368 -47.81171,35.56962 -6.1415,-0.40266 -16.40989,-3.20339 -23.85787,-7.15225 -6.02401,-3.19389 -10.05076,-6.81847 -15.85524,-13.7565 -13.26537,-15.85593 -13.62137,-38.33336 1.23864,-67.16714 z"
                        style="color:#000000;display:inline;overflow:visible;visibility:visible;opacity:0.82083333;fill:#f4d7d7;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0;marker:none;enable-background:accumulate" />
                    <path
                        sodipodi:nodetypes="cssc"
                        inkscape:original-d="m 678.18067,500.9021 c -6.05758,-0.29484 -31.49069,-4.10807 -33.449,31.2007 -1.49092,26.8815 8.3994,35.13987 20.23141,40.28367 10.33714,4.49392 30.36512,6.70362 46.91491,-2.24035"
                        inkscape:path-effect="#path-effect3182-0-0-8"
                        inkscape:connector-curvature="0"
                        id="path3169"
                        d="m 677.53974,514.07011 c -0.54376,-0.0309 -1.03412,-0.0652 -1.47148,-0.0978 -0.39733,-4.06973 -0.62889,-8.13331 -1.03686,-12.19249 -0.0479,-0.47029 -0.0974,-0.94056 -0.14876,-1.41079 -0.32658,4.48469 -0.6251,8.9713 -0.89362,13.45945 -0.31052,-0.0153 -0.61397,-0.0275 -0.9102,-0.036 0.2161,-5.46348 0.49585,-10.92557 0.83382,-16.38521 -0.0897,-3.30984 -0.21237,-6.61957 -0.37074,-9.92857 0.51632,0.007 1.02536,0.0205 1.52699,0.04 0.16425,1.51363 0.31216,3.02779 0.44522,4.54213 0.29441,3.07505 0.47749,6.14878 0.63907,9.22267 0.56459,-4.53555 1.15436,-9.06897 1.7023,-13.60534 0.37389,0.0246 0.69585,0.0448 0.96612,0.0559 -0.42752,5.60876 -0.97,11.20896 -1.5625,16.80521 0.0457,3.17565 0.12698,6.35219 0.28064,9.53081 z m -5.86166,-0.22973 c -0.13122,0.003 -0.26071,0.006 -0.38844,0.0115 -0.13567,0.009 -0.27033,0.0179 -0.40391,0.0276 -0.72942,-4.45794 -1.70921,-8.9032 -2.97261,-13.28854 0.4419,4.48204 0.93295,8.95835 1.4742,13.42758 -0.24041,0.028 -0.47586,0.0587 -0.70587,0.0924 -0.85347,-5.40381 -1.60989,-10.82604 -2.2722,-16.26302 -0.7024,-3.23984 -1.45708,-6.46895 -2.26547,-9.68539 0.57126,-0.10502 1.14023,-0.19714 1.70643,-0.2767 1.38442,4.42046 2.53224,8.89763 3.46469,13.40207 -0.13601,-4.57474 -0.16903,-9.15354 -0.10424,-13.73006 0.28358,-0.0158 0.56618,-0.0285 0.84776,-0.0381 0.2669,-0.0123 0.53214,-0.0227 0.79572,-0.0312 -0.1135,4.8085 -0.1563,9.6168 -0.12276,14.42379 0.006,0.81973 0.0137,1.63951 0.024,2.45934 0.0531,0.45915 0.10489,0.91834 0.15545,1.37755 0.29687,2.69427 0.55159,5.39157 0.7673,8.09114 z m -4.07155,0.51855 c -0.21009,0.0446 -0.41396,0.0929 -0.61116,0.14521 -1.62134,-4.21195 -3.56374,-8.30503 -5.86044,-12.23201 1.52386,4.22243 3.11054,8.42213 4.7611,12.59779 -0.1507,0.0626 -0.29533,0.129 -0.43357,0.19954 -0.0152,0.006 -0.0305,0.0116 -0.0457,0.0175 -0.54552,-1.19216 -1.08377,-2.38794 -1.61471,-3.5873 -1.67837,-3.80345 -3.28651,-7.63504 -4.82569,-11.49314 -1.24981,-2.43104 -2.54436,-4.84253 -3.88446,-7.23338 -0.28339,-0.50277 -0.56887,-1.00439 -0.85643,-1.50486 0.0425,-0.0207 0.0851,-0.0413 0.12773,-0.0618 0.54104,-0.24281 1.08232,-0.47276 1.62348,-0.69014 2.51049,3.90181 4.72657,7.94401 6.66948,12.09717 -1.19088,-4.40381 -2.248,-8.84875 -3.1765,-13.32847 0.58055,-0.17725 1.16004,-0.34062 1.738,-0.49048 1.03238,5.53606 2.19959,11.03949 3.50659,16.50415 1.03673,2.99568 1.9966,6.01695 2.88227,9.06023 z m -2.86502,1.10814 c -0.14117,0.0777 -0.2818,0.16198 -0.42155,0.25223 -2.74041,-3.57023 -5.82907,-6.88799 -9.21758,-9.92494 2.74247,3.55505 5.54042,7.067 8.39246,10.53492 -0.1349,0.11238 -0.26825,0.22981 -0.39972,0.35182 -3.67585,-4.0429 -7.25778,-8.17053 -10.74199,-12.3803 -2.34235,-2.33672 -4.73679,-4.62524 -7.18132,-6.86431 0.46366,-0.43031 0.93958,-0.84952 1.42743,-1.25715 3.59168,2.93743 6.95365,6.10295 10.0557,9.4784 -2.46235,-3.83985 -4.79348,-7.76803 -6.98685,-11.78006 0.53435,-0.3594 1.08003,-0.70627 1.63673,-1.04013 2.54718,5.01531 5.25085,9.94249 8.10467,14.77723 1.8608,2.56183 3.63937,5.18003 5.33202,7.85229 z m -2.23617,1.88904 c -0.12376,0.13505 -0.24511,0.27389 -0.36373,0.41602 -3.69409,-2.5927 -7.62801,-4.8731 -11.75336,-6.81283 3.65493,2.62244 7.3478,5.18991 11.07723,7.70149 -0.0866,0.12493 -0.17101,0.25141 -0.25295,0.37919 -0.0241,0.0332 -0.0481,0.0666 -0.0719,0.10021 -1.94809,-1.19231 -3.88807,-2.40078 -5.81981,-3.62558 -2.68694,-1.69866 -5.35249,-3.43303 -7.99588,-5.20258 -1.84104,-0.99409 -3.69552,-1.96438 -5.56294,-2.91054 -1.08514,-0.55379 -2.17351,-1.10043 -3.26506,-1.63998 0.0434,-0.0785 0.087,-0.15694 0.1309,-0.23539 0.27027,-0.4573 0.55059,-0.9085 0.84077,-1.35332 4.27751,1.79736 8.41093,3.87201 12.37005,6.20578 -3.47994,-2.96646 -6.867,-6.04806 -10.15463,-9.24031 0.39558,-0.4869 0.80425,-0.96397 1.22569,-1.43074 3.93748,4.02917 7.98934,7.94124 12.14922,11.73193 2.54096,1.90168 5.0243,3.87466 7.44636,5.91665 z m -1.90608,2.75913 c -0.1118,0.20285 -0.21899,0.41226 -0.32184,0.62798 -4.25115,-1.47043 -8.60741,-2.65429 -13.04552,-3.5802 4.14177,1.69181 8.30151,3.34092 12.47849,4.94815 -0.0866,0.23989 -0.16942,0.48555 -0.24873,0.73674 -5.14245,-1.80849 -10.25613,-3.69052 -15.33899,-5.64832 -3.17271,-0.90072 -6.36062,-1.7588 -9.56271,-2.5754 0.17586,-0.51798 0.36062,-1.03665 0.55456,-1.55577 4.52675,0.85956 8.99144,1.9159 13.37924,3.18683 -4.08021,-2.00224 -8.11528,-4.10239 -12.10165,-6.30423 0.23179,-0.5199 0.47331,-1.03975 0.72485,-1.5593 4.86311,2.79601 9.78225,5.47657 14.75398,8.0454 2.93644,1.16034 5.8465,2.38566 8.72832,3.67812 z m -1.44694,4.03039 c -0.0684,0.26807 -0.13366,0.54125 -0.19621,0.81925 -4.48198,-0.57677 -9.01937,-0.93148 -13.58894,-1.09274 4.40665,0.97112 8.8218,1.90975 13.24474,2.81671 -0.0526,0.29628 -0.10305,0.59687 -0.15154,0.90151 -5.40446,-1.00333 -10.7976,-2.06147 -16.17739,-3.17664 -3.30424,-0.38343 -6.6144,-0.73504 -9.92946,-1.05599 0.0835,-0.50218 0.1743,-1.00646 0.27271,-1.5126 4.63754,0.14869 9.2535,0.44342 13.83308,0.902 -4.40761,-1.24268 -8.79132,-2.56102 -13.14756,-3.95881 0.12992,-0.51257 0.26801,-1.02651 0.41453,-1.54157 5.33745,1.76478 10.70793,3.43862 16.108,5.0252 3.12085,0.57337 6.22748,1.19721 9.31804,1.87368 z m -0.86015,4.98636 c -0.0429,0.31683 -0.0843,0.63729 -0.1245,0.96111 -4.56394,0.0897 -9.13361,0.33686 -13.68576,0.71301 4.4867,0.44471 8.97247,0.86716 13.45656,1.26814 -0.0273,0.25064 -0.0543,0.50286 -0.081,0.75654 -0.005,0.0921 -0.01,0.18398 -0.0147,0.27578 -3.12951,-0.25704 -6.25785,-0.52284 -9.38491,-0.79711 -2.32064,-0.20246 -4.64218,-0.4117 -6.96447,-0.6279 -1.533,-0.009 -3.06528,-0.0133 -4.59673,-0.0133 -1.77847,-0.003 -3.55737,-0.001 -5.33665,0.004 0.006,-0.0999 0.0118,-0.19962 0.018,-0.29924 0.009,-0.36746 0.0217,-0.73703 0.0379,-1.10858 4.5905,-0.33819 9.19992,-0.58108 13.81344,-0.71085 -4.54124,-0.67481 -9.07981,-1.40303 -13.61215,-2.18847 0.0461,-0.48912 0.0987,-0.98102 0.15815,-1.47544 5.57704,0.97335 11.1641,1.88023 16.75773,2.72436 3.18905,0.13589 6.37603,0.30774 9.5591,0.51771 z m -0.47415,5.7396 c -0.0139,0.35373 -0.0261,0.70535 -0.0363,1.05478 -4.51787,0.50487 -9.03266,1.10769 -13.53572,1.82866 4.50003,0.10084 8.9999,0.18141 13.49939,0.24111 -0.002,0.34039 -9.5e-4,0.67845 0.002,1.01411 -5.47081,-0.0115 -10.94313,-0.064 -16.41633,-0.15594 -3.30487,0.23299 -6.60827,0.48801 -9.90987,0.76591 -0.0145,-0.47793 -0.0248,-0.95379 -0.0311,-1.42748 4.55875,-0.68139 9.12746,-1.26273 13.70083,-1.75678 -4.56544,-0.31243 -9.12945,-0.66636 -13.69102,-1.05885 0.009,-0.46475 0.0211,-0.92718 0.0367,-1.38723 5.61572,0.45048 11.23482,0.86185 16.85628,1.23128 3.17523,-0.13936 6.35035,-0.25535 9.52473,-0.34957 z m 0.0245,5.77178 c 0.0123,0.3272 0.0276,0.65185 0.0459,0.9739 -4.44978,0.87806 -8.87622,1.89819 -13.27068,3.08058 4.47658,-0.36513 8.95022,-0.75835 13.42073,-1.18026 0.0318,0.3113 0.0672,0.61985 0.10646,0.92557 -5.42765,0.60946 -10.86183,1.16346 -16.30195,1.66369 -3.25326,0.59274 -6.50191,1.2154 -9.74562,1.86884 -0.0689,-0.4992 -0.1324,-0.99676 -0.19076,-1.49261 4.44903,-1.19088 8.92356,-2.24627 13.41829,-3.17892 -4.56476,0.13287 -9.13394,0.20686 -13.70652,0.22491 -0.0385,-0.48866 -0.0723,-0.97546 -0.10161,-1.46031 5.62957,-0.0273 11.25597,-0.11256 16.87821,-0.25875 3.1452,-0.42215 6.29457,-0.8105 9.4475,-1.16664 z m 0.58351,5.27489 c 0.0342,0.19387 0.0702,0.38648 0.10806,0.57778 0.0203,0.0976 0.0408,0.19477 0.0614,0.2915 -4.30451,1.38067 -8.57216,2.96103 -12.76357,4.76581 4.39045,-1.00348 8.77145,-2.0463 13.1419,-3.12925 0.0666,0.26421 0.13505,0.52389 0.2058,0.77864 -5.27314,1.46691 -10.57026,2.85641 -15.88828,4.17075 -3.1336,1.08383 -6.25353,2.20919 -9.35819,3.37717 -0.16112,-0.52524 -0.31176,-1.04959 -0.4522,-1.57267 4.22647,-1.88371 8.52136,-3.58023 12.8601,-5.10538 -4.51498,0.74321 -9.04366,1.40356 -13.58073,1.98493 -0.0341,-0.17487 -0.0671,-0.3495 -0.0989,-0.52388 -0.0631,-0.33506 -0.12358,-0.66949 -0.18158,-1.00326 5.58201,-0.69541 11.15431,-1.4678 16.71591,-2.32 3.06852,-0.80777 6.14551,-1.57129 9.23034,-2.29214 z m 1.17547,4.48025 c 0.0787,0.23687 0.16001,0.46817 0.24435,0.6935 -4.01582,2.07971 -7.90645,4.41144 -11.63249,7.01991 4.083,-1.86434 8.14232,-3.7783 12.17685,-5.74267 0.0974,0.19993 0.19841,0.39311 0.30324,0.57918 -4.80909,2.58828 -9.6683,5.08017 -14.57453,7.47789 -2.82231,1.72181 -5.61599,3.49511 -8.37942,5.32098 -0.28922,-0.52301 -0.56643,-1.04733 -0.83191,-1.57258 3.70803,-2.7612 7.5542,-5.29228 11.51393,-7.60906 -4.27918,1.58774 -8.60314,3.06943 -12.96659,4.44895 -0.2196,-0.52738 -0.428,-1.05491 -0.62546,-1.58221 5.39428,-1.62524 10.75,-3.3577 16.06199,-5.20111 2.87678,-1.33755 5.78112,-2.61448 8.71004,-3.83278 z m 1.66105,3.37985 c 0.10503,0.16659 0.21587,0.33185 0.33215,0.49555 -3.41707,2.94717 -6.60235,6.18169 -9.53597,9.66602 3.47121,-2.85538 6.90347,-5.75724 10.29615,-8.70451 0.13655,0.15653 0.2778,0.31104 0.42337,0.46328 -3.97304,3.75538 -8.0215,7.43155 -12.14358,11.02556 -2.2811,2.39959 -4.51919,4.84289 -6.71338,7.32836 -0.42027,-0.43102 -0.83164,-0.87238 -1.23376,-1.32385 2.86095,-3.64622 5.92497,-7.10011 9.17932,-10.33819 -3.74572,2.61422 -7.57231,5.11882 -11.47661,7.50869 -0.36359,-0.49106 -0.71717,-0.9918 -1.06039,-1.502 4.87208,-2.82577 9.66158,-5.78144 14.36546,-8.86206 2.47109,-1.98802 4.99404,-3.90792 7.56724,-5.75685 z m 2.3049,2.60947 c 0.15815,0.14361 0.32,0.28458 0.48518,0.42269 -1.25665,1.84815 -2.44635,3.74606 -3.56672,5.68917 -1.14177,1.98972 -2.21182,4.0221 -3.21587,6.09181 2.66111,-3.61964 5.28041,-7.26825 7.85914,-10.94452 0.19849,0.14032 0.40605,0.27914 0.6222,0.4169 -2.99556,4.56819 -6.06035,9.09086 -9.19778,13.5644 -1.64368,2.87035 -3.24615,5.76601 -4.8092,8.68519 -0.47091,-0.29611 -0.9427,-0.60291 -1.41492,-0.92081 1.61346,-3.52828 3.3624,-6.98029 5.26311,-10.34046 0.36261,-0.64166 0.73105,-1.27958 1.10526,-1.91367 -2.96852,3.47522 -6.03695,6.87071 -9.20211,10.18138 -0.46566,-0.37388 -0.92342,-0.75869 -1.37292,-1.1542 3.97582,-3.99114 7.84855,-8.07936 11.61512,-12.2597 1.88135,-2.556 3.82506,-5.06301 5.82951,-7.51818 z m 3.34561,2.29931 c 0.24269,0.13512 0.49324,0.2699 0.75118,0.40475 -1.62976,4.22388 -3.05688,8.54648 -4.32566,12.92641 2.01187,-4.02585 3.99759,-8.06399 5.95841,-12.11312 0.28566,0.13687 0.57779,0.27468 0.87592,0.41385 -2.31529,4.95149 -4.67107,9.88823 -7.07077,14.80661 -1.1854,3.09252 -2.34628,6.19391 -3.48443,9.30235 -0.44692,-0.18838 -0.89722,-0.38501 -1.35044,-0.59032 1.29266,-4.42789 2.69886,-8.81982 4.24612,-13.14946 -2.26643,3.97336 -4.5966,7.91166 -6.99634,11.80862 -0.46317,-0.24172 -0.9284,-0.49297 -1.39525,-0.75418 2.99359,-4.76659 5.90482,-9.58427 8.73939,-14.44697 1.30427,-2.89415 2.65378,-5.76475 4.05187,-8.60854 z m 4.53636,2.13111 c 0.25916,0.10451 0.52194,0.20496 0.78818,0.30149 -1.01135,4.40523 -1.80601,8.86881 -2.39831,13.37752 1.37906,-4.27079 2.72434,-8.55242 4.03624,-12.84447 0.27951,0.0814 0.5622,0.15917 0.8479,0.23343 -1.48484,5.25607 -3.02934,10.49455 -4.63459,15.71429 -0.68588,3.23406 -1.33763,6.47702 -1.95583,9.72832 -0.50031,-0.13047 -1.00073,-0.26746 -1.50112,-0.41112 0.57263,-4.57441 1.30211,-9.11386 2.19736,-13.60997 -1.65561,4.2498 -3.38755,8.47226 -5.19771,12.66538 -0.4997,-0.17086 -0.9991,-0.34867 -1.49804,-0.53356 2.27093,-5.14398 4.45421,-10.32143 6.55169,-15.53039 0.87155,-3.04585 1.7926,-6.07651 2.76423,-9.09092 z m 4.71931,1.35098 c 0.29479,0.063 0.59237,0.1227 0.89259,0.17928 -0.31969,4.51708 -0.45505,9.06416 -0.42039,13.62802 0.7793,-4.43639 1.52989,-8.87829 2.25218,-13.3253 0.31017,0.0446 0.62268,0.0863 0.93739,0.12533 -0.79102,5.4252 -1.6324,10.84265 -2.52523,16.25119 -0.24961,3.30911 -0.47049,6.62187 -0.66322,9.93771 -0.49464,-0.0607 -0.99018,-0.12704 -1.48649,-0.1993 -0.0299,-4.62435 0.0717,-9.23679 0.31369,-13.82892 -1.03385,4.45676 -2.13301,8.89812 -3.29937,13.32208 -0.49881,-0.0963 -0.99811,-0.1988 -1.49777,-0.30758 1.45702,-5.43499 2.83855,-10.8905 4.14641,-16.36458 0.40745,-3.14796 0.85717,-6.28762 1.35021,-9.41793 z m 5.23645,0.72156 c 0.32114,0.0304 0.64424,0.0583 0.96915,0.0838 0.25712,4.54287 0.66624,9.0874 1.21303,13.62037 0.27581,-4.49809 0.52799,-8.99637 0.75692,-13.49442 0.33155,0.0167 0.6646,0.0313 0.99903,0.044 -0.21346,5.46719 -0.46799,10.93646 -0.76468,16.40666 0.11011,3.31334 0.24355,6.62509 0.39973,9.93466 -0.47985,2.3e-4 -0.96141,-0.004 -1.44454,-0.0143 -0.51953,-4.58362 -0.933,-9.17837 -1.23152,-13.77585 -0.50668,4.55517 -1.06765,9.10689 -1.6848,13.65314 -0.48882,-0.0307 -0.97893,-0.0668 -1.47018,-0.10842 0.76169,-5.59425 1.46003,-11.19606 2.09685,-16.8035 0.0183,-3.18381 0.0716,-6.36622 0.16101,-9.54618 z m 5.55789,0.21438 c 0.32228,-0.005 0.64425,-0.0133 0.96578,-0.0242 0.72023,4.47921 1.59218,8.94785 2.6192,13.39438 -0.20529,-4.49939 -0.43733,-8.99744 -0.69622,-13.49381 0.31931,-0.0223 0.63796,-0.0474 0.95581,-0.0755 0.39947,5.46338 0.74899,10.93113 1.04888,16.40233 0.47223,3.28293 0.972,6.56271 1.49949,9.83886 -0.4932,0.0495 -0.98639,0.0937 -1.47946,0.13255 -1.02419,-4.50445 -1.9234,-9.02759 -2.69983,-13.56217 -0.0272,4.57689 -0.11279,9.15409 -0.25627,13.73001 -0.49211,0.0177 -0.98386,0.0302 -1.47515,0.0374 0.1775,-5.62855 0.29241,-11.25964 0.34417,-16.89173 -0.31088,-3.1617 -0.58625,-6.3247 -0.8264,-9.4881 z m 5.39834,-0.41829 c 0.31455,-0.0378 0.62812,-0.0787 0.9406,-0.12262 1.22508,4.37363 2.60864,8.71101 4.15407,13.00061 -0.73614,-4.43948 -1.50057,-8.87336 -2.2934,-13.30129 0.30762,-0.0563 0.6139,-0.11574 0.91873,-0.17836 1.05664,5.36553 2.06045,10.74328 3.01175,16.13231 0.86173,3.19805 1.75242,6.38853 2.67224,9.57093 -0.48968,0.11193 -0.98,0.21827 -1.47085,0.31906 -1.55949,-4.34123 -2.98825,-8.72152 -4.28848,-13.13363 0.50769,4.54767 0.95337,9.10502 1.33763,13.67047 -0.49251,0.0787 -0.98533,0.15202 -1.47833,0.21987 -0.46578,-5.61996 -0.99797,-11.23218 -1.59713,-16.83513 -0.67284,-3.10717 -1.30836,-6.22154 -1.90683,-9.34222 z m 5.19727,-0.99156 c 0.29933,-0.0731 0.59703,-0.14945 0.89296,-0.22909 1.74591,4.18091 3.65708,8.2999 5.73688,12.34543 -1.29793,-4.29779 -2.6257,-8.58571 -3.98342,-12.86341 0.28842,-0.093 0.57485,-0.18939 0.85917,-0.2892 1.75212,5.16845 3.44852,10.35695 5.08954,15.56458 1.26931,3.05138 2.569,6.09076 3.89924,9.11764 -0.47871,0.1769 -0.95871,0.34798 -1.4399,0.51329 -2.11388,-4.09071 -4.09128,-8.24085 -5.9344,-12.4432 1.07654,4.4363 2.0875,8.89167 3.03347,13.36449 -0.48547,0.14237 -0.97189,0.27904 -1.45915,0.41006 -1.14928,-5.50958 -2.36878,-11.00115 -3.65908,-16.47317 -1.05082,-2.993 -2.06249,-5.99911 -3.03531,-9.01742 z m 4.86908,-1.6091 c 0.27662,-0.11102 0.55095,-0.22554 0.82285,-0.34359 2.28273,3.90105 4.73749,7.71451 7.36765,11.42882 -1.89068,-4.07431 -3.81275,-8.13448 -5.76633,-12.18017 0.26175,-0.13238 0.52085,-0.26839 0.77717,-0.40807 2.48589,4.87213 4.91319,9.77215 7.28223,14.69914 1.69497,2.84293 3.42175,5.66942 5.18049,8.47899 -0.46028,0.24444 -0.92252,0.48283 -1.3866,0.71523 -2.68736,-3.75288 -5.23249,-7.58558 -7.63758,-11.49086 1.67937,4.2428 3.28959,8.51403 4.83125,12.81209 -0.47097,0.20856 -0.94356,0.4112 -1.41764,0.60796 -1.87299,-5.29741 -3.82003,-10.56654 -5.84167,-15.80585 -1.44481,-2.81919 -2.84865,-5.65738 -4.21182,-8.51369 z"
                        style="display:inline;fill:#e9afaf;stroke:none" />
                    <path
                        sodipodi:nodetypes="cscccc"
                        inkscape:connector-curvature="0"
                        id="rect3958"
                        d="m 680.51449,493.8241 c -4.56918,-1.49733 -19.00044,-3.61683 -27.72202,4.99219 -16.7815,16.56491 -18.2922,24.23558 -19.09697,57.02748 -1.29727,-6.48866 -3.5717,-11.26729 -3.14383,-20.77494 -1.15264,-18.1251 8.39396,-57.22116 50.70306,-46.10952 z"
                        style="color:#000000;display:inline;overflow:visible;visibility:visible;fill:#e6a5a5;fill-opacity:0.74509804;fill-rule:nonzero;stroke:none;stroke-width:1;marker:none;enable-background:accumulate" />
                    <path
                        sodipodi:nodetypes="ccsccc"
                        inkscape:connector-curvature="0"
                        id="rect3958-8-4"
                        d="m 725.2941,565.86314 c 1.66059,-3.76315 5.03904,-29.1845 1.42934,-28.92616 -0.86783,2.45803 0.64855,13.18901 -7.06715,32.38695 -2.57594,6.40937 -2.67695,4.24032 -6.04934,8.88168 -7.38542,7.65811 -33.45127,11.82862 -30.82147,11.5252 0,0 35.67004,2.52479 42.50862,-23.86767 z"
                        style="color:#000000;display:inline;overflow:visible;visibility:visible;fill:#e9afaf;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1;marker:none;enable-background:accumulate" />
                    <path
                        sodipodi:nodetypes="ccsscsssc"
                        inkscape:connector-curvature="0"
                        id="rect3958-8"
                        d="m 725.57704,526.14578 c -2.37135,-1.60669 -9.20667,2.55701 -11.68446,9.20117 -2.19642,5.70793 -1.04351,13.53363 -3.91485,18.37174 -2.2821,3.84528 -9.34099,7.46328 -12.91793,7.86869 -20.40023,2.31215 -18.73775,2.65753 -36.78745,-8.72863 3.88527,8.34118 10.38461,12.57037 12.93756,13.27065 11.86402,3.25435 24.45325,5.23619 35.068,-1.89521 5.73569,-3.85346 8.56817,-8.97811 8.77925,-18.38054 0.14444,-6.43413 3.95686,-13.87387 8.51988,-19.70787 z"
                        style="color:#000000;display:inline;overflow:visible;visibility:visible;fill:#e6a5a5;fill-opacity:0.74509804;fill-rule:nonzero;stroke:none;stroke-width:1;marker:none;enable-background:accumulate" />
                    <path
                        sodipodi:nodetypes="ccccc"
                        inkscape:connector-curvature="0"
                        id="rect3997"
                        d="m 650.37107,547.53005 c 1.93268,-2.08315 3.24636,-4.24971 5.42136,-4.73482 l 2.1688,6.36484 c -2.7654,2.04679 -3.47581,3.52782 -6.70211,3.35261 -2.22409,0.34376 -2.99025,-2.39639 -0.88805,-4.98263 z"
                        style="color:#000000;display:inline;overflow:visible;visibility:visible;opacity:0.73593074;fill:#339967;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0;marker:none;enable-background:accumulate" />
                    <ellipse
                        ry="0.86292189"
                        rx="1.6345302"
                        cy="961.01276"
                        cx="770.55383"
                        transform="matrix(0.84593088,-0.53329255,0,1,0,0)"
                        id="path4017"
                        style="color:#000000;display:inline;overflow:visible;visibility:visible;fill:#246c49;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0;marker:none;enable-background:accumulate" />
                    <path
                        sodipodi:nodetypes="ccccc"
                        inkscape:connector-curvature="0"
                        id="rect3997-8"
                        d="m 649.07646,525.9973 9.50606,0.63373 -0.40329,1.49792 c -3.16869,-0.31531 -5.81886,-0.11285 -9.04516,-0.28806 -1.30228,-0.0595 -1.1746,-1.71901 -0.0576,-1.84359 z"
                        style="color:#000000;display:inline;overflow:visible;visibility:visible;opacity:0.73593074;fill:#339967;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0;marker:none;enable-background:accumulate" />
                    <ellipse
                        ry="0.51851237"
                        rx="1.0946372"
                        cy="526.9903"
                        cx="649.93396"
                        id="path4017-0"
                        style="color:#000000;display:inline;overflow:visible;visibility:visible;fill:#246c49;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0;marker:none;enable-background:accumulate" />
                    <path
                        sodipodi:nodetypes="sccccssscssscsssssssssscsssssssssscssssccssscccccccccssssscccccccccccscsccssssssssss"
                        d="m 676.00303,462.89372 c 1.676,0.73363 2.51558,1.86192 3.71654,3.13732 1.16386,-2.42772 5.36467,-4.68908 8.88919,-6.06966 0.48882,0.94211 0.60394,1.11029 0.88245,1.84609 -2.94902,1.25535 -7.56145,3.60457 -8.30978,6.13516 0.64823,3.18157 1.18872,5.29556 1.7443,10.32723 1.58564,14.36042 0.0617,25.15099 -5.88836,39.65975 -3.4216,8.3433 -6.2611,13.48369 -8.85865,16.85118 -2.68399,3.47957 -6.46148,6.831 -8.87812,9.20377 0,0 10.84102,2.68862 14.15199,1.15244 5.36563,-2.48947 8.62909,-6.42406 13.30252,-12.11256 2.14215,-2.60742 2.48879,-5.14329 4.92639,-6.99627 1.99699,-1.51804 9.39354,-1.34446 11.64932,-2.18907 2.62382,-1.36033 4.03482,-3.28472 7.26967,-4.94586 1.80203,-0.92537 4.11946,-1.13845 6.28552,-1.99136 1.62005,-0.6379 4.55987,-2.86273 6.36892,-3.66682 1.92949,-0.85763 4.32278,-0.68212 6.55142,-1.59075 1.91582,-0.78109 3.6249,-2.39537 5.79392,-3.21263 2.36168,-0.88985 4.81446,-0.6607 7.03653,-1.44698 1.73522,-0.614 3.99946,-2.50492 5.65402,-3.07317 3.19716,-1.09806 5.02523,-0.82133 7.94264,-1.83215 2.29623,-0.7956 4.91758,-2.64044 7.05615,-3.44299 2.17131,-0.81484 4.42322,-1.20024 6.44681,-2.11348 4.47608,-2.02004 8.46938,-4.71965 12.48963,-6.89978 -3.43102,2.40294 -7.78178,5.52533 -12.10764,7.76162 -2.10518,1.08829 -4.26664,1.65582 -6.19378,2.42623 -2.53901,1.01501 -4.5542,2.54582 -7.24324,3.52734 -2.71869,0.99233 -5.38163,1.19002 -8.2512,2.42309 -1.68705,0.72493 -3.44551,2.04012 -5.32871,2.77943 -2.15985,0.84791 -4.65475,0.37687 -7.0139,1.38102 -1.95167,0.83071 -3.48237,2.25692 -5.67365,3.15392 -2.01609,0.82529 -4.67891,1.27801 -6.80175,2.18538 -1.68504,0.72023 -4.27689,2.67302 -6.05401,3.26687 -1.97968,0.66154 -3.87794,0.78522 -5.7305,1.75874 -2.4049,1.26379 -3.85177,3.43211 -6.06344,4.89424 -1.96643,1.25148 -10.06849,1.33029 -12.51721,3.33744 -2.35721,1.93215 -3.29135,4.57579 -5.33949,7.2837 -5.56413,7.35653 -11.67276,11.21404 -13.09132,11.88208 -2.35113,1.10721 -13.42844,-0.9781 -15.10244,0.0204 -1.96265,1.17072 -0.12903,0.43886 -1.90754,1.12726 -1.33887,-2.43326 -1.88182,-4.56949 -2.27056,-5.90519 1.46714,-1.22003 2.30686,-2.29295 3.8033,-3.89903 6.55304,-7.03316 9.51558,-9.86583 14.52827,-22.62674 3.46819,-8.82901 5.70494,-16.6584 6.60629,-22.26189 0.1588,-0.98726 0.70623,-4.23943 0.77605,-5.86304 -0.37125,-0.23345 -0.75622,-0.45313 -0.57918,-1.55502 -0.69291,-0.0282 -1.35528,-1.60369 -0.86649,-2.51117 -1.03345,0.0983 -1.36388,-1.32873 -1.08643,-2.3429 -0.71215,-0.14427 -1.03202,-1.2507 -0.82504,-2.11639 -1.08182,-0.18951 -1.22943,-0.94447 -1.12594,-1.82531 -1.29177,-0.0152 -1.27915,-1.65976 -2.05872,-1.96205 -0.731,0.77988 -2.97,-0.8176 -3.78718,-1.04047 -0.80451,0.28073 -1.28308,1.23838 -2.774,0.82841 -2.10829,0.97636 -5.17646,2.75881 -10.66246,5.12287 -5.35323,2.30685 -6.59484,2.01614 -13.82003,3.31144 -3.79799,0.68088 -15.36956,1.20968 -19.23095,-0.34643 -6.9737,-2.81037 -9.59739,-5.86948 -8.71021,-9.09068 1.29196,-4.69094 8.99999,-9.12198 13.83324,-9.67959 9.53906,-1.10052 20.62385,3.05266 27.83616,5.9115 2.8548,1.25401 5.88836,1.49278 8.85396,1.05832 0.83463,-0.62373 1.65868,0.68824 3.17279,1.11922 1.02705,-0.78407 2.25044,-0.83141 2.93366,-0.29954 0.49406,-0.60212 1.37076,0.47243 1.98066,1.20034 1.23367,-0.51341 1.74147,1.03874 2.10931,1.8083 1.04025,-0.30723 2.23391,1.02449 2.15872,1.87897 0.88679,0.15743 1.33108,1.66922 0.95108,2.2343 0.70195,0.43482 0.99202,1.7713 0.53729,2.38314 0.55591,0.22308 1.08625,1.76971 0.91969,2.15816 0.26683,0.34617 0.19088,0.66266 0.29315,0.91831 0.0277,-0.76264 -1.07045,-12.09434 -1.6368,-14.35995 -0.23451,-0.93815 -0.44303,-2.51356 -0.8228,-3.35424 -0.99464,-0.92363 -2.19179,-2.35899 -3.36601,-2.73377 -1.54837,-0.49419 -2.35333,-0.74015 -3.90016,-1.12875 0.13055,-1.1957 -0.0964,-1.48491 0.3967,-2.41622 2.57474,0.75699 1.56806,0.36945 4.02944,1.44687 z m -19.56171,16.78057 c 3.89616,-1.51164 7.75129,-2.72334 9.683,-5.37844 -4.87125,-0.75347 -11.9216,-1.24307 -19.77677,-4.55418 -3.06824,-1.29333 -11.7556,-3.02166 -15.99432,-2.9462 -5.11054,0.091 -11.72059,3.83537 -12.51505,7.77049 -0.86539,4.2865 2.00679,6.07383 7.69449,7.75685 7.40696,2.19175 12.6811,0.48187 17.75582,0.19296 6.75487,-0.38456 9.89354,-1.57693 13.15283,-2.84148 z"
                        id="_223737152_1_"
                        style="display:inline;fill:#339967;fill-opacity:1;stroke:none"
                        inkscape:connector-curvature="0" />
                    <path
                        sodipodi:nodetypes="cccc"
                        inkscape:connector-curvature="0"
                        id="rect3998"
                        d="m 695.36601,507.57893 0.63374,18.436 -1.26747,0 z"
                        style="color:#000000;display:inline;overflow:visible;visibility:visible;fill:#339967;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0;marker:none;enable-background:accumulate" />
                    <path
                        sodipodi:nodetypes="sssssccsssccscccssssccsssscccsss"
                        inkscape:connector-curvature="0"
                        id="path6063"
                        d="m 796.23469,483.13745 c -1.74641,15.47227 -9.88497,25.73922 -19.2541,33.30325 -21.19593,17.11223 -30.95422,18.66828 -40.65979,21.89796 -5.31906,1.77 -19.04892,-2.40096 -24.76047,-4.24861 -4.96141,-1.60499 -11.86111,-6.76539 -14.35439,-10.26748 -3.30889,-4.64771 -5.8357,-7.28747 -10.29419,-13.47733 -3.27916,3.56415 -5.03637,4.47834 -9.92959,3.00572 -5.21837,-0.0266 -12.61676,1.32792 -15.64862,6.06188 -3.67559,5.73911 -12.25719,27.3169 8.97188,39.97771 5.31445,3.16949 26.44383,7.41992 37.55587,-3.22586 6.3867,-6.11872 4.45913,-17.29857 5.72304,-20.38213 2.66,0.15898 11.47116,3.60216 24.56294,2.39045 3.239,6.92024 5.20158,12.28224 3.96927,30.12126 -1.22887,17.7893 0.42655,18.67279 -2.34616,28.76174 -3.10723,0.48396 -7.35965,-1.79759 -17.03488,-7.21415 1.55284,-5.95009 0.60725,-13.4052 3.95214,-31.85439 -0.24166,12.74132 -6.39416,23.42138 -18.40031,28.05266 -12.21796,4.71299 -31.29534,6.47239 -47.47736,-0.6887 -10.22715,-4.52587 -18.80347,-12.59876 -24.19575,-23.20558 -11.86168,-23.33236 -6.62989,-49.23279 5.15049,-63.73737 8.93675,-11.00338 25.71894,-13.4583 38.3234,-9.94459 5.27351,0.71367 9.13916,4.86377 9.91171,8.79695 1.46088,-1.89334 5.59953,-2.79571 8.8309,-0.93874 4.56392,2.62275 9.98792,6.23189 18.10905,4.85303 6.57049,-1.11559 7.3391,-4.6239 6.41729,-15.10581 -0.39593,-4.50224 -2.46983,-10.98978 -4.01874,-16.44974 -0.41765,-1.47222 -2.08017,-3.41758 -5.65202,-6.63598 -3.15984,-4.15859 4.50874,-13.3255 10.37418,-10.77663 1.96698,5.6673 3.53869,5.15289 3.74586,3.96997 1.34591,-17.84785 23.0347,-34.52361 41.64952,-33.96998 14.8186,0.44072 18.73963,4.91406 23.58203,19.24001 5.75282,17.01934 4.00321,34.54621 3.1968,41.69048 z"
                        style="color:#000000;display:inline;overflow:visible;visibility:visible;opacity:0.53200001;fill:#f26522;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0;marker:none;enable-background:accumulate" />
                    <path
                        style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#c0272d;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;marker:none;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                        d="m 722.55379,589.64533 c 1.43608,-8.02957 1.11708,-14.31144 3.06866,-24.16603 0.4518,1.76144 -4.16014,18.05871 -19.63946,21.5074 -5.64068,1.2567 -17.05779,4.65754 -30.50012,2.519 -7.58279,-1.20634 -17.35486,-3.59613 -26.97179,-11.68989 -14.68147,-12.35615 -19.40124,-28.56124 -18.07261,-48.77052 1.49818,-22.78824 12.42642,-34.18266 21.79304,-38.96167 7.39529,-3.7732 18.04785,-4.86979 30.75612,-1.34626 3.17746,0.76643 5.66666,4.34629 7.11806,7.18978 11.43474,-4.72626 10.69152,6.58182 25.30134,4.64377 8.70062,-1.15417 8.6024,-6.03372 7.23543,-16.31445 -0.60138,-4.52288 -3.54823,-14.7488 -3.54823,-14.7488 l -5.5308,-6.35996"
                        id="path6309"
                        inkscape:connector-curvature="0"
                        sodipodi:nodetypes="ccsssssccsscc" />
                    <path
                        sodipodi:nodetypes="csscssccsssszssc"
                        inkscape:connector-curvature="0"
                        id="path6047"
                        d="m 724.25445,452.2714 c 0.82858,1.54512 2.729,5.1602 2.88523,3.89035 3.75493,-30.52193 55.75543,-51.10827 65.21689,-15.70103 3.05407,11.42908 3.88658,21.50994 4.45942,40.40522 -1.99494,24.09681 -23.25835,41.47139 -42.26016,51.01421 -18.7089,9.3957 -29.64145,6.29902 -39.72156,4.01294 -10.51034,-2.38365 -21.24376,-14.72269 -28.3656,-24.54077 -3.32895,1.82448 -3.60085,3.31634 -6.35863,3.10207 -8.40438,-0.80739 -13.70945,-1.48491 -18.67285,5.17031 -5.7585,7.72135 -9.73633,24.69023 2.2208,34.7263 3.62004,3.03844 10.41173,8.17258 17.84759,8.33655 7.30347,0.16105 17.10728,0.69496 23.92299,-4.6862 11.32976,-8.94512 3.01812,-17.44618 10.73712,-27.86353 7.71899,-10.41736 19.23676,-1.76634 21.33425,4.31854 2.1242,6.16238 4.99677,13.41178 4.99143,23.91469 -0.007,13.75965 0.26692,25.69771 -3.05541,38.16608"
                        style="color:#000000;display:inline;overflow:visible;visibility:visible;fill:none;stroke:#c0272d;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;marker:none;enable-background:accumulate" />
                    <path
                        inkscape:connector-curvature="0"
                        id="rect7359"
                        d="m 695.50044,408.45729 17.5536,0.20504 c 2.17306,20.19078 7.43194,33.79985 10.41544,42.7137 -4.48639,1.72753 -9.92267,1.74524 -10.68472,10.17659 -10.0553,-12.4288 -14.42083,-31.70675 -17.28432,-53.09533 z"
                        style="color:#000000;display:inline;overflow:visible;visibility:visible;opacity:0.275;fill:#cd4646;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0;marker:none;enable-background:accumulate"
                        sodipodi:nodetypes="ccccc" />
                    <path
                        sodipodi:nodetypes="cc"
                        inkscape:connector-curvature="0"
                        id="path4972"
                        d="m 725.63931,565.2554 c 1.27166,-5.69479 1.74444,-23.18018 1.74444,-23.18018"
                        style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#c0272d;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;marker:none;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate" />
                    <path
                        sodipodi:nodetypes="ssccs"
                        inkscape:connector-curvature="0"
                        id="rect4556"
                        d="m 718.39196,526.8595 c 4.06273,-3.38243 9.96985,-2.75403 14.80275,1.11568 4.62122,3.70023 5.91745,9.76952 5.91745,9.76952 -7.30016,2.06729 -16.94415,1.14116 -26.29664,-1.98058 -0.36598,-0.21959 1.40804,-5.43419 5.57644,-8.90462 z"
                        style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:0.53200001;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#f9b797;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;marker:none;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate" />
                    <path
                        sodipodi:nodetypes="cssccscc"
                        inkscape:connector-curvature="0"
                        id="rect8590"
                        d="m 659.10817,548.07943 c 3.06075,5.13821 8.27858,9.09226 14.45657,12.10839 3.53217,1.72443 7.66231,1.99761 11.69312,1.96904 4.57842,-0.0325 13.14797,-0.35448 17.08222,-3.08265 0.48706,1.32395 -0.39682,4.29738 -0.98566,4.00296 -2.14881,1.13322 -23.82867,6.82172 -37.92576,-4.51773 -2.66726,-2.1455 -5.29038,-4.70425 -7.26389,-7.9794 z"
                        style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:0.8;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#e89e55;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.03476759;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;marker:none;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate" />
                    <path
                        style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:0.8;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#e89e55;fill-opacity:1;fill-rule:nonzero;stroke:#201b17;stroke-width:0.03476759;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;marker:none;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                        d="m 658.1616,528.15953 c -1.72527,5.10978 -2.00952,9.60827 -1.18466,13.56374 l -3.21262,1.97622 c -0.95025,-4.22856 -0.89725,-9.34475 0.75097,-15.64497 z"
                        id="path8607"
                        inkscape:connector-curvature="0"
                        sodipodi:nodetypes="ccccc" />
                    <path
                        sodipodi:nodetypes="ccccsc"
                        inkscape:connector-curvature="0"
                        id="path8609"
                        d="m 668.31365,514.90276 c -2.23967,1.23247 -4.70955,2.27913 -6.64179,5.35622 -1.18866,2.12661 -2.1557,4.16405 -2.9182,6.11584 l -3.78783,-0.11976 c 0.3804,-1.2766 0.82407,-2.59965 1.33545,-3.9714 1.81147,-4.85912 5.76451,-7.62093 12.01237,-7.3809 z"
                        style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:0.8;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#e89e55;fill-opacity:1;fill-rule:nonzero;stroke:#201b17;stroke-width:0.03476759;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;marker:none;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate" />
                    <path
                        sodipodi:nodetypes="cssssc"
                        inkscape:connector-curvature="0"
                        id="path8630"
                        d="m 711.78136,538.2038 c -5.38601,2.2729 -9.06749,3.8908 -13.79798,5.88726 -4.43173,1.87038 -3.16724,9.94634 0.92764,10.9871 3.98893,1.01383 6.23226,6.78147 3.90014,7.44384 -50.45638,14.33066 -55.94872,-28.40062 -44.8866,-43.07109 2.4779,-3.28616 6.5477,-4.95039 10.15264,-4.69541"
                        style="fill:none;fill-rule:evenodd;stroke:#c87137;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
                    <path
                        sodipodi:nodetypes="cc"
                        inkscape:connector-curvature="0"
                        id="path8632"
                        d="m 656.45493,542.05308 c 0.28551,2.37398 1.32543,4.56287 2.30286,6.39878"
                        style="fill:none;fill-rule:evenodd;stroke:#e0864d;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
                    <path
                        style="fill:none;fill-rule:evenodd;stroke:#e0864d;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
                        d="m 657.93924,526.12479 -0.74337,2.16797"
                        id="path8634"
                        inkscape:connector-curvature="0"
                        sodipodi:nodetypes="cc" />
                    </g>
                    <path
                    sodipodi:nodetypes="csssccssccc"
                    inkscape:connector-curvature="0"
                    id="path6525"
                    d="m 311.02406,194.21375 c 2.00016,10.60728 1.15872,17.26767 2.96726,31.73679 0.23458,1.87674 1.50313,31.22888 -3.49734,69.75025 -0.49882,3.84272 0.003,11.58577 0.35998,15.55147 4.92554,54.79516 11.09539,115.759 9.91068,115.87623 m -17.94678,-0.75095 c -1.11356,-5.62447 -14.69403,-63.15032 -5.27189,-115.72078 0.84208,-4.69833 0.98482,-9.59414 0.0866,-14.15841 -7.89059,-40.09549 5.9522,-71.18614 5.47972,-74.52317 -1.25958,-8.92037 0.0619,-15.85832 -0.28117,-17.63691 -0.22246,-1.21713 -1.13402,-2.55457 -2.82832,-2.55188"
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#c0272d;stroke-width:1.07014704;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate" />
                    <g
                    style="display:inline;overflow:visible"
                    id="g10309"
                    transform="translate(-249.78579,-54.981539)">
                    <path
                        sodipodi:nodetypes="ccccccccczccccccccccscccscccccccccc"
                        inkscape:connector-curvature="0"
                        id="path126"
                        d="m 544.33477,318.80172 c -0.92965,-2.69666 -2.2274,-6.23288 -2.73662,-8.38067 -1.40329,-5.91293 -2.61841,-11.96632 -4.42629,-17.79859 -0.64116,-2.06731 -1.5982,-4.04187 -1.98599,-6.1495 -2.11385,-5.04572 -4.60199,-7.86074 -6.54832,-11.73151 -6.37128,-10.39433 -4.84285,-9.15916 6.87495,-22.42744 5.35981,-4.13394 8.68992,-9.30181 12.1948,-15.11863 0.88378,-1.46781 6.33666,-8.00502 4.1053,-8.58276 1.51297,-9.89355 -2.38906,-25.48626 4.22606,-29.47207 1.54837,-0.13523 4.75241,-1.58018 0.46687,-12.43375 -4.28554,-10.85357 -7.93473,-13.42167 -21.79424,-16.72933 -14.35993,-1.61605 -37.64961,0.23174 -52.39928,-1.9884 -6.0063,-0.70124 -9.52898,-0.88852 -9.52898,-0.88852 -2.05232,0.0213 -1.47552,4.11883 -3.0969,5.51796 -1.94185,0.91842 -18.8964,-6.98024 -18.11832,-6.61237 -0.4886,-1.89593 0.01,-6.16579 0.83977,-7.89572 1.40464,-2.92555 3.73473,-5.39207 5.61184,-8.01047 4.34228,-6.05608 8.82503,-12.73047 13.91399,-18.20521 5.48733,-6.00468 10.2453,-12.34096 18.04122,-9.84822 12.94284,4.44041 20.85465,2.34067 34.64028,2.83465 3.32325,-0.021 9.51017,2.94638 11.03095,6.27678 1.63512,3.58083 2.43637,7.75529 4.45462,10.94026 3.14531,4.96395 17.54849,8.72489 21.09033,12.92671 4.09832,4.86046 6.29505,10.45194 4.76339,16.36083 0.8786,11.90871 0.52738,23.77239 -1.01484,35.42197 -1.11575,8.42818 -2.41097,16.227 -3.65475,23.83519 -1.07616,6.32157 -1.07269,12.99116 -0.10277,18.82726 -3.4896,3.91464 -2.68126,4.12634 -7.61188,10.01525 -0.22246,-1.21713 -1.13401,-2.55456 -2.82832,-2.55187 -2.26893,0.002 -1.67548,1.97993 -1.93289,3.28578 -0.0615,4.82578 0.9021,5.55664 0.17418,9.79918 -0.91134,5.58361 -0.3851,11.21629 0.83673,16.70849 1.3045,5.87865 2.65739,11.62558 3.43431,17.61176 0.0383,0.30042 0.0759,0.60151 0.11157,0.9026 0.34244,2.87209 1.19118,6.01202 1.94221,8.86867"
                        style="display:inline;overflow:visible;fill:#dfecfb;fill-opacity:1;stroke:#8282c6;stroke-width:1.07014704;stroke-opacity:1" />
                    <path
                        sodipodi:nodetypes="cccc"
                        inkscape:connector-curvature="0"
                        id="path145"
                        d="m 483.21892,115.20978 c 0.48121,-1.16807 9.91985,2.66008 11.06439,2.67688 7.46811,0.11559 -0.73256,-11.0812 -5.23178,-11.66456 -4.06371,1.92953 -4.40646,5.52581 -5.83261,8.98768 z"
                        style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#dfecfb;fill-opacity:1;fill-rule:nonzero;stroke:#8282c6;stroke-width:1.07014704;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate" />
                    <path
                        sodipodi:nodetypes="ccccc"
                        inkscape:connector-curvature="0"
                        id="path147"
                        d="m 554.82999,143.27866 c 9.7581,-2.06883 5.73653,-4.98146 1.57273,-8.614 -1.53503,-1.39456 -2.66092,-7.78074 -4.84584,-8.75659 -4.31473,-1.92617 -9.94389,0.58781 -9.94389,0.58781 -1.91368,7.27063 1.29762,19.04545 13.217,16.78278 z"
                        style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#dfecfb;fill-opacity:1;fill-rule:nonzero;stroke:#8282c6;stroke-width:1.07014704;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate" />
                    <path
                        inkscape:connector-curvature="0"
                        id="path182-9"
                        d="m 544.96727,265.63322 c -2.72527,0.54908 -4.96194,2.37915 -7.6079,3.18631 -3.2878,1.00408 -6.79201,1.04306 -10.04956,2.16476"
                        style="display:inline;overflow:visible;fill:none;stroke:#c1e9f7;stroke-width:1.07014704;stroke-linecap:round" />
                    <path
                        inkscape:connector-curvature="0"
                        id="path184"
                        d="m 538.19005,291.27024 c 2.44098,-1.06457 5.0809,-1.60559 7.74299,-1.60492 -2.4403,0.007 -4.6017,0.83606 -6.94053,1.33743"
                        style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:0.35;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#2196f9;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate" />
                    <path
                        inkscape:connector-curvature="0"
                        id="path186-4"
                        d="m 540.68682,300.72232 c 1.21847,-0.22985 2.36638,-0.76818 3.6077,-0.98459 0.90395,-0.15727 1.92281,-0.0961 2.79517,-0.35688 -2.01892,0.16265 -4.07278,0.0914 -5.95661,0.98527"
                        style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:0.35;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#2196f9;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate" />
                    <path
                        inkscape:connector-curvature="0"
                        id="path188"
                        d="m 542.29174,307.76837 c 1.26888,-0.40594 2.53036,-0.59278 3.85435,-0.71509 1.15597,-0.10552 2.60833,-0.0114 3.70986,-0.35956 -2.56598,-0.0363 -4.97067,0.54236 -7.38544,1.34213"
                        style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:0.35;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#2196f9;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate" />
                    <path
                        inkscape:connector-curvature="0"
                        id="path192"
                        d="m 549.03468,315.94955 c 0.0699,-0.11358 0.12097,-0.23993 0.1492,-0.37905 0.30243,-1.50075 -2.16207,-1.96314 -3.13658,-1.41674 1.92886,-1.0807 3.80529,-0.51481 3.11574,-3.3046 -0.621,-2.5102 -1.25006,-2.27968 -3.27637,-3.08147 1.10557,-1.26283 2.77971,-0.31587 2.2938,-2.68292 -0.17474,-0.85421 -0.63041,-1.59753 -0.76483,-2.49878 -0.12836,-0.85287 0.22112,-2.06328 -0.83404,-2.34891 0.55917,0.15189 1.8435,-2.22054 2.00951,-2.66075 0.39316,-1.0397 0.38308,-2.14594 0.28832,-3.23672 -0.19558,-2.25683 -0.0571,-4.91355 -3.06938,-4.88062 0.73257,-0.5343 1.57938,-0.43349 1.99876,-1.28097 0.30109,-0.60891 0.20162,-1.67952 0.10148,-2.3395 -0.21775,-1.42884 0.18751,-3.87654 -0.49868,-5.08292 -0.63041,-1.10623 -3.38726,-0.5343 -3.36441,-1.56929 0.0128,-0.49398 1.7978,-1.76488 2.09755,-2.22659 0.29571,-0.45701 0.86429,-3.11172 1.35759,-3.1097 1.08003,0.006 0.60017,5.90352 0.75273,6.77789 0.40526,2.32404 0.73122,4.68572 1.39859,6.93381 1.43085,4.82349 1.71581,9.94068 2.71989,14.85625 0.50876,2.49273 1.52643,9.44849 2.38131,11.80748 -0.64395,0.244 -10.85635,6.39252 -10.34205,3.14957 0.98929,0.40594 4.03985,-0.47919 4.62187,-1.42547 z"
                        style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:0.35;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#2196f9;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                        sodipodi:nodetypes="ccccccccccccccccccccccc" />
                    <path
                        sodipodi:nodetypes="ccccc"
                        inkscape:connector-curvature="0"
                        id="rect6444"
                        d="m 484.39426,139.23831 6.92668,5.29265 c 12.14395,8.57495 36.30258,3.0248 51.87999,3.58835 -8.5417,4.83387 -38.50446,8.49137 -53.28605,0.12001 -5.99932,-5.54669 -12.30946,-17.20553 -5.52062,-9.00101 z"
                        style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:0.35;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#2196f9;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate" />
                    <path
                        sodipodi:nodetypes="ccccc"
                        inkscape:connector-curvature="0"
                        style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:0.35;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#2196f9;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                        d="m 499.51597,126.99691 c 5.09955,5.34993 27.41941,16.30316 38.28435,8.52097 l 0.84009,5.04057 c -11.00857,1.34718 -23.21668,3.05714 -36.72417,-6.84078 -2.63703,-2.24025 -1.75031,-4.4805 -2.40027,-6.72076 z"
                        id="path6467" />
                    <path
                        sodipodi:nodetypes="ccccsc"
                        inkscape:connector-curvature="0"
                        id="path6469"
                        d="m 479.32457,158.85522 c 5.58935,2.16288 26.68124,6.50658 35.30107,2.90445 l 19.45426,-3.55922 c -15.96692,13.89385 -52.87697,7.37298 -55.90575,3.39803 -1.8802,-1.1426 -4.77994,-3.21204 -5.52406,-4.42509 -9.06718,-14.78116 1.18423,-3.66313 6.67448,1.68183 z"
                        style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:0.35;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#2196f9;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate" />
                    <path
                        style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:0.35;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#2196f9;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                        d="m 551.84192,157.24034 c 2.66992,-0.44901 2.79656,13.12949 3.84044,15.72178 -0.24033,0.19227 -3.37069,-8.99199 -8.04091,-6.00067 1.41528,-4.00243 1.17516,-9.95811 4.20047,-9.72111 z"
                        id="path6471"
                        inkscape:connector-curvature="0"
                        sodipodi:nodetypes="cccc" />
                    <path
                        sodipodi:nodetypes="ccsccsssc"
                        inkscape:connector-curvature="0"
                        id="rect6473"
                        d="m 548.37876,236.74945 4.24312,-7.63762 c 0.66659,1.47793 3.03205,3.45898 -4.20065,13.90225 -4.09675,5.91529 0.80532,12.45392 4.48141,13.99042 l -4.34118,0.52032 c 0,0 -1.97384,-2.74846 -2.9065,-5.55748 -0.67107,-2.02114 -0.1438,-4.63633 -1.18505,-3.83257 l -14.82421,11.44306 c -2.15751,1.66542 16.30548,-17.41191 18.73306,-22.82838 z"
                        style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:0.35;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#2196f9;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate" />
                    <path
                        sodipodi:nodetypes="cccccccc"
                        inkscape:connector-curvature="0"
                        id="rect6476"
                        d="m 548.40788,186.74383 3.31713,6.15481 c 4.09093,12.93822 4.57435,25.04393 0.81094,36.16961 l 0.16597,-16.04512 c 1.09404,-4.56426 -1.69715,-10.81936 -3.15317,-13.24606 -1.68875,0.36542 -2.13477,1.55932 -2.0167,3.12928 l -2.39057,-6.31745 z"
                        style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:0.35;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#2196f9;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate" />
                    <path
                        sodipodi:nodetypes="cscccc"
                        inkscape:connector-curvature="0"
                        id="rect5125"
                        d="m 451.02726,164.07921 c 0.70245,-1.72468 0.59394,-4.04722 1.85805,-5.88888 14.12743,-20.58191 27.16529,-36.48737 31.95079,-35.96875 l 1.76254,3.72253 -34.30897,39.93652 z"
                        style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:url(#linearGradient5134);fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1.59230006;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate" />
                    <path
                        sodipodi:nodetypes="csscccc"
                        inkscape:connector-curvature="0"
                        id="rect5125-7"
                        d="m 485.07089,122.13745 c 1.81756,-0.40549 4.28917,0.23969 6.40792,0.94719 8.29105,2.76858 18.15783,2.32658 25.85846,2.20496 5.3675,-0.0848 8.27116,0.12458 11.2616,0.78853 5.85907,3.03805 6.73296,5.19203 7.00315,7.12999 l -49.87589,-7.64717 z"
                        style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:url(#linearGradient5134-9);fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1.59230006;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate" />
                    <path
                        style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:url(#linearGradient5164);fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1.59230006;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                        d="m 484.26021,114.13501 c 0.8949,-3.03929 2.1883,-6.08061 5.03591,-7.50339 1.76555,0.80748 3.30006,1.96909 4.53507,3.58979 l -6.423,4.89276 z"
                        id="path5162"
                        inkscape:connector-curvature="0"
                        sodipodi:nodetypes="ccccc" />
                    <path
                        sodipodi:nodetypes="cscccc"
                        inkscape:connector-curvature="0"
                        id="path5166"
                        d="m 541.76035,133.05624 c -0.0584,-1.44607 -0.38555,-4.80398 0.50523,-6.01164 1.0995,-1.49063 6.31549,-1.20436 7.87305,-1.0952 1.52071,0.39334 2.29,1.53959 2.83556,2.90999 l -10.04862,8.23513 z"
                        style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:url(#linearGradient5168);fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1.59230006;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate" />
                    <path
                        sodipodi:nodetypes="ccccc"
                        inkscape:connector-curvature="0"
                        id="path5215"
                        d="m 527.96165,272.56784 c 6.27733,-0.11593 14.8961,-4.06578 18.065,-5.95711 0.76263,1.78539 -4.60565,6.84969 -4.78272,8.8796 l -9.74313,2.75268 z"
                        style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:0.35;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#2196f9;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate" />
                    </g>
                    <path
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#e6e6e6;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1.59230006;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                    d="m 327.38365,108.2965 3.84555,-0.48069 0.64093,5.76833 -3.52509,0 z"
                    id="rect5328"
                    inkscape:connector-curvature="0"
                    sodipodi:nodetypes="ccccc" />
                    <path
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#e6e6e6;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1.59230006;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                    d="m 315.52652,100.76562 8.6525,4.96718 -10.41504,80.4362 -2.24325,1.28186 c 1.99315,-21.87744 10.52075,-59.24799 4.00579,-86.68524 z"
                    id="rect5251"
                    inkscape:connector-curvature="0"
                    sodipodi:nodetypes="ccccc" />
                    <path
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#f0e8c8;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                    d="m 319.85276,115.82739 c 1.60232,-0.95416 4.16601,-4.19458 5.76833,-1.12162 0,0 -1.60897,6.28639 -3.0444,11.85712 l -2.72393,-1.44208 c -0.55453,-3.99102 -2.55704,-5.57739 0,-9.29342 z"
                    id="rect4800"
                    inkscape:connector-curvature="0"
                    sodipodi:nodetypes="ccccc" />
                    <path
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#f0e8c8;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                    d="m 326.74272,116.14785 c 3.5095,-8.05365 7.37065,0.96139 7.37065,0.96139 l -1.92278,31.08491 c -3.91315,-1.08427 -7.48457,-1.06288 -13.13898,-0.16024 0.47264,-5.05461 0.52609,-9.03191 1.98215,-13.54369 1.39476,-4.32187 4.16897,-9.89571 5.70896,-18.34237 z"
                    id="rect4802"
                    inkscape:connector-curvature="0"
                    sodipodi:nodetypes="ccccsc" />
                    <path
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#f0e8c8;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                    d="m 228.0401,163.25592 7.21042,0 c 0.62325,8.77972 0.60362,13.39722 2.65187,23.81284 -4.87467,6.72355 -8.37739,3.0589 -11.00904,-1.69951 0.0727,-3.63901 0.71652,-5.69119 0.86693,-9.00273 0.10599,-2.33363 -0.64005,-5.11692 0.27982,-13.1106 z"
                    id="rect4806"
                    inkscape:connector-curvature="0"
                    sodipodi:nodetypes="ccccsc" />
                    <path
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#f0e8c8;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                    d="m 225.758,114.1473 c 12.84749,1.61801 37.82537,1.5031 56.73805,2.25464 0.99642,0.82761 1.29437,1.65522 -0.11627,2.48283 -17.65813,-1.72777 -33.28328,-0.18063 -42.49988,1.18708 -5.47337,0.81223 -5.95779,7.00913 -7.67376,12.74007 l -6.24903,0.48069 z"
                    id="rect4808"
                    inkscape:connector-curvature="0"
                    sodipodi:nodetypes="cccsccc" />
                    <path
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#f0e8c8;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                    d="m 319.48471,76.676761 c -0.8349,-0.36808 -0.62114,-3.72307 -2.08254,-5.16823 -0.60655,-0.59982 -2.81464,-0.0266 -3.41978,-0.11543 4.53404,4.37567 -6.05716,17.38835 -9.80915,-2.78165 -5.47713,-0.9618 -10.04806,0.15373 -14.69277,-0.65535 -16.63462,-2.89764 -29.22304,-0.44211 -35.7632,-2.99077 -1.57055,-0.61204 -2.41097,-2.07261 -3.43449,-3.38901 -3.64662,-6.43163 -6.63971,-13.1126 -12.54711,-17.16918 -3.61284,-3.74809 0.0725,-13.29794 1.08065,-21.04916 l -2.94758,-1.17889 c -3.03382,10.95497 -4.42821,25.21696 -6.11824,36.70945 -4.81324,10.6946 -12.91438,15.59343 -17.33502,22.20695 l 1.73888,0.90212 c 4.52593,-3.21645 15.25724,-17.17775 19.97537,-17.825 14.20746,4.13008 22.26376,4.83772 40.921,4.13079 3.56399,1.59725 9.28358,3.18079 11.59483,6.69469 3.88886,5.91242 2.13918,7.19429 4.3167,10.57443 1.02878,1.59696 2.92462,3.92938 7.47955,5.89808 10.57179,4.569249 27.57322,15.750899 31.98512,18.464089 2.05258,0.75033 0.95397,-1.83748 1.3878,-3.11058 z"
                    id="rect4797"
                    inkscape:connector-curvature="0"
                    sodipodi:nodetypes="csccsscccccccccsssccc" />
                    <path
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#ffb4b4;stroke-width:2.5;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                    d="M 248.62274,6.4695312 C 239.21367,10.230471 230.79861,22.448141 229.398,32.210721 c -1.18218,8.24033 -0.52624,16.64465 -2.60564,24.76937 -1.34818,5.26572 -5.98618,9.68261 -9.4178,14.22248 -5.2012,6.88139 -10.89302,13.90996 -15.52698,21.18855 -6.22679,9.781389 -8.05272,16.886109 4.27248,21.240489 3.75825,1.3287 6.33066,0.94858 8.57943,4.68263 2.11166,3.50757 -1.62534,14.46054 -2.09311,18.15494 0,3.30637 4.02105,5.90532 9.95212,3.19515"
                    id="path128"
                    inkscape:connector-curvature="0"
                    sodipodi:nodetypes="csccccccc" />
                    <path
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#ffb4b4;stroke-width:2.5;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                    d="m 222.96303,146.54892 c -12.28053,-4.14808 -7.45999,7.73731 -6.89897,12.28115 0.89266,7.23378 -3.78722,13.66459 -3.43742,20.74161 0.71977,14.51138 22.37216,19.06785 35.50634,20.50499 6.7477,0.73869 13.47315,-1.51256 15.94795,5.4954 2.26561,6.4164 5.53483,12.53712 8.7543,18.97514"
                    id="path130"
                    inkscape:connector-curvature="0"
                    sodipodi:nodetypes="cccccc" />
                    <path
                    style="display:inline;overflow:visible;fill:#f2cccc;fill-opacity:1;stroke:none"
                    d="m 292.221,139.0769 c 2.75148,2.89799 4.12319,7.18651 5.31881,10.93266 1.09683,3.43633 2.82272,9.3842 0.9194,12.8501 -2.22188,4.04657 -13.17169,7.98753 -16.46352,13.18571 -3.90625,5.268 -5.75195,11.62126 -11.73343,13.15494 -1.01496,0.81511 -0.36131,5.05959 -1.66096,5.06466 -5.44817,0.0213 -24.4536,-3.95957 -31.7825,-5.53402 -0.8814,-0.18935 1.68752,-3.01916 0.99667,-3.0151 0,0 -1.48855,-6.10839 -2.24124,-16.2356 0.94258,1.18046 11.8583,-6.84225 10.95305,-8.88926 -2.64059,-4.41823 -9.64895,-9.638 -11.03007,-13.1906 -1.01886,-2.62311 1.55398,-7.10276 3.34305,-8.34677 8.5444,-8.99441 21.98993,-9.87188 29.18188,-9.86518 9.08266,0.008 17.6234,3.62283 24.19886,9.88846 z"
                    id="path143"
                    inkscape:connector-curvature="0"
                    sodipodi:nodetypes="cccccsscccccsc" />
                    <path
                    style="display:inline;overflow:visible;fill:#f58b59;fill-opacity:1;stroke:#c0272d;stroke-width:1.07000005;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
                    d="m 301.3004,173.91866 c -1.87813,-1.18485 -11.72755,13.3001 -10.37198,5.71774 1.08675,-6.0796 9.20286,-11.34105 9.32921,-17.40721 0.0491,-2.36907 -4.26251,-20.23259 -6.1087,-21.25415 -5.62239,-9.03898 -18.89199,-11.90922 -23.83729,-12.36141 -13.84745,-1.26618 -36.75587,7.48473 -35.0939,18.80457 0.59473,4.05081 13.93009,12.29428 10.49646,14.16601 -1.80923,0.98527 -3.83364,1.98644 -5.83777,1.52271 -3.09491,-0.71576 -3.55461,-3.27973 -6.11254,-4.46797 -0.2574,1.37238 0.3147,1.2156 0.10838,2.49456 -3.01002,0.18071 -5.10765,-5.67994 -6.24606,-4.94208 -0.26821,0.17383 0.16479,7.03811 -1.31379,4.27044 0,0 -0.53864,-3.7575 -0.97415,-5.78448 -0.46373,-2.15737 -0.36223,-4.11988 -1.21039,-5.57829 -2.41074,-4.14805 -0.9162,-21.81653 1.15637,-26.31193 1.26122,-1.28261 -1.12215,6.53254 0.74732,7.7761 2.5381,1.68832 3.74406,1.78684 6.03727,2.60432 1.97109,-0.94582 2.34032,-10.11165 6.82995,-11.40002 15.31137,-2.96877 36.15142,-3.12228 45.88725,-1.00205 11.97703,2.60831 14.86766,12.9092 19.07178,22.06459 0.74427,0.8743 1.4849,1.76688 2.49409,1.31656"
                    id="path6529"
                    inkscape:connector-curvature="0"
                    sodipodi:nodetypes="ccccssccccsccccsccscc" />
                    <path
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:#808080;stroke-width:0.64210165;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                    d="m 229.86339,149.2713 c 0,0 -0.90348,-0.27296 -1.08337,0.0845 -1.17439,2.33376 -0.88552,9.90583 -0.53934,12.81226 0.53443,1.55665 2.28953,6.42358 3.15764,7.28223 0.58141,-0.0138 1.7307,0.24844 1.64583,-0.54348 -0.25762,-2.40391 1.17909,-8.18513 1.12694,-9.43982 -0.44156,-3.79992 -2.11624,-3.87718 -3.10597,-6.81828 -0.39875,-1.11668 -0.66409,-1.56627 -1.20173,-3.37744 z"
                    id="path134"
                    inkscape:connector-curvature="0"
                    sodipodi:nodetypes="csccsccc" />
                    <path
                    style="display:inline;overflow:visible;fill:#ffffff;stroke:#808080;stroke-width:0.64210165"
                    d="m 226.61426,133.10214 c 0.036,1.03353 0.22191,6.05796 1.40641,8.16608 0.27743,0.49374 1.52012,-0.008 1.52012,-0.008 0,0 1.74906,-9.58527 2.69412,-10.66114 -0.49409,-2.15507 0.30822,-7.04993 -0.15565,-7.73711 -0.2982,-0.44174 -0.98101,-0.46527 -1.65638,-0.41589 -2.44916,1.96316 -4.50197,6.80054 -3.80862,10.65569 z"
                    id="path136"
                    inkscape:connector-curvature="0"
                    sodipodi:nodetypes="csccsccc" />
                    <path
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:0.35;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#023a49;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                    d="m 283.83416,211.1806 c 1.19966,-0.44559 2.38856,-0.78431 3.46993,-1.0061 2.24742,-0.46037 6.49159,-0.63511 8.46615,0.54909 -1.72455,-1.035 -6.13875,1.86703 -7.77458,2.41813 -3.69373,1.24334 -7.68855,2.65 -11.63163,2.8785 1.63853,-2.09419 4.58356,-3.76967 7.47013,-4.83962 z"
                    id="path180"
                    inkscape:connector-curvature="0" />
                    <path
                    style="display:inline;overflow:visible;fill:#047391"
                    d="m 293.10075,259.11846 c 2.73602,-0.70904 5.49691,-0.7823 8.27931,-1.00072 -0.63915,-0.28497 -1.8798,0.0175 -2.55457,0.0988 -1.64255,0.19826 -3.39667,0.60352 -4.92228,1.25947"
                    id="path190"
                    inkscape:connector-curvature="0" />
                    <path
                    style="display:inline;overflow:visible;fill:#e8f2f7;stroke:#626366;stroke-width:0.64210165"
                    d="m 274.51493,216.78854 c -1.67586,-3.70342 -1.396,-3.18885 -1.48942,-7.50627 -3.61553,-2.63171 -2.31782,0.94775 -2.37553,1.63461 1.43059,8.78819 7.8769,16.23299 9.36304,15.35669 -0.88827,-2.29611 -3.07143,-6.07506 -5.49809,-9.48503 z"
                    id="path676"
                    inkscape:connector-curvature="0"
                    sodipodi:nodetypes="ccccc" />
                    <path
                    style="display:inline;overflow:visible;fill:#e8f2f7;stroke:#626366;stroke-width:0.64210165"
                    d="m 300.40937,175.02864 c -0.66926,-0.53251 -6.47215,6.69894 -6.9137,7.18486 -2.60295,2.86102 -6.09863,7.84868 -8.96907,10.53228 -2.40603,2.24877 -4.58224,6.06952 -5.26238,9.1846 2.0579,-3.79522 5.82511,-6.40818 8.84005,-9.22955 2.86371,-2.68024 4.61786,-6.03964 6.73154,-9.35298 2.43705,-3.83752 6.09011,-7.61634 5.57356,-8.31921 z"
                    id="path678"
                    inkscape:connector-curvature="0"
                    sodipodi:nodetypes="ccccccc" />
                    <path
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#e8f2f7;fill-opacity:1;fill-rule:nonzero;stroke:#626366;stroke-width:0.50988716;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                    d="m 301.17827,213.94638 c -3.7387,1.1184 -2.37157,15.55767 0.79318,16.98563 2.87483,1.29647 0.46342,-5.7556 0.23701,-6.84299 -0.53499,-4.84792 0.12201,-7.52067 -1.03019,-10.14264 z"
                    id="path680"
                    inkscape:connector-curvature="0"
                    sodipodi:nodetypes="cccc" />
                    <path
                    inkscape:connector-curvature="0"
                    id="path5183"
                    d="m 282.26051,229.33399 c -2.88513,0.95645 -3.48096,8.4225 0.65291,7.7452 2.39079,0.40763 0.9208,-3.90921 0.61768,-4.43651 -0.59474,-1.03556 -0.56474,-2.41397 -1.53006,-3.04105"
                    style="display:inline;overflow:visible;fill:#e8f2f7;stroke:#626366;stroke-width:0.50988716"
                    sodipodi:nodetypes="cccc" />
                    <path
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#f0e8c8;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                    d="m 272.25263,191.91674 c -0.46704,1.70972 -1.12569,4.02405 -2.3646,4.02404 -1.23891,1e-5 -1.54969,-2.51147 -0.98888,-4.36395 0.51354,-1.69632 1.79744,-3.43574 3.03634,-3.43574 1.23892,0 0.31714,3.77565 0.31714,3.77565 z"
                    id="path4814"
                    inkscape:connector-curvature="0"
                    sodipodi:nodetypes="sssss" />
                    <path
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#f0e8c8;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                    d="m 318.25045,150.27716 c 4.53989,2.04465 9.24001,1.96398 13.61967,1.12162 l -2.88417,14.42083 c -4.05616,-1.69 -7.42948,-2.68366 -12.33781,-2.24324 z"
                    id="rect4831"
                    inkscape:connector-curvature="0"
                    sodipodi:nodetypes="ccccc" />
                    <path
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#f0e8c8;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                    d="m 316.48789,167.26171 11.37645,1.12161 -3.68533,13.94013 -9.77412,-1.28185 z"
                    id="rect4833"
                    inkscape:connector-curvature="0"
                    sodipodi:nodetypes="ccccc" />
                    <path
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#efc2c2;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                    d="m 282.98574,116.69137 c 9.24816,2.04548 18.36336,2.75212 23.57128,21.95172 0.005,2.10437 -0.0119,4.00291 -1.28185,3.55649 0,0 -1.45352,-1.42169 -1.82601,-2.47651 -3.75581,-10.63587 -9.85204,-18.23318 -19.98272,-21.07752 z"
                    id="rect4914"
                    inkscape:connector-curvature="0"
                    sodipodi:nodetypes="cccscc" />
                    <path
                    style="display:inline;overflow:visible;fill:#ffffff;fill-rule:evenodd;stroke:#ffffff;stroke-width:1.07532203;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
                    d="m 222.7825,139.95523 c 0.0422,2.25274 0.20461,4.14479 0.39656,5.94829"
                    id="path5085"
                    inkscape:connector-curvature="0"
                    sodipodi:nodetypes="cc" />
                    <path
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#efe9c6;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1.59230006;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                    d="m 232.21234,133.73737 c 0.79983,0.73045 1.68653,0.76593 2.68295,-0.0763 0.83438,0.48616 1.66877,0.97763 2.50315,-0.0712 1.08318,0.42413 2.13448,0.65703 3.02313,-0.086 1.33065,0.84602 2.47674,0.40004 3.6147,-0.10283 l 1.32434,-0.0377 c -5.21226,2.87028 -6.9145,4.7819 -9.10703,7.65219 l -1.72249,0.0821 0.14147,-1.67472 -1.25564,1.72783 -3.57656,0.17049 1.26965,-6.79029 c 1.52184,-0.72227 1.10233,-0.79354 1.10233,-0.79354 z"
                    id="rect5101"
                    inkscape:connector-curvature="0"
                    sodipodi:nodetypes="ccccccccccccc" />
                    <path
                    sodipodi:nodetypes="ccccccccc"
                    inkscape:connector-curvature="0"
                    id="path5104"
                    d="m 233.63495,156.67784 c 0.5172,0.51672 1.03439,0.74042 1.55159,0.0842 0.4607,0.3402 0.97115,1.0287 1.24596,0.0676 0.46594,0.30529 0.90867,0.72665 1.56402,0.0849 0.71075,0.79357 1.42151,0.47824 2.13227,0.11576 1.13629,0.38554 2.26847,0.75052 3.21243,0.1744 -3.85266,-3.09689 -5.90212,-5.29811 -8.09466,-8.1684 l -5.26408,0.13675 c 0.93787,4.23764 1.79749,5.28472 3.65247,7.5047 z"
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#efe9c6;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1.59230006;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate" />
                    <path
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#e6e6e6;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1.59230006;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                    d="m 270.82192,195.38233 c 1.28803,-1.6668 1.7766,-3.97318 2.00289,-6.48937 l -0.34097,18.82281 c 1.94501,-3.38191 4.52749,-4.85143 6.85466,-7.08688 l 0.0822,1.00403 -6.19531,7.36909 c -0.85571,-0.60264 -1.1882,-1.75851 -2.64382,-0.96139 z"
                    id="rect5219"
                    inkscape:connector-curvature="0"
                    sodipodi:nodetypes="cccccccc" />
                    <path
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#e6e6e6;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1.59230006;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                    d="m 278.83349,226.54734 1.52219,-0.52075 1.80261,3.16457 -1.44209,1.08157 z"
                    id="rect5222"
                    inkscape:connector-curvature="0"
                    sodipodi:nodetypes="ccccc" />
                    <path
                    sodipodi:nodetypes="ccccc"
                    inkscape:connector-curvature="0"
                    id="path5225"
                    d="m 283.40009,237.40302 1.24179,-1.08156 1.28185,3.08446 -1.32192,0.64093 z"
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#e6e6e6;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1.59230006;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate" />
                    <path
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#f2cccc;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                    d="m 299.03392,204.93322 c 0.79323,-3.6216 2.29644,-1.23582 3.00247,0 l 0.0566,10.31038 c -1.549,-2.78421 -1.75562,-0.64638 -2.49261,-0.45321 z"
                    id="rect5227"
                    inkscape:connector-curvature="0"
                    sodipodi:nodetypes="ccccc" />
                    <path
                    sodipodi:nodetypes="ccccc"
                    inkscape:connector-curvature="0"
                    id="path5244"
                    d="m 300.8654,230.75004 1.92444,0.7654 -0.3988,3.45945 -1.67235,0.0216 z"
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#e6e6e6;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1.59230006;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate" />
                    <path
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#f2cccc;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                    d="m 225.31618,114.37392 0.64092,6.26041 c -4.33039,4.60233 -4.35827,9.96427 -4.64671,16.18338 -1.41918,2.8841 -3.92691,-0.87261 -4.96718,-0.64092 0.89374,-5.65989 2.79426,-9.36247 2.04375,-17.11403 0.32152,0.50712 3.10048,-1.46393 3.77459,-5.4414 0.20077,-1.18458 2.51665,1.3799 3.15463,0.75256 z"
                    id="rect5246"
                    inkscape:connector-curvature="0"
                    sodipodi:nodetypes="cccccsc" />
                    <path
                    sodipodi:nodetypes="ccccsc"
                    inkscape:connector-curvature="0"
                    id="path5249"
                    d="m 227.271,184.51671 1.08958,-13.6643 c -5.19648,-5.64914 -5.22993,-12.23068 -5.57606,-19.86435 -1.70302,-3.5401 -2.78951,0.28439 -4.03784,0 1.24318,8.05286 1.47722,15.53415 5.54628,22.02103 0.89621,1.42874 1.658,10.17988 2.97804,11.50762 z"
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#f2cccc;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate" />
                    <path
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#e6e6e6;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1.59230006;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                    d="m 212.52878,80.982181 2.49262,0.90641 c -10.11612,11.96058 -12.2539,17.030759 -16.08871,23.566559 l -0.4532,-4.53204 c 5.60486,-9.978349 9.54696,-13.762869 14.04929,-19.940929 z"
                    id="rect5325"
                    inkscape:connector-curvature="0"
                    sodipodi:nodetypes="ccccc" />
                    <path
                    d="m 396.14604,20.327461 c 4.328,7.073 9.726,12.135 12.349,20.035 2.821,8.498 5.579,17.823 6.341,26.774 1.718,20.158 -8.198,36.285989 -17.602,53.492999 -10.628,19.446 -27.234,38.239 -24.503,61.815 6.241,53.875 98.755,70.091 138.448,90.949"
                    id="path164"
                    style="display:inline;overflow:visible;fill:none;stroke:#ffb4b4;stroke-width:2.5;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
                    inkscape:connector-curvature="0" />
                    <path
                    d="m 142.14204,368.80446 c -0.185,9.1 3.46,18.391 10.036,25.203 -3.025,30.332 -4.925,59.403 -1.128,90.002 2.917,23.503 15.545,40.203 20.475,62.279 4.777,21.391 2.758,44.187 0.137,65.72897 -4.176,34.322 -12.024,69.343 -12.024,104.001"
                    id="path168"
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#ffb4b4;stroke-width:2.5;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                    inkscape:connector-curvature="0" />
                    <path
                    d="m 100.73804,285.99546 c 30.808,-44.83 113.943,-33.838 154.816,-72.007"
                    id="path172"
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#ffb4b4;stroke-width:2.5;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                    inkscape:connector-curvature="0" />
                    <path
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:0.16199999;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1.59230006;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;marker:none;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                    d="m 238.65391,122.74004 c 12.25101,-3.42674 27.36327,-3.14603 38.04606,-2.15292 5.82412,0.54143 9.78518,0.88061 10.62458,2.15292 -19.87243,-0.83168 -36.35552,-3.40143 -45.90515,2.68113 -4.53366,2.88767 -5.76803,8.63941 -8.51747,15.75471 l -3.24471,-0.14749 c 0.77278,-1.79156 0.49685,-3.98681 1.2614,-6.05527 0.67174,-1.81738 1.37956,-1.23679 2.11176,-2.95078 2.0259,-4.74242 1.81365,-8.21664 5.62353,-9.2823 z"
                    id="rect10373"
                    inkscape:connector-curvature="0"
                    sodipodi:nodetypes="sscsccsss" />
                    <path
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:0.16199999;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1.59230006;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;marker:none;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                    d="m 229.9522,149.14018 2.80224,0.29497 c 2.36728,5.85616 5.92834,8.72789 8.99669,12.83135 l -3.53967,0 c -3.45489,-4.17493 -7.43114,-8.20089 -8.25926,-13.12632 z"
                    id="rect10376"
                    inkscape:connector-curvature="0"
                    sodipodi:nodetypes="ccccc" />
                    <path
                    sodipodi:nodetypes="cssscccscccc"
                    inkscape:connector-curvature="0"
                    id="path10680"
                    d="m 300.32541,201.73467 c -8.52244,-11.42132 -1.77798,-19.29086 2.34477,-25.30814 0.49716,-0.72562 0.39928,-1.94006 0.40079,-2.72978 0.002,-0.80044 -1.39213,-0.091 -1.37542,-0.81457 0.3056,-13.23051 1.94249,-25.86372 4.93258,-28.19706 4.56204,-0.56168 2.12345,-8.28314 1.72877,-11.03903 0.89181,1.08276 5.28114,0.37237 7.73232,0.20381 0.54882,3.16856 -1.47518,18.47955 -1.47626,20.05693 -0.002,3.11163 -6.7617,27.05518 -3.60922,42.13517 l -7.1988,9.30957 c 0.35014,-1.69277 -2.47103,-3.95747 -3.47953,-3.61695 z"
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#bfa9a0;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1.59230006;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate" />
                    <path
                    sodipodi:nodetypes="cccccscssscc"
                    inkscape:connector-curvature="0"
                    id="path5249-7"
                    d="m 302.90615,807.80253 c 0.81061,-0.6017 1.28404,-1.3132 1.50129,-2.0909 -0.79421,-0.7035 -1.12018,-1.8261 0.0207,-2.2406 -0.0208,-2.9064 -3.18173,-5.9819 -4.84802,-7.8431 -3.94502,-5.8577 -5.30476,-10.3692 -6.13022,-17.7816 -0.21355,-5.0688 -0.40081,-0.4281 -0.38858,-0.1791 0.4242,8.6394 3.59564,15.9618 5.94531,19.5768 0.82681,5.3558 -7.80527,-4.3838 -9.40943,-5.7582 -0.80783,-0.6921 -1.1535,-0.6131 0.20932,1.5595 0.44822,0.7146 6.53535,6.0021 8.23677,7.822 1.70058,1.819 2.76943,6.7407 4.8629,6.9352 z"
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#f2cccc;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate" />
                    <path
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#f2cccc;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                    d="m 308.84491,807.95003 c -0.81061,-0.6018 -1.28404,-1.3132 -1.50129,-2.0909 0.79421,-0.7035 1.12018,-1.8261 -0.0207,-2.2406 0.0208,-2.9064 3.18173,-5.9819 4.84802,-7.8431 3.94502,-5.8577 5.30476,-10.3692 6.13022,-17.7816 0.21355,-5.0688 0.40081,-0.4281 0.38858,-0.1791 -0.4242,8.6393 -3.59564,15.9618 -5.94531,19.5768 -0.82681,5.3558 7.80527,-4.3838 9.40943,-5.7582 0.80783,-0.6921 1.1535,-0.6131 -0.20932,1.5595 -0.44822,0.7146 -6.53535,6.0021 -8.23677,7.822 -1.70058,1.819 -2.76943,6.7407 -4.8629,6.9352 z"
                    id="path22855"
                    inkscape:connector-curvature="0"
                    sodipodi:nodetypes="cccccscssscc" />
                    <path
                    d="m 471.57604,379.60446 c -17.819,23.38 -9.582,76.152 -14.844,106.21 -4.733,27.032 -13.713,54.996 -12.201,82.716 3.275,60.06097 24.371,116.04497 21.645,176.51097"
                    id="path170"
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#ffb4b4;stroke-width:2.5;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                    inkscape:connector-curvature="0" />
                    <g
                    style="display:inline"
                    id="g10089"
                    transform="matrix(0.99999988,-5.1317708e-4,5.1317708e-4,0.99999988,-341.05898,-1.8306687)">
                    <path
                        sodipodi:nodetypes="cccccccccccccccccccccssccccccccccccccccccccscccc"
                        inkscape:connector-curvature="0"
                        style="fill:url(#linearGradient10163);stroke:#6c5635;stroke-width:0.57639378"
                        id="path10143"
                        d="m 647.57998,808.62346 c -0.28844,-2.78614 -0.26015,-6.43303 0.90276,-9.16834 3.83267,-3.6345 7.91881,-9.27636 8.9386,-15.60795 0.31631,-1.97906 0.86867,-17.18922 -4.95263,-21.84143 6.72011,-8.01577 1.87114,-16.83369 0.62252,-20.46737 11.64233,7.72705 19.31127,16.11736 34.58417,13.9401 25.55539,-3.64464 43.60881,-6.30698 54.90491,-31.92719 1.45541,-3.29816 2.52691,-6.86003 4.56874,-9.85094 2.38891,-3.50185 6.06844,-5.78333 7.35693,-10.06833 0.7839,-2.61071 0.4818,-4.74947 1.87031,-6.9753 0.75123,-1.20293 2.29761,-1.75811 3.17909,-3.12963 3.42115,-5.32763 -0.70804,-8.88918 0.26802,-14.06522 0.84948,-4.49329 5.7726,-6.51005 5.80714,-12.55843 0.0173,-3.11769 -2.31564,-6.47777 -1.5,-9.57884 0.68357,-2.60134 3.46034,-4.91239 4.51636,-7.64719 1.48992,-3.85967 1.70038,-7.45079 0.0696,-11.21054 -0.61388,-1.41608 -2.0282,-3.25777 -2.34761,-4.69505 -0.30723,-1.38196 0.39,-2.51781 0.89399,-4.03822 1.43931,-4.34289 1.65323,-9.46015 0.23225,-13.78709 -0.89443,-2.7225 -1.97345,-4.18772 -1.24612,-7.10431 0.7049,-2.82956 4.48939,-2.62185 4.26905,-8.08389 -0.19526,-6.2849 -3.51904,-8.67905 -4.06447,-11.06133 -0.63853,-2.78887 3.06939,-2.78167 4.29983,-11.66233 1.15836,-8.36039 -0.86734,-12.68813 -3.32295,-16.0512 3.20655,-10.93786 2.91686,-16.31937 -4.35971,-25.13287 -2.62554,-10.61309 -10.85201,-14.16252 -20.97538,-6.75596 -10.0146,7.32497 -14.42717,16.85422 -11.79546,27.5449 1.35959,5.518 1.88335,7.45167 1.29415,13.16113 -0.0832,0.7999 -0.23855,15.66627 4.44907,12.37745 -3.70148,2.59737 -4.26819,6.72099 -4.87193,11.03511 -0.92551,6.63607 1.90121,7.11539 3.14887,12.36539 0.76122,3.21057 -0.19373,4.02619 -0.89378,7.90844 -0.97048,5.36489 1.6445,9.4782 1.80073,13.51834 0.11018,2.89168 -2.00601,5.06862 -2.60619,8.38737 -0.83174,4.60501 2.07698,6.3598 2.43608,10.20683 0.19621,2.09173 -2.64904,18.24086 -3.27762,19.27434 -2.15324,3.54389 -7.71809,4.11871 -9.8054,7.50282 -2.8439,4.61049 0.8456,10.33517 -1.09292,15.02486 -1.5283,3.69666 -7.20404,3.55353 -8.77354,8.52663 -1.34742,4.27424 0.9072,10.13845 0.92175,14.73594 -9.45861,-0.15059 -17.47566,7.14284 -19.11815,16.62425 -0.39353,2.27439 -31.29054,-11.86576 -34.36149,-11.99744 -10.8849,-0.46504 -19.3078,6.31192 -24.46225,15.5128 -5.54343,9.89361 -4.83193,16.40218 -2.26105,25.37127 0.89645,3.12744 1.10372,2.49032 3.40155,5.661 -2.20894,7.6719 -2.05064,9.45443 -1.1944,18.43716 1.69043,6.74061 4.12496,13.05376 9.56443,18.21762 1.57852,3.46093 1.64072,7.13804 -0.0119,9.22214" />
                    <path
                        sodipodi:nodetypes="cccccccccccccccccccccccccccccccccccccccccccccccccccc"
                        inkscape:connector-curvature="0"
                        style="fill:#537f24"
                        id="path10145"
                        d="m 760.41697,553.61359 c -0.0479,0.55393 -0.0839,1.07844 -0.1071,1.56868 -0.15538,3.27179 -4.57681,7.00732 -0.91624,9.30048 2.35974,1.48005 4.856,-1.92449 6.60999,-3.06436 1.3697,12.35745 -13.38726,12.18958 -12.00071,22.50744 1.04111,7.73863 6.02566,4.07601 10.71425,2.6843 3.00976,6.49895 -3.06521,6.66889 -5.27508,10.68601 -2.50353,4.55156 -2.4814,12.9393 4.50881,9.80402 -0.0401,-0.088 0.69253,3.04902 0.7083,3.22115 -1.17867,-0.0359 -4.80077,1.56488 -7.31144,1.57239 -2.47994,3.69513 -3.89669,10.18119 -3.42013,14.54642 0.68337,6.27273 7.71132,8.35397 11.56496,1.80508 1.1499,11.38412 -10.13052,6.06368 -13.9369,13.58376 -5.19033,10.25616 5.48281,14.1575 13.61715,12.59841 -1.63815,2.91929 -3.10893,4.76563 -5.63448,6.29556 -3.82778,2.31986 -1.98706,-2.44717 -5.5378,2.57086 -3.69748,5.2268 -4.41439,18.59888 5.30155,14.59958 -2.37264,6.19146 -7.42908,1.76123 -11.74115,3.10414 -1.05472,2.88963 -0.55485,6.37799 -0.59573,9.63726 4.02819,-2.16039 8.21447,2.0703 12.93551,0.10543 -2.30298,5.89722 -7.7612,6.44017 -12.59515,5.78219 0.84268,0.78917 1.20786,2.11471 1.9016,2.9598 -2.85515,1.80782 -7.99169,11.26357 -1.98749,10.13547 -0.70412,0.98793 -1.78287,2.8086 -2.36234,3.63387 -3.03366,2.04827 -6.4109,3.01802 -8.23477,5.61399 -3.92627,-1.59555 -15.50476,11.09005 -19.49061,14.60055 6.80796,-5.31001 23.76624,-29.17314 7.97096,-30.66406 -0.0526,-0.68576 -0.20532,-1.15178 -0.45427,-1.71758 3.88268,2.38023 9.51996,-2.54609 10.96711,-6.41385 -3.55423,-2.28023 -6.33846,-6.9528 -4.64725,-10.98413 4.01702,6.15289 8.31019,-0.15265 6.70673,-4.97047 0.12079,-0.16747 1.13891,-0.74451 1.1298,-0.71904 -2.70866,-5.0828 -9.70056,-14.93818 -5.49827,-20.19049 2.53912,6.0058 8.50079,9.46051 8.09178,1.12659 -5.40128,-4.15793 -8.98941,-12.76205 -6.36493,-19.23407 1.52743,2.90923 3.29435,7.43035 7.87357,6.73183 -0.67615,-5.1217 3.89808,-10.54253 1.59556,-14.48157 -0.57033,0.14827 -1.52384,0.40972 -2.15193,0.49657 -3.44497,-4.35341 -9.73592,-14.10786 -5.11956,-19.10765 2.53674,3.22733 4.53678,10.29441 8.19267,5.66428 1.68182,-2.13015 0.60871,-9.98417 -0.72929,-12.053 -7.37329,4.88848 -10.24989,-10.26945 -8.06429,-15.11107 0.75439,2.08584 3.44549,4.38944 5.74413,2.24468 1.09975,-1.02632 -0.3467,-6.65202 0.75739,-8.81688 -8.39598,-4.52065 -12.28975,-12.37103 -9.25343,-23.25347 -0.12868,-0.11581 1.55586,-0.0324 1.5247,-0.0241 -0.13856,1.68701 0.723,3.05827 0.87509,4.52644 8.3852,-4.97945 -11.06796,-11.58394 -1.59878,-19.85277 0.70198,-0.61294 3.94351,-1.26794 5.77614,-2.93301 4.95903,-4.50755 3.42988,-14.07035 9.6841,-16.91157 4.71939,-2.14404 8.62775,0.6341 10.40126,4.6302 2.36543,5.33558 0.42707,15.72153 -0.12399,22.16568 z" />
                    <path
                        inkscape:connector-curvature="0"
                        style="fill:#8cc63f"
                        id="path10147"
                        d="m 742.60348,550.20677 c 1.12821,8.16504 2.83495,24.63827 3.28685,34.81897 0.65837,14.80925 0.19986,30.76987 -0.57036,45.62895 -1.65911,32.05832 -2.13254,64.04728 -18.78533,91.72128 5.62865,-8.9201 12.25529,-18.69349 15.20506,-28.87824 2.18435,-7.54121 1.76272,-15.2419 2.6097,-22.91392 1.5406,-13.95773 3.36197,-28.0319 3.811,-42.16425 0.47461,-14.91673 0.28042,-30.07028 0.61255,-44.94288 0.22696,-10.23038 -0.55413,-24.67832 -5.57085,-33.36311 -1.48395,0.28443 -0.65937,1.00182 -1.14082,1.85476"
                        sodipodi:nodetypes="cccccccccc" />
                    <path
                        sodipodi:nodetypes="ccsccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccsccccccccccccccccccccccccccccccccccccccccccccccsccccccccccccccccccccccccscccccccscccccscccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccscccccccccccccccccccccccccccccccscccccccc"
                        inkscape:connector-curvature="0"
                        style="fill:#f69161;fill-opacity:1;stroke:#c0272d;stroke-width:1;stroke-miterlimit:4;stroke-dasharray:none"
                        id="path10149"
                        d="m 720.85714,606.70256 c 1.06969,-1.66081 3.19264,-1.80341 5.17551,-2.19409 2.8488,-5.51336 8.60371,-5.85842 12.63815,-10.07089 6.42654,-6.71028 4.25677,-25.67558 -5.34625,-29.11759 -8.59213,-3.08009 -17.56374,2.96431 -23.29162,8.30985 -5.24721,4.89679 -11.40357,11.47912 -10.95525,18.79859 -0.0806,-1.31153 -0.18506,-3.08722 -0.59277,-4.2738 -1.9367,0.5672 -3.87068,2.10629 -6.12324,2.26554 2.46253,-0.97381 5.29793,-1.98761 7.19811,-3.76574 3.83403,-3.58796 6.34968,-10.5715 6.47399,-15.5286 0.1315,-5.17926 -3.1031,-8.62152 -8.67542,-9.5415 -14.06711,-2.32069 -20.96048,10.69412 -33.46351,11.26066 -24.81292,-5.06796 -35.59586,18.08176 -28.44713,19.20238 1.19099,-1.0745 1.55031,-2.11347 3.29807,-2.703 2.08073,-0.70095 4.46276,-0.88659 6.63924,-1.19365 2.36853,-0.33249 5.01829,-0.3568 7.396,-0.12068 2.96722,0.2979 5.70202,1.43214 8.63193,1.90301 2.28768,0.36706 4.51193,0.54327 6.79042,1.06046 1.83725,0.418 6.17894,2.29332 7.63111,0.53687 0.74425,-0.90091 1.04551,-2.08699 1.92026,-3.00847 1.02321,-1.07574 2.2904,-1.99368 3.42096,-2.98737 2.89473,-2.54275 5.56721,-5.37904 7.79268,-8.38648 1.31165,-1.77371 1.05782,-4.63585 0.51981,-6.70271 0.60801,1.59926 0.28633,3.40408 1.15112,4.93306 0.33815,-1.06103 4.59423,-1.49345 5.78728,-2.16479 -2.39428,0.58221 -4.99132,1.56205 -6.71493,3.16307 -2.45872,2.28266 -3.99302,5.63077 -6.2259,8.12704 -2.01465,2.2513 -7.70946,3.99489 -7.24273,7.48669 0.2584,1.93591 2.17633,2.2309 4.01321,3.14559 2.94815,1.46687 5.92125,2.88951 8.889,4.33562 3.44506,1.68009 12.36468,4.07525 15.71417,1.25749 2.13593,-1.79647 4.18126,-4.54591 6.12331,-6.57402 5.1202,-5.35445 11.9768,-9.99033 14.96134,-16.73196 -0.45237,2.39999 -3.52389,5.95449 -4.81859,8.43984 2.46212,-1.98276 4.75216,-3.41353 8.08334,-3.89951 -7.28444,1.66935 -10.5649,5.12976 -15.20355,9.96532 -2.23717,2.33078 -4.1373,4.89678 -6.28685,7.25734 -1.15868,1.27656 -2.7202,2.35594 -3.70236,3.77872 -0.86706,1.25539 -0.66326,2.10628 -0.71698,3.49978 -0.0864,2.27832 -1.35691,3.68519 -2.07958,5.81189 -1.37996,4.0566 2.3792,6.08915 5.90037,7.46224 1.97981,0.77122 4.0446,1.38917 5.95171,2.31055 0.7531,0.36305 2.09302,0.86487 2.65372,1.42477 1.08484,1.08239 0.48954,2.45036 0.85716,3.74761 0.42762,1.51349 1.74077,2.84938 2.13836,4.44904 0.39557,1.59093 0.45361,3.37125 -0.28292,4.86904 -0.73189,1.49089 -2.46212,2.24376 -3.0466,3.70408 4.41317,3.34086 14.82052,5.84205 17.94171,0.28835 1.01269,-1.80112 1.08657,-3.9614 1.20209,-5.9295 0.15571,-2.66117 0.38686,-5.41411 0.13955,-8.08839 -0.18178,-1.94685 -0.60227,-3.88312 -0.86921,-5.81986 -0.19598,-1.42268 -1.13731,-3.78507 -0.79893,-5.15678 0.20766,-0.84374 1.63889,-1.88795 2.24324,-2.63181 1.34838,-1.65937 2.46546,-3.45143 3.98226,-5.00049 -2.61937,2.18489 -5.74974,5.603 -5.55174,8.99484 0.21586,3.70808 0.44491,7.47633 0.66205,11.20678 0.30303,5.20941 -0.64063,10.2671 -2.83482,15.10399 -2.13445,4.70836 -7.14535,9.56051 -5.78332,14.91973 0.28481,-4.99957 1.39856,-11.20426 5.43626,-14.99606 -1.22404,1.14904 -4.98675,1.02829 -6.55635,0.89725 -2.43409,-0.20211 -4.4694,-1.00947 -6.54051,-2.12887 -3.87378,-2.09307 -6.57522,0.18369 -8.08872,3.65904 -1.05303,2.41824 -0.31551,5.49771 -0.11146,7.99933 0.21069,2.56773 -0.62887,5.13063 0.65265,7.48765 1.20362,2.21412 3.29942,4.25151 4.26955,6.50827 -0.62123,-1.07316 -1.31676,-2.10716 -2.05962,-3.13651 -0.4604,-0.63744 -2.03576,-3.32192 -2.8021,-3.48707 -0.74635,-0.15962 -1.15633,0.65421 -1.74915,1.14759 -1.96857,1.63703 -4.20357,3.20327 -6.42297,4.53748 1.62799,-2.24714 4.46509,-3.6661 6.52377,-5.56068 1.93332,-1.7806 1.00365,-4.3847 0.99151,-6.52901 -0.0182,-3.08402 0.60899,-6.63205 1.33778,-9.64411 0.86834,-3.58495 5.41437,-4.74165 7.09941,-7.89151 0.75024,-1.40256 1.5287,-3.86516 1.28697,-5.43611 -0.18836,-1.22413 -3.16395,-4.1251 -3.10364,-4.5419 0.3904,-2.6863 -1.71022,-4.85996 -4.27977,-5.84002 -2.73824,-1.04459 -5.11898,-0.37787 -7.51652,1.09063 -4.60439,2.81907 -6.76737,7.97783 -9.33,12.24496 -0.72836,1.21231 -1.31808,2.4419 -1.90255,3.70647 -0.46039,0.99771 -1.92151,2.79131 -1.83254,3.89332 0.0565,0.69252 0.90901,1.57211 1.27793,2.17496 0.75923,1.24336 1.48135,2.47658 1.94363,3.83175 -0.28585,-1.34529 -2.11466,-5.62489 -3.97348,-5.43874 2.19328,-6.79536 7.7067,-12.6157 11.61649,-18.62594 0.53034,-0.81476 1.06194,-1.73861 1.71222,-2.45202 0.29855,-0.32805 1.2009,-0.78347 1.33281,-1.16439 0.41925,-1.22008 -1.7693,-1.61404 -2.45417,-2.17489 -0.93715,-0.76724 -1.56201,-2.09062 -1.79504,-3.1923 -0.66974,-3.17696 1.88389,-4.53593 2.46233,-6.2815 0.94447,-2.84503 -0.15948,-4.91854 -2.96615,-6.23668 -1.42959,-0.67279 -2.69406,-0.80864 -4.12716,-0.87366 -0.92379,-0.0419 -1.29642,0.27563 -2.31579,-0.0832 -2.61229,-0.92095 -5.10431,-2.50312 -7.58561,-3.73778 -2.61878,-1.30359 -5.48028,-2.28585 -8.26384,-3.25279 -5.20224,-1.80525 -10.48191,-3.19829 -15.82687,-4.51823 -5.25362,-1.29607 -10.44169,-2.97396 -15.97127,-2.38509 -3.16085,0.33624 -9.37632,1.4706 -10.15777,4.96946 -0.30435,1.36532 1.59285,2.77964 1.98979,4.07254 1.20471,3.92327 -2.73766,7.03379 -5.27041,9.63608 -2.69811,2.76852 -5.42287,5.59394 -6.85219,9.12251 1.17889,1.62043 3.83222,1.64573 5.74794,1.91933 3.2948,0.469 6.15001,2.12822 9.21981,3.35651 6.33689,2.53138 13.79462,5.7521 18.65471,10.36852 1.71478,-3.05976 3.98046,-5.64713 6.96064,-7.85329 -5.40458,6.1361 -8.90142,8.27057 -4.11243,15.89158 -0.76635,-5.13197 -4.26831,-9.167 -8.95311,-11.76148 -7.27321,-4.02611 -28.47903,-18.15543 -32.9198,-4.25123 2.6903,-2.84923 3.62774,-6.89787 6.01461,-10.01694 2.24271,-2.92981 5.24889,-5.23865 7.57266,-8.1337 2.06216,-2.56954 4.94078,-6.48425 2.78012,-9.66104 -2.24011,-3.29532 -6.28009,-1.68694 -9.42317,-1.17082 -11.45276,1.87931 -19.04314,-0.88061 -29.57292,-4.37323 -9.23452,-3.06411 -16.47922,-2.11801 -22.18653,4.51469 -2.40205,2.79208 -5.55768,4.72931 -5.84455,8.01876 -0.25605,2.93155 0.74848,5.79547 0.0568,9.0134 -0.82488,3.83651 -1.93162,7.51775 -2.29867,11.42202 -0.52285,5.57889 2.24055,10.51474 2.07659,16.07043 -0.1126,3.80286 -2.29407,7.81856 -1.63109,11.57411 0.34358,0.0978 0.65708,-0.0484 0.98976,0.0818 1.24371,2.10246 -0.0609,4.16238 0.86172,6.61078 1.68561,4.46982 6.67152,12.27178 11.90462,13.85254 3.46525,1.04675 10.68469,2.01863 13.78466,-0.29363 1.58469,-1.18103 2.02299,-3.63631 2.62429,-5.3092 1.01856,-2.83354 3.00572,-6.71859 5.65929,-8.57095 6.63391,-4.63333 17.10006,-0.49499 22.79054,-6.58984 0.63277,-0.67905 1.26242,-1.44279 1.84154,-2.16189 -0.9965,1.34898 -2.38442,2.83076 -2.89099,4.36971 0.0509,0.043 0.0998,0.0861 0.146,0.13306 2.58156,-0.41376 5.64375,-0.75526 8.3068,-0.58208 -1.65746,0.73808 -4.27241,0.35184 -6.17964,0.66438 -1.39567,0.22851 -2.67637,0.34612 -4.07164,0.47138 -2.21972,0.20159 -4.24808,1.18024 -6.42348,1.43177 -1.7174,0.1995 -3.53181,0.11518 -5.28438,0.30744 -3.77579,0.41509 -7.68971,1.1742 -10.30846,3.9249 -1.3397,1.40797 -1.63652,4.79595 -2.45427,6.51024 -0.62461,1.30708 -2.63628,3.50185 -2.87752,4.84086 -1.33639,7.38661 9.14557,15.16314 15.46537,17.49709 8.25806,3.04934 10.84605,-2.93224 15.32897,-7.85299 5.67616,-6.23194 12.41005,-11.09474 20.06247,-15.10138 2.90199,-1.51932 3.63566,-2.62653 3.56862,-5.74581 0.12984,1.11013 0.0787,2.35557 0.57689,3.37515 1.13361,-0.32565 2.4813,-0.20279 3.689,-0.38645 -4.71031,-0.0405 -8.8083,3.12308 -12.41595,5.59042 -1.18065,0.80749 -5.30219,3.00052 -3.15913,4.50639 1.37702,0.9687 3.01551,0.62145 4.59483,0.83511 1.831,0.24767 3.7379,0.82819 5.54202,1.24866 2.04283,0.47611 9.34221,1.92783 6.49315,4.614 1.92561,-0.54851 4.17849,0.0334 6.0616,0.34546 0.99857,0.16634 2.33238,-0.0144 3.14366,0.5045 -0.0749,-0.85 0.46379,-2.52775 0.70997,-3.525 0.75446,-3.07187 2.21009,-6.1587 3.73038,-8.96998 0.76892,-1.42135 4.19058,-5.21024 6.16222,-4.67555 -2.84029,0.61068 -4.86741,3.37445 -6.21189,5.56355 2.10481,-0.41305 3.96351,-1.52244 6.04716,-1.95659 1.62345,-0.33825 3.38374,-0.2599 4.99234,-0.51124 -3.14436,0.49277 -6.08236,1.16343 -9.21447,2.10886 -1.44478,0.43672 -1.8955,0.53246 -2.56963,1.75852 -1.30014,2.37149 -1.6427,4.8272 -2.67211,7.24019 -0.3547,0.83438 -0.91596,1.80447 -0.71164,2.75663 0.68313,3.18454 4.92867,4.31246 7.73262,5.44366 4.12346,1.66354 5.92853,4.43691 8.81509,7.47368 2.19647,2.31238 3.83052,5.58027 7.35721,6.41958 3.57617,0.85216 6.72652,-1.45018 9.95095,-2.36883 -2.42244,1.12413 -5.81694,0.90407 -7.72616,2.77779 -2.23069,2.19044 -4.02101,7.23033 -3.21388,10.07692 0.38218,-2.469 2.78378,-8.1019 0.98934,-10.1421 -0.86251,-0.97975 -3.08427,-1.63807 -4.18783,-2.63836 -3.88886,-3.52542 -5.73754,-8.78248 -10.98035,-10.9669 -1.89572,-0.79008 -4.0152,-0.86569 -5.87209,-1.65735 -2.37761,-1.01231 -2.47478,-3.92172 -5.15489,-4.61761 -0.94189,-0.24515 -8.28169,-0.30066 -8.4059,-0.0426 0.28247,-0.58685 0.88226,-0.99172 1.58842,-1.11973 -0.35677,-0.87671 -1.74729,-1.66503 -2.73172,-2.09845 -4.72091,-2.07774 -13.01281,-3.73583 -18.16744,-2.25886 -3.24324,0.92966 -5.78603,3.10068 -7.77121,5.55409 -1.91903,2.37347 -3.89264,5.10133 -5.35488,7.73249 -0.8729,1.57201 -0.23356,2.97892 1.231,3.97155 1.42724,0.96791 3.58196,1.9701 5.19743,2.64969 4.3457,1.82558 9.21674,0.66181 13.80631,1.06849 2.44,0.2176 4.57017,-0.0157 6.72356,1.22221 2.27768,1.31092 3.74713,3.62115 5.39055,5.44363 -1.88751,-2.96782 -8.59585,-6.47306 -12.49054,-6.87123 -4.84107,-0.49523 -9.30238,0.36017 -14.11678,-1.10547 -3.61958,-1.10079 -12.85872,-6.37848 -16.07043,-2.09914 -0.90011,1.19846 -0.98605,4.61816 -1.37702,6.08906 -0.69837,2.62592 -2.19126,5.95389 -1.65164,8.65472 0.9443,4.72403 8.2254,8.9672 12.54421,11.16037 2.11213,1.072 4.22707,1.35707 6.50238,1.91716 2.04609,0.50527 4.08176,0.94546 6.20649,1.1213 2.91994,0.24119 5.89216,0.0998 8.82098,0.23371 2.3626,0.10877 4.68353,0.48115 7.04059,0.59976 2.98974,0.15243 6.12799,0.34927 9.10719,0.29736 1.07645,-0.019 2.04273,-0.44519 3.0894,-0.62241 1.31613,-0.22335 2.60089,-0.19202 3.92757,-0.0795 -1.78201,0.25408 -4.49119,-0.0937 -6.06726,0.70157 1.4647,0.8709 2.63253,2.12046 4.097,2.97578 -1.15554,-0.79398 -2.16721,-1.73241 -3.46919,-2.36338 -1.01275,-0.49043 -1.8964,-0.44434 -3.01013,-0.51245 -4.0185,-0.24332 -8.05062,-0.77178 -12.08733,-0.89794 -4.53836,-0.14356 -8.90505,-0.5411 -13.3779,-1.19991 -8.94761,-1.31857 -18.91452,-4.23282 -23.16536,-12.32687 -2.17662,-4.14556 1.37864,-9.11398 1.91072,-13.27212 0.6724,-5.26571 -4.71956,-9.36926 -10.05931,-10.26467 -2.26417,-0.3801 -7.68374,-5.12119 -9.96405,-4.39177 -2.12557,0.68022 -4.93183,1.7125 -6.69368,2.9645 -1.82847,1.29882 -3.66966,3.04288 -4.96311,4.89518 -3.44574,4.93846 -2.76002,3.16745 3.09428,3.79373 4.35424,-1.06001 12.97508,5.18977 14.62017,3.65381 -0.74468,2.24293 -0.52801,3.42787 -2.62103,4.84968 -1.88467,1.27926 -1.94846,1.39031 -2.68742,3.37411 -1.48066,3.97541 -0.54556,6.39916 -0.66072,10.74452 -0.0918,3.4753 4.08109,5.82439 6.95548,8.15236 0.93243,1.22912 3.76754,1.61009 6.20453,1.19084 2.7515,4.74668 9.26243,9.36667 15.44162,11.87326 6.12011,2.48514 13.34433,2.28341 19.84092,1.38321 4.93108,-0.68362 8.99917,-0.55016 13.87244,-0.25315 5.8504,0.35756 10.43133,0.43033 16.09479,-0.9271 4.20035,-1.00711 10.2289,-2.02555 10.77647,-7.01076 0.34647,-3.16671 0.45594,-7.77395 -1.59482,-10.43047 -1.70975,-2.21392 -4.8313,-3.41607 -6.47576,-5.63686 -1.00792,0.95377 -2.26968,0.35138 -3.71133,0.67703 -1.65894,0.37484 -2.95185,1.34967 -4.71996,1.45063 -5.29773,0.30278 -11.14673,-1.33059 -16.02789,-3.08636 -3.65109,-1.31261 -7.45391,-1.5194 -11.05107,-3.03445 -2.48045,-1.04575 -5.17024,-2.80107 -7.69878,-3.56849 -2.68182,-0.8137 -5.39799,0.18652 -8.01807,0.68854 1.44896,0.0472 2.85719,-0.68788 4.34518,-0.7591 -0.59185,-1.07361 -1.34528,-2.30927 -1.56211,-3.47061 0.81396,4.3638 5.82236,3.84841 9.2604,5.30559 1.07289,0.45442 1.99863,1.08841 3.03911,1.59593 1.9521,0.95183 4.1746,1.33356 6.31114,1.80137 2.0215,0.44334 4.08816,0.73306 6.07546,1.30159 1.77218,0.50571 3.35382,1.40203 5.06463,2.05479 2.26265,0.86316 4.48438,0.93131 6.93151,1.05141 2.37693,0.11634 4.35323,-0.33461 6.65292,-0.77314 1.87626,-0.35588 4.12075,-0.74484 4.82955,-2.58694 0.78914,-2.05276 0.17869,-4.60542 -0.69482,-6.5394 -2.36888,-5.2469 -6.84935,-12.37805 -12.87478,-14.60854 -1.57235,-0.58191 -2.31898,-1.21775 -3.64615,-2.08303 -1.58844,-1.03743 -1.68056,-0.85386 -3.81285,-0.96335 -1.42277,-0.072 -2.73932,-0.39986 -4.14639,-0.4351 -1.66021,-0.039 -3.16039,0.36837 -4.83073,0.41422 2.0392,-1.27683 4.92331,-1.08864 7.04207,-0.47446 -0.98296,-0.98466 -1.42962,-2.37319 -2.38492,-3.41185 0.55742,1.05274 1.81413,3.13649 2.95714,3.7203 0.96254,0.4922 2.44141,0.053 3.47825,0.30931 2.14597,0.52999 3.58417,2.38396 5.70318,3.21142 2.65473,1.03714 5.9025,2.57719 7.74834,4.76364 1.81787,2.1528 2.60876,5.25188 3.59912,7.7927 0.8821,2.26496 2.05585,4.44547 2.18396,6.87426 0.10479,1.99677 0.58017,3.34004 2.23386,4.8254 2.73119,2.45295 6.70077,4.02834 10.3667,4.92681 3.38914,0.83077 6.71732,1.31385 10.18611,1.16656 3.39869,-0.14424 4.29532,-0.0795 6.45589,-2.26787 5.84466,-5.92003 9.19133,-11.61169 10.82132,-19.6681 0.40599,-2.00386 -0.64218,-4.34801 -2.08712,-6.01294 -1.92597,-2.22219 -5.84772,-2.00249 -8.356,-3.33314 -0.006,-0.0145 0.10423,-0.26362 0.0907,-0.34424 -6.92985,-2.44021 -13.54108,-4.02064 -14.21187,-11.71349 -0.30124,-3.45157 0.96831,-6.69032 2.74476,-9.68093 4.2811,-7.20328 -3.94185,-9.07379 -9.04115,-11.75424 -1.45464,-0.76588 -3.58144,-2.45705 -5.36315,-2.50877 -2.97359,-0.0845 -5.15631,2.53756 -7.99107,2.81119 -3.19254,0.30752 -7.26669,-1.02762 -10.32179,-1.76531 -2.32559,-0.56319 -4.35845,-1.07062 -6.32441,-2.19363 -2.00035,-1.14195 -3.57258,-1.91181 -5.92156,-0.82 -2.99298,1.38928 -3.25549,5.18185 -6.51616,7.19669 -3.14793,1.94587 -6.8567,3.25685 -10.16321,4.92085 -3.54835,1.78468 -11.10593,4.55397 -12.40058,8.41445 -0.91129,2.71498 -0.84558,6.78771 0.4786,9.34176 -1.44081,-3.66828 -0.27673,-7.05534 -0.503,-10.63177 -0.0996,-1.57223 -0.53626,-1.61988 -2.01753,-2.26068 -2.89095,-1.24864 -5.81232,-1.71867 -7.87028,-4.21828 1.57232,2.14889 6.34863,4.3212 9.17983,4.78291 1.64647,0.26812 4.83811,-1.53918 6.43542,-2.11172 3.54537,-1.2714 6.73193,-3.42921 10.0321,-5.13791 3.63791,-1.88348 7.69391,-3.0412 9.72392,-6.65132 1.13096,-2.01141 2.67261,-3.54625 1.90675,-5.89973 -0.63392,-1.94848 -2.60888,-3.75794 -4.34883,-4.91666 -1.95526,-1.30043 -4.1814,-2.32584 -6.47479,-3.02101 -1.77837,-0.54067 -3.67137,-0.6851 -5.44235,-1.23855 -1.56628,-0.49045 -2.92623,-1.32794 -4.5215,-1.79164 -3.26668,-0.9486 -6.83894,-0.87759 -10.22238,-0.66152 -1.59562,0.10019 -3.23484,0.0706 -4.78903,0.47881 -1.49847,0.39472 -3.03492,0.91566 -4.50115,0.39636 -3.07056,-1.08512 -4.45012,-4.90824 -4.63847,-7.56885 -0.27254,-3.82599 1.24927,-6.85933 2.31711,-10.41238 0.7107,-2.36414 1.49848,-4.70709 1.36876,-7.18163 -0.0916,-1.7389 -0.39694,-1.81588 -2.32388,-2.07859 -1.68952,-0.23043 -3.42001,-0.34529 -5.12427,-0.15477 -4.45228,0.49785 -6.7736,4.54302 -8.04817,8.02337 -1.63649,4.47164 -2.9428,8.63908 -3.50697,13.32946 -0.44925,3.72637 -0.53625,7.07305 0.25421,10.73115 0.72636,3.35526 0.53227,6.3764 5.05079,5.80544 -0.88555,-0.21585 -1.98753,0.33037 -3.00566,0.12245 1.08518,2.93569 2.91286,5.96094 4.58692,8.65458 -3.70348,-4.40193 -6.6603,-10.32224 -7.46844,-15.85285 -0.61247,-4.1946 0.26461,-9.66027 1.60639,-13.73478 1.71948,-5.21894 1.37917,-12.47584 7.26081,-15.6501 0.40236,-0.55465 1.46313,-1.19761 2.32056,-1.41762 -7.09444,0.78499 -15.41402,-1.27878 -16.66499,-8.58753 1.13376,3.27871 5.01979,7.26287 8.75955,8.35008 2.13022,0.61984 4.66208,0.0471 6.86781,0.25384 1.47113,0.13843 2.66465,0.0875 4.19977,0.0632 2.83903,-0.0448 5.64919,0.33833 8.37852,-0.40792 3.74043,-1.02321 7.92765,-3.00107 11.2767,-4.80403 -3.9834,1.45848 -7.63764,3.71912 -11.52159,5.36788 -1.67021,0.70907 -2.23312,0.91177 -2.71881,2.51758 -0.59245,1.95616 -0.63389,4.00003 -1.0069,5.9907 -0.3625,1.93013 -1.31279,3.59003 -1.85326,5.47038 -1.09259,3.80762 -1.25524,8.08166 1.61471,11.27938 3.09825,3.45123 8.12355,0.31095 12.72122,0.10005 5.9938,-0.27676 9.88461,2.07606 15.08657,3.86184 3.1854,1.09499 7.25616,1.54297 10.05214,3.43199 2.64282,1.7843 3.71794,4.4835 6.9104,5.93482 6.52901,2.96951 14.59915,6.06759 21.9905,5.56035 7.54383,-0.51452 9.46402,-7.51398 10.63008,-13.24814 0.68303,-3.35706 0.96065,-6.76129 1.34748,-10.15165 0.35913,-3.14354 1.50037,-6.01408 1.70763,-9.17275 0.52112,-7.92008 -5.25735,-8.54562 -12.76036,-10.77128 -3.73054,-1.10489 -9.81334,-3.89252 -13.68211,-3.74572 -2.28112,0.0857 -6.12555,2.17208 -8.62971,2.62844 2.56779,-1.16636 5.22925,-2.21344 7.9358,-3.09274 -5.19065,-1.52885 -4.13881,-4.42135 -7.32266,-7.76215 3.71992,10.7631 22.34009,8.7521 30.34036,14.09025 7.59733,5.06891 3.92763,12.34141 2.93653,20.40137 -0.52399,4.25832 -1.28594,8.90508 -2.75266,12.99227 -1.37561,3.83352 -2.45392,4.18167 0.74788,6.73431 1.61864,1.29016 3.96713,1.40598 5.8771,2.26303 3.69877,1.65953 8.33324,4.63948 7.00266,9.0946 -0.85415,2.86406 -2.49608,5.45715 -3.05282,8.5035 -1.40933,7.71694 5.43686,13.53785 13.11542,15.18908 3.66908,0.78837 8.1708,1.47691 11.82752,0.23687 5.21105,-1.76906 4.77696,-5.82039 7.94406,-9.25466 -1.73629,-1.16755 -2.59402,-3.1904 -2.54661,-5.21489 -0.18867,8.03463 16.47985,-1.89052 19.07594,-3.52382 6.27514,-3.94789 6.96904,-9.88787 10.25375,-15.73437 2.79038,-4.96706 0.46625,-6.73692 -0.64316,-12.32315 -1.17193,-5.91052 1.65163,-11.59586 2.48421,-17.38514 1.1553,-8.04502 2.3848,-26.26541 -9.597,-27.92562 -3.76665,-0.52291 -8.25163,1.18405 -10.91813,3.84396 -1.51919,1.51501 -2.04453,3.45842 -4.02168,4.56968 -2.93139,1.64931 -6.32356,-0.30528 -9.08092,1.51463 2.91843,-0.58269 5.86574,-1.06846 8.78207,-1.66475" />
                    <path
                        sodipodi:nodetypes="sssss"
                        inkscape:connector-curvature="0"
                        id="path9836"
                        d="m 588.77729,685.89696 c 0.70707,-0.14596 -2.89732,2.79081 -6.23258,4.32473 -3.66565,1.68587 -7.36201,0.27281 -7.99282,0.87757 -0.56155,0.53835 2.37282,-3.53231 5.89104,-4.66626 3.41231,-1.09982 7.13875,-0.28924 8.33436,-0.53604 z"
                        style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:#c0272d;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;marker:none;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate" />
                    <path
                        inkscape:connector-curvature="0"
                        style="opacity:0.8;fill:#6c9d31;stroke:#6c5635;stroke-width:0.57639378"
                        id="path10151"
                        d="m 558.09988,728.94334 c 0.98356,0.69931 2.03351,1.33621 3.15257,1.90287 5.1141,2.58964 10.14479,3.42913 15.92177,3.14924 3.29715,-0.15974 9.25869,-3.29663 10.99606,-4.07257 0,0 2.01256,2.09513 2.49162,3.44294 2.46372,3.95894 6.24111,6.48849 8.9019,10.3059 0.53081,0.76155 3.03202,-0.13241 2.59497,-2.19479 -3.75102,-5.2774 -6.94411,-6.14224 -9.18132,-10.54491 -0.79142,-1.82 -1.38045,-2.65712 -1.86791,-3.72845 1.83863,-1.77711 4.83433,-5.88539 6.06099,-8.74851 2.04991,-4.78689 4.2506,-9.95987 4.8397,-15.21842 -0.66866,-8.39934 -3.61463,-17.30035 -7.91569,-17.51913 -3.51824,-0.0458 -6.01958,0.22999 -6.01958,0.22999 0.76947,-2.9065 1.25992,-7.32463 0.60256,-10.16887 -0.0279,-3.38604 -2.56886,-8.04754 -9.95947,-7.16595 1.58846,-1.24828 1.55283,-4.43943 1.55283,-4.43943 -2.45904,-6.89383 -7.05145,-9.906 -10.08075,-10.72916 -1.92909,-0.41071 -4.07398,2.07444 -5.51821,3.00685 3.28662,-2.12043 3.10888,-3.50005 3.60765,-7.73265 0.30299,-2.57 -0.5719,-9.56623 -3.47312,-10.54202 1.48019,-2.17761 5.68035,-8.23042 1.38083,-10.00902 1.53651,-2.34601 4.2918,-11.17009 1.45939,-13.414 2.01897,-3.52131 3.6741,-7.36119 2.97665,-11.46778 -0.30369,-1.79105 -0.61482,-3.24599 -0.4826,-5.1082 0.0244,-0.3432 -0.0361,-4.85121 0.1545,-4.65554 -1.69999,-1.73687 -2.57148,-3.90767 -4.48666,-5.58173 7.03677,6.15292 4.33216,10.23727 12.54967,10.97574 -0.5958,8.59816 16.63455,15.93194 21.04979,14.25949 0.62505,-0.1657 0.66113,-0.81487 1.4904,-0.82018 1.23394,-0.009 3.25357,1.613 4.38069,2.08117 2.97131,1.23374 9.15265,3.56209 11.9806,0.98922 4.1324,6.10548 14.84077,5.86798 19.91314,1.16304 1.55352,1.17919 13.0505,-0.83108 12.23292,-3.80995 4.37091,3.41264 13.95543,-2.24589 13.92038,-3.3743 2.32764,3.97176 20.26186,-2.55504 20.82635,-6.89678 3.24977,0.17463 15.69056,-1.54693 13.54393,-7.21904 2.75903,1.49712 7.54539,-1.5533 11.04333,-3.34911 3.46479,-1.77879 2.20655,-4.11012 3.32612,-4.81537 1.47088,-0.92504 7.43212,0.38094 9.20593,-0.31458 4.26365,-1.6718 5.20594,-1.1967 7.08586,-4.60126 3.58343,-6.21988 2.42196,-5.70249 7.74463,-8.6634 2.14752,-1.19382 2.45769,-7.97612 5.63057,-8.39728 7.24261,-0.9597 10.16725,-7.83377 9.99541,-14.64393 16.03242,6.99353 14.22826,-17.07851 4.574,-23.33424 -7.74714,-5.70543 -29.44228,11.21425 -34.51323,22.58069 -3.62198,-1.13582 -5.25648,-0.94735 -8.67998,0.62306 -4.08859,1.85098 -4.91756,4.25995 -5.11601,6.18199 -1.99382,-4.38034 -11.53299,5.31047 -14.44362,10.10266 -3.27187,-1.69841 -7.99059,-3.1795 -11.47329,-1.50785 -2.86994,1.37662 -8.15054,4.75564 -7.15849,8.58878 -0.82119,-0.28699 -1.48007,-1.08102 -2.2191,-1.32353 -1.96753,-0.64384 -7.90944,-2.15894 -9.79279,-1.57214 -2.57779,0.80326 -10.38982,2.60094 -9.03312,6.41663 -1.74125,-2.00647 -7.36679,-3.20933 -11.5731,-1.07041 -4.09293,2.08128 -5.93219,5.02185 -5.22814,5.52036 -0.0498,0.0923 -0.16943,0.40781 -0.20092,0.5242 -1.78522,-1.20077 -3.14736,-3.12336 -7.3402,-1.94862 -2.85783,0.80071 -6.29107,-3.31413 -7.16702,0.0496 -3.5129,-3.67565 -10.30064,-8.46276 -15.14769,-3.14324 -2.82709,-4.74058 -9.63143,-6.71548 -13.98422,-4.91233 0.85164,-3.03451 -4.42395,-9.56759 -6.46656,-12.57776 -1.73271,-2.55442 -2.26523,-5.8767 -5.39788,-7.25593 -3.02389,-1.3303 -10.58543,-0.27207 -12.12745,3.00117 -1.03604,-1.44252 -6.0271,-2.86836 -7.95852,-3.17873 -3.72893,-0.60141 -7.69575,1.01945 -10.58484,3.2982 -3.24147,2.55407 -5.40869,5.32979 -6.50343,9.44617 -0.59772,2.24645 -1.79354,5.86385 -0.64222,8.00088 -2.98485,0.96941 -5.025,4.40244 -5.77022,7.3271 -0.44393,1.74053 0.004,3.82536 -0.43861,5.44025 -0.28,1.01823 -0.37187,0.82685 -1.14254,1.80122 -2.37249,3.00003 -4.30134,4.76206 -4.43342,8.98692 -0.0506,1.60772 0.73232,3.8314 0.46937,5.3071 -0.37685,2.11733 -2.33823,3.59745 -2.59706,6.00996 -0.17452,1.62525 0.32079,2.90491 0.47019,4.51433 0.12139,1.31186 0.21902,2.88023 -0.13315,3.95512 -0.28499,0.87028 -1.21395,1.58225 -1.4926,2.49821 -1.0694,3.5112 -1.6097,9.63169 2.56614,13.20834 -5.40449,1.53132 -3.49657,5.30827 -1.92912,8.82067 -4.14264,0.54262 -4.57402,9.29105 -3.97705,12.28606 0.76457,3.83381 3.45982,6.38522 9.24919,7.57562 -8.76076,-0.35236 -6.32299,10.2563 -4.58741,16.14623 0.76159,2.58241 2.02465,5.5161 4.44821,7.11467 5.87987,3.44378 8.73239,-1.86442 8.23785,0.24215 -2.2554,2.9885 -4.18328,7.47621 -2.29656,11.30496 0.77342,1.56841 2.89199,5.17534 4.84202,5.20006 0.70887,10.57983 4.22557,21.90515 13.06419,28.19128 z"
                        sodipodi:nodetypes="cssscscccccccccsccccccccccccccccccccscsccccccccccccccsccsccccccccccccccccccccccccccccc" />
                    <path
                        inkscape:connector-curvature="0"
                        style="opacity:0.8;fill:#537f24"
                        id="path10155"
                        d="m 545.98922,701.2581 c 8.17059,2.00098 9.78887,-5.27411 15.3602,-8.81511 0.50681,0.24228 1.04026,1.14542 1.44332,1.55393 0.54105,-0.20722 0.83482,-0.99486 1.42668,-1.03148 5.21781,8.82576 7.50887,4.44113 9.68834,-0.88831 -6.1687,5.6693 -18.68068,-12.73181 -12.4677,-16.65486 5.11541,-1.24067 13.82288,-3.24475 17.69262,-8.68366 -10.16033,9.56332 -25.49642,2.18548 -24.43284,-9.11185 6.58119,1.46988 9.82082,-2.88342 11.47208,-9.27677 -9.25144,13.15236 -20.18204,-0.59286 -15.03258,-11.18339 4.2179,2.75085 10.93214,0.84703 13.58551,-3.37187 -10.18366,5.01369 -15.16304,0.66795 -13.62079,-9.90848 1.88937,1.33166 3.71636,1.10706 6.10918,0.88132 -7.19919,-2.71254 -5.60223,-12.1309 -3.50975,-17.83781 3.01425,1.12301 5.19646,3.10547 8.26915,1.9847 -3.5478,-1.96771 -6.68715,-4.91966 -5.53705,-9.46737 1.63944,-1.327 2.0486,-4.68071 3.75807,-5.62316 3.0024,-1.65433 5.54963,1.51246 7.87865,-1.67484 -2.35482,-4.01614 -6.97857,-6.64858 -10.29449,-9.94639 -2.89181,-2.876 -4.77524,-5.95491 -7.54905,-8.99443 0.88795,8.68084 0.25508,17.32629 -9.98982,9.49148 0.13545,5.2218 7.64485,6.84258 11.90632,7.30411 -1.67395,7.11633 -4.61083,13.87668 -13.81078,10.12446 2.88516,3.20138 7.08813,3.48561 11.13351,3.36038 0.33616,7.2969 -5.54175,14.12707 -12.74406,13.81326 2.92422,1.38544 7.31253,2.42345 10.11277,-0.22981 0.009,0.67477 -0.15988,1.39324 -0.36786,2.08409 0.2431,0.0312 0.40944,-0.0669 0.49622,-0.29222 -1.26009,6.24402 0.25842,14.22344 -8.75975,13.46403 2.18546,1.22667 4.742,1.37524 7.14356,0.57573 1.3286,9.32834 -0.0459,11.27445 -9.39064,8.19552 2.65187,2.34318 7.11003,3.03436 10.69248,3.3391 -1.2009,8.2337 3.48469,19.61213 -9.70127,16.41953 3.23351,2.05936 6.96623,1.48523 10.22022,0.25155 2.66641,4.653 6.1501,9.39879 6.2563,15.02229 -5.02891,2.04179 -12.71544,9.7069 -18.36763,7.92044 4.77178,3.5592 17.01905,-5.68317 20.30639,-3.70257 1.09195,0.65766 4.42742,8.20046 3.86491,9.54162 -2.92438,6.96857 -9.54698,11.89959 -14.29633,9.95182 0.46646,4.15897 0.0838,4.0514 1.26038,6.40762 -0.66037,-2.50166 -0.0833,-2.85967 -0.20447,-4.9926 z"
                        sodipodi:nodetypes="ccccccccccccccccccscccccccccccccccccccccc" />
                    <path
                        inkscape:connector-curvature="0"
                        style="opacity:0.8;fill:#537f24"
                        id="path10159"
                        d="m 739.65938,539.1242 c 5.55875,0.57252 17.78413,11.57723 18.17022,-1.86267 -0.14585,5.10547 1.38317,15.37824 -7.52285,11.96029 0.44317,10.16623 -4.205,13.25296 -10.63616,15.59251 -2.53154,0.92134 -2.41946,6.18853 -4.46594,7.42165 -2.95598,1.78312 -4.54299,8.57243 -7.76107,10.51746 -4.55512,2.75207 -9.25314,10.29839 -14.47291,9.57151 -0.38961,6.92321 -9.85611,6.55572 -15.23334,2.762 1.71453,4.87865 -7.86143,7.42634 -13.35043,7.09836 0.33087,3.13716 -17.10111,11.76192 -20.63153,7.00251 -2.99553,2.78198 -10.25571,6.06997 -14.54255,3.14004 0.78771,4.8499 -11.55856,4.37335 -11.55856,4.37335 -15.97163,7.20649 -13.94842,1.63141 -20.72052,-1.4706 -2.25246,0.75419 -6.896,1.678 -12.28345,-1.40364 -2.46287,-0.74898 -1.78185,-1.68882 -4.54591,-1.63836 -8.36137,1.08479 -23.24878,-3.98047 -20.4026,-13.96812 -3.66255,1.16515 -4.13046,-4.12128 -7.79354,-5.34605 -2.17344,-0.72433 -8.63814,-7.10152 -9.45355,-7.12079 5.00436,0.12063 9.22404,-6.15454 13.43585,-8.13668 -1.95369,2.46752 -4.65191,5.03249 -5.4804,7.83576 2.37487,0.56241 2.13079,2.2495 4.40053,3.34044 1.66011,2.49455 4.48525,5.32906 6.93125,6.09097 1.11438,11.75214 10.86023,7.99526 15.91565,-1.14017 -0.90406,2.69052 -6.87745,10.54435 -6.17664,12.26875 2.35116,5.78964 10.05924,0.59956 12.27554,-1.01411 5.06197,8.92852 10.32568,1.51009 10.86837,-5.51047 0.80735,-10.46938 -7.98902,-11.68613 -16.05275,-13.68868 0.12727,1.39065 -0.31646,3.01431 -0.009,4.42353 -7.11271,-2.43003 -21.781,-18.08102 -20.99371,-21.66047 -0.0141,2.16517 -0.59854,4.34617 -0.74864,6.28268 0.33077,-2.22276 -1.44355,-5.35988 -4.40296,-6.4263 0.2079,-4.09458 -3.5978,-8.81335 -5.72277,-12.60036 2.08262,1.45522 4.12853,3.25479 5.88584,5.08814 -0.42959,-0.93107 -0.52862,-2.07285 -0.86903,-2.99753 2.72246,3.15817 9.87523,8.61683 13.54975,4.81421 -0.29819,1.07112 0.0627,2.55741 -0.32821,3.77218 3.95384,3.75715 7.19878,16.54043 7.40493,11.67163 2.29494,1.58626 17.40411,11.77703 15.38777,2.67089 1.38216,6.22468 13.73275,11.12271 17.82828,10.14161 -0.55732,-1.37217 -0.98217,-6.22836 -2.10593,-7.576 3.89164,4.89271 16.93762,8.37114 13.29265,-1.60331 1.34122,1.11437 2.71733,1.62513 3.39441,3.21649 -0.36187,0.66698 -0.84296,0.76028 -1.29193,1.30398 3.02924,2.02557 7.99584,2.6194 11.89731,2.30848 -3.43698,1.36025 -7.07012,2.06499 -10.8285,0.54371 0.91449,2.01514 1.92331,4.12911 2.91204,6.10022 -3.46553,-7.14327 -8.30487,-3.58326 -14.01591,-2.37019 0.9286,1.68088 1.36472,3.30817 2.67833,4.87195 -3.56229,-3.81593 -4.32824,-1.53148 -8.91985,-2.20984 -2.83721,-0.41877 -4.84883,-4.00072 -8.03524,-5.36157 1.57589,2.78673 6.01664,8.74789 1.27825,9.97385 0.48291,2.45046 0.26137,4.88576 -0.26019,7.48161 2.89623,4.42246 18.89182,8.87654 19.5626,3.56411 2.79975,1.82176 7.6418,-0.5274 9.75907,-2.10699 0.002,-0.95445 0.29043,-1.80239 0.44724,-2.62293 6.73321,3.58568 14.63784,0.87327 16.52958,-5.27748 2.12987,2.55691 15.02686,2.59574 17.38875,-1.00404 2.40364,-3.66276 -3.06709,-13.61604 -6.12856,-15.38107 -3.87968,-3.37416 -9.6449,3.67123 -18.48305,-5.67131 5.26441,3.80463 29.36934,5.22306 21.02887,-5.20802 1.46583,1.99475 2.25853,4.13766 4.33105,5.55018 5.16332,-2.53181 15.98134,-4.31951 13.91161,-12.20551 0.0108,1.92131 0.53377,4.55366 1.1956,6.20466 2.30942,-1.20513 4.14146,3.51017 6.5501,2.34924 -5.56858,3.97764 -12.32416,1.69328 -17.78138,5.57274 1.27383,0.84665 2.37048,2.22004 3.65355,2.91948 -5.90256,-3.62704 -8.62649,-2.84488 -13.99331,0.73223 3.90613,-2.60353 6.70436,8.6201 8.71286,9.99662 3.05388,2.09141 14.87352,1.58923 9.71315,-3.47239 -0.30514,-1.10638 -0.15378,-2.82574 -0.36904,-3.879 5.92119,0.20645 12.55925,11.31414 16.51211,2.78377 0.29852,0.25824 0.60168,0.50958 0.90948,0.75404 0.51235,-2.64246 -0.0545,-5.12763 -1.78038,-7.14846 5.42508,5.86381 10.59406,-0.5492 9.31766,-11.30998 4.01226,11.64082 15.68352,9.14819 16.74078,1.3365 0.44277,-0.18619 0.58451,-7.55469 1.4065,-7.86568 6.64168,-5.17646 23.6772,-17.37755 4.99351,-25.84085 -7.14386,-2.75334 -4.57843,16.49593 -10.64383,19.93993 1.13772,2.11387 1.88169,4.3966 2.05043,6.816 -3.88766,-9.32396 -11.54806,-7.81934 -17.56813,-3.86379 0.54944,1.35185 0.73579,3.35219 1.29846,4.50515 -1.33655,-2.55677 -2.2388,-2.87851 -4.45434,-4.28391 4.19703,-2.08612 19.45453,-5.73041 9.51435,-11.24537 -5.08331,-2.81996 -11.34426,0.23864 -10.18589,5.99847 -3.39226,-6.20852 2.03668,-6.51645 6.49988,-9.00022 4.42822,0.4105 6.48814,4.01615 7.58996,-1.84363 3.40162,-1.5759 9.58518,-10.75039 13.65342,-9.10351 -4.74215,0.83549 -16.10493,11.03351 -13.64132,16.66945"
                        sodipodi:nodetypes="cccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc" />
                    <path
                        inkscape:connector-curvature="0"
                        style="opacity:0.8;fill:#8cc63f"
                        id="path10161"
                        d="m 568.2251,557.52693 c 1.25705,0.73491 3.28347,0.99508 4.63783,1.447 -0.21498,-1.42529 0.30686,-1.38874 0.36339,-2.06551 3.0557,11.23521 19.59834,25.12153 28.11563,27.19445 18.44525,4.48918 49.09911,6.87284 66.78842,-0.17452 24.98404,-9.95356 60.41487,-17.80152 68.72408,-42.58523 1.47866,-4.93585 3.3643,-7.95812 6.43279,-12.12878 0.30708,-0.13145 -1.15435,3.84246 -1.72283,4.57601 -1.05382,2.6039 -1.8089,4.43701 -2.81957,7.37267 0.40135,17.61232 -44.4034,36.61555 -69.69895,44.89755 -17.9366,5.87261 -50.30099,7.45039 -68.97849,0.46065 -8.3695,-3.13214 -17.17599,-10.04639 -21.3986,-14.3165 -4.90994,-4.96519 -4.0924,-8.99611 -9.30656,-14.69477"
                        sodipodi:nodetypes="cccssccccsssc" />
                    <path
                        inkscape:connector-curvature="0"
                        style="opacity:0.8;fill:#8cc63f"
                        id="path10157"
                        d="m 553.77291,580.54411 c 0.37967,9.51278 -3.24011,18.92023 -4.6935,28.23893 -2.72807,17.49709 -3.64409,33.67516 -0.83697,51.2319 1.26617,10.07024 5.74303,24.23222 16.64611,33.98637 4.9207,4.40218 11.42417,8.11399 15.13935,13.90157 4.25861,6.63416 7.43292,16.7859 8.27015,21.75893 0.55806,-0.85608 2.42169,-2.01022 2.29915,-3.03889 -0.70618,-5.92833 -4.7934,-14.58252 -9.30997,-21.64653 -3.24122,-5.06936 -9.29136,-8.70795 -13.8935,-13.43388 -8.96744,-9.20862 -14.08977,-21.7212 -15.72775,-30.61748 -4.42717,-24.0416 -3.80148,-50.62496 7.44964,-72.81151 1.61954,0.37177 3.24459,0.013 4.81941,1.09256 -5.16207,-3.74099 -9.40452,-6.61611 -11.8116,-12.66685 0.45086,2.26594 0.94755,5.14372 1.7022,7.50907"
                        sodipodi:nodetypes="cccsscsssccccc" />
                    <path
                        sodipodi:nodetypes="csccccc"
                        inkscape:connector-curvature="0"
                        id="rect10067"
                        d="m 546.41685,708.13801 c 16.16047,27.34223 28.43225,23.88532 38.45275,17.10337 0.403,-0.27275 0.35748,-4.749 -1.35305,-10.55639 0.84428,0.86572 3.74799,9.39427 3.66219,9.06014 l 0.98008,5.95109 c -9.45888,6.64549 -18.43289,5.04827 -27.25182,0.81449 -8.58298,-5.41051 -12.98588,-13.10107 -14.49015,-22.3727 z"
                        style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:0.8;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#537f24;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;marker:none;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate" />
                    <path
                        sodipodi:nodetypes="cccccc"
                        inkscape:connector-curvature="0"
                        id="rect10086"
                        d="m 597.7097,712.07783 3.92767,-12.29531 c 1.00451,8.41839 -3.46874,20.55418 -10.58762,27.23752 l -4.26921,-12.55146 5.14478,8.09816 z"
                        style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:0.8;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#537f24;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;marker:none;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate" />
                    </g>
                    <path
                    style="display:inline;fill:none;fill-rule:evenodd;stroke:#0000ff;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:1, 1;stroke-dashoffset:0;stroke-opacity:1"
                    d="m 264.79831,696.32243 c -1.42476,-20.4283 -18.55154,-14.902 -24.30132,-10.3909 -4.06426,3.1887 -11.66049,-4.1999 -12.82363,-6.0952"
                    id="path10118"
                    inkscape:connector-curvature="0"
                    sodipodi:nodetypes="csc" />
                    <path
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:0.8;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#0000ff;fill-opacity:1;fill-rule:nonzero;stroke:#0000ff;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;marker:none;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                    d="m 228.49467,682.76943 -1.74305,-4.3703 3.71651,2.4858 z"
                    id="rect11465"
                    inkscape:connector-curvature="0"
                    sodipodi:nodetypes="cccc" />
                </g>
                <g
                    inkscape:groupmode="layer"
                    id="layer4"
                    inkscape:label="Salivary glands"
                    style="display:inline"
                    transform="translate(11.050001,-11.312195)"
                    sodipodi:insensitive="true">
                    <g
                    style="display:inline;overflow:visible"
                    id="g11213"
                    transform="translate(-116.296,-71.876339)">
                    <path
                        sodipodi:nodetypes="cccccsc"
                        inkscape:connector-curvature="0"
                        style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:0.50700001;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#ffc20e;fill-opacity:1;fill-rule:nonzero;stroke:#fff;stroke-width:0.30015075;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                        id="path137"
                        d="m 382.91905,248.27749 c -1.26934,2.73575 -2.87055,3.68126 -2.3583,6.99059 0.75725,4.89391 7.16733,5.22111 9.96935,5.59622 3.82565,0.51183 9.76629,1.01663 12.2385,-4.00113 2.70006,-5.48169 1.43141,-11.48454 -3.52584,-12.18685 -4.05266,-0.57375 -7.17076,0.82981 -11.19551,0.78909 -1.64589,-0.0166 -3.28318,0.2323 -5.1282,2.81208 z" />
                    <path
                        inkscape:connector-curvature="0"
                        style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:0.5;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#faa41a;fill-opacity:1;fill-rule:nonzero;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                        id="path217"
                        d="m 386.46971,254.78898 c -0.23556,-0.3342 -0.29982,-0.96756 -0.12422,-2.02042 -0.44714,-0.0818 -2.40022,-0.0502 -2.64523,0.48844 0.46174,-1.0178 -1.30591,-2.48823 -1.15774,-3.62408 0.0764,-0.58544 -1.48386,2.22337 -1.72371,2.90465 -0.26984,0.76772 -0.12329,3.08612 0.11401,3.98474 0.58592,2.2144 2.84456,2.48982 4.3385,3.02385 3.46418,1.24101 9.55683,2.26769 13.0304,0.78363 2.84814,-0.54258 4.72234,-2.31749 5.1511,-6.47994 0.63218,-3.20652 -0.0313,-9.10885 -3.17686,-8.19038 1.02023,1.06923 0.89935,2.82634 -0.26393,4.22043 1.56504,0.58894 1.27551,5.1907 -0.60991,3.61082 -0.67674,1.34968 -0.58507,0.81215 -1.28407,1.42914 -0.0943,0.37745 -0.38291,1.24335 -0.55938,1.57054 -2.15268,1.00379 -5.13887,-2.04029 -6.88551,-1.07858 0.23215,-0.12853 0.75126,-0.77825 1.23182,-0.94887 1.12218,1.18843 1.91026,-0.72449 1.99765,-2.03795 -1.50681,-1.02248 -6.33387,3.92166 -7.43289,2.36398 z"
                        sodipodi:nodetypes="cccccccccccccccccc" />
                    <path
                        d="m 381.19259,250.49164 c -5.9194,-2.52639 -8.52159,-5.63677 -14.09606,-9.75552 -2.51816,-1.86059 -6.1249,-5.81365 -6.09324,-6.11535 -0.28,0.12627 -0.56932,0.32824 -1.0816,0.33461 1.37558,1.68296 2.22748,3.18811 4.43973,4.88138 l 10.14153,7.76241 c 1.37659,1.17207 4.94501,3.29737 6.18399,3.94754"
                        id="path11042"
                        style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:0.50700001;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#ffc20e;fill-opacity:1;fill-rule:nonzero;stroke:#fff;stroke-width:0.24911505;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                        inkscape:connector-curvature="0"
                        sodipodi:nodetypes="csccscc" />
                    </g>
                    <g
                    style="display:inline;overflow:visible"
                    id="g11205"
                    transform="matrix(0.99970303,0,0,1.1233936,-98.24544,-130.89631)">
                    <path
                        sodipodi:nodetypes="csccsc"
                        d="m 382.77162,235.18555 c -6.36636,-0.14271 -13.89989,1.37653 -19.35755,1.97969 -3.66361,0.40489 -7.08881,1.07358 -12.06921,2.43377 0.628,0.321 2.17358,-0.58304 2.20585,2.13689 4.25733,-1.23829 3.81362,-1.66028 12.88667,-2.99193 4.03595,-0.59235 12.81807,-2.18597 16.57507,-1.53481"
                        id="path213"
                        style="opacity:0.50700001;fill:#ffc20e;stroke:#fff;stroke-width:0.30000001;stroke-miterlimit:4;stroke-dasharray:none"
                        inkscape:connector-curvature="0" />
                    <path
                        sodipodi:nodetypes="ccccccccccccccccccccccccccccccccccccccccccccccccccccccc"
                        d="m 393.27138,248.10997 c -0.688,0.33 -1.711,0.754 -2.57,0.889 0.156,0.134 0.591,0.546 0.801,0.766 -2.279,0.014 -3.218,2.558 -0.929,3.336 0.015,0.341 -0.327,0.506 -0.151,0.861 1.279,0.625 2.496,0.224 3.502,-0.814 -0.015,0.117 0.303,0.972 0.339,1.132 -1.489,0.367 -1.576,0.348 -0.901,1.784 -1.766,0.657 -3.137,2.643 -1.783,4.242 0.338,-0.387 1.207,-0.796 1.637,-1.34 -0.076,0.646 0.154,0.944 0.174,1.267 2.29,-1.775 3.23,-4.458 4.468,-6.831 -0.288,-0.278 -0.556,-0.117 -0.784,-0.263 0.836,-0.614 0.613,-1.06 1.098,-1.837 -0.646,-0.34 -0.961,-0.525 -1.689,-0.622 -0.02,-0.032 0.453,-0.568 0.418,-0.806 -0.348,-0.153 -0.738,0.056 -1.017,-0.262 0.472,-1.205 1.383,-2.081 2.513,-2.744 0.072,-0.053 -0.81,0.016 -0.789,0.021 0.801,-0.243 1.443,-0.752 2.063,-1.91 1.172,1.297 2.395,1.323 2.394,-0.751 1.607,0.192 0.506,0.155 1.889,-0.911 1.371,-0.111 1.701,-0.648 1.148,-2.165 -0.307,-0.098 -0.533,0.182 -0.653,0.159 0.002,0.002 0.401,-0.618 0.308,-0.813 -0.436,-0.127 -0.896,-0.144 -1.362,-0.254 4.206,0.991 2.534,-5.916 2.06,-7.173 -0.557,-1.478 -0.64789,-1.38154 -2.19989,-2.53154 -1.328,-0.983 -3.66626,-4.71935 -5.18226,-4.86035 4.88818,0.60766 10.31522,6.87053 10.56957,11.33666 0.58295,5.74038 -0.74754,9.63097 -2.75422,13.15766 -0.157,-0.29 -0.8262,-1.35843 -1.0092,-1.66543 -0.308,-0.175 -0.482,0.394 -0.633,0.309 -0.113,-0.097 -0.268,-0.617 -0.395,-0.783 -0.878,0.691 -1.09,0.48 -1.273,1.5 -1.208,0.587 -0.909,0.733 -1.305,1.74 0.887,-0.107 1.952,0.276 2.837,0.031 -0.839,0.534 1.07984,1.37623 0.63384,1.91723 -0.13319,3.41843 -7.15679,8.71605 -8.83679,10.02805 -2.793,2.22291 -12.36805,10.82862 -12.65805,0.70072 0.183,0.359 0.879,0.966 1.188,1.359 -0.416,-0.529 3.262,-0.847 3.415,-0.847 -0.097,-1.633 -1.434,-3.855 -3.353,-2.907 0.241,-2.049 1.88359,-3.06162 -1.15641,-4.23662 0.0375,-1.44312 0.37088,-6.07713 0.30944,-8.50248 -0.33571,-5.3207 -1.14672,-13.78499 -0.78426,-15.17021 1.989,2.421 1.00423,3.16731 2.99823,1.83831 -0.188,-0.034 -0.646,0.001 -0.788,-0.081 0.786,0.037 1.814,0.467 2.575,0.682 -0.849,0.893 -1.171,2.425 -0.246,3.741 -0.195,-0.25 -0.639,-0.63 -0.786,-0.806 -0.974,1.638 -0.333,3.463 1.395,4.263 0.008,-0.013 0.55,-0.522 0.607,-0.569 -2.251,1.809 2.127,2.758 3.146,2.458 0.165,1.146 0.684,2.132 1.502,2.937 z"
                        id="path215"
                        style="opacity:0.5;fill:#faa41a"
                        inkscape:connector-curvature="0" />
                    <path
                        inkscape:connector-curvature="0"
                        style="opacity:0.50700001;fill:#ffc20e;stroke:#fff;stroke-width:0.30000001;stroke-miterlimit:4;stroke-dasharray:none"
                        id="path11056"
                        d="m 383.29838,255.12953 c -0.295,3.39 -2.319,11.651 2.256,13.259 3.273,1.15 7.734,-2.624 10.002,-4.555 2.973,-2.533 6.379,-4.806 8.369,-8.264 1.754,-3.049 2.42,-6.211 3.792,-9.357 2.251,-5.161 2.02256,-12.9792 -4.09644,-17.8332 -3.85,-3.056 -6.01556,-4.0178 -11.03156,-3.3498 -3.002,0.399 -6.291,1.496 -8.697,3.381 -0.79689,0.62491 -1.19105,4.66333 -1.12076,6.14929 0.30497,6.98031 1.01993,14.29597 0.52676,20.56971 z"
                        sodipodi:nodetypes="cccccccccc" />
                    </g>
                    <g
                    style="display:inline;overflow:visible"
                    id="g11226"
                    transform="translate(-127.14205,-91.065489)">
                    <path
                        sodipodi:nodetypes="cccsscc"
                        inkscape:connector-curvature="0"
                        style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:0.50700001;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#ffc20e;fill-opacity:1;fill-rule:nonzero;stroke:#fff;stroke-width:0.27313945;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                        id="path154"
                        d="m 369.17629,256.38271 c 0.17785,-0.32592 3.18464,-1.67903 3.98964,-1.63315 3.4082,-0.0436 6.2232,1.74362 9.53405,2.35276 2.89448,0.51049 9.9841,-0.24963 12.81861,1.3217 3.5529,1.96958 -0.48663,6.09413 -1.07882,6.82791 -1.83474,2.27342 -25.43655,2.75492 -26.38372,1.88281 -1.04507,-0.47772 -1.18503,-8.74317 1.12024,-10.75203 z" />
                    <path
                        sodipodi:nodetypes="ccccscccscccccc"
                        inkscape:connector-curvature="0"
                        style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:0.5;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#faa41a;fill-opacity:1;fill-rule:nonzero;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                        id="path219"
                        d="m 369.81879,265.74484 c 0.60317,0.35049 3.71409,0.78808 4.98372,0.61695 0.37469,-0.0505 2.125,-3.03493 1.21434,-0.0729 1.42039,-0.0829 3.12212,0.18009 4.8688,0.12718 -0.5156,-0.63434 -0.56597,-2.16266 -0.31478,-1.67125 0.42207,0.82569 1.1978,1.17763 1.68949,1.58612 1.13375,0.75189 3.54611,-0.71557 3.92283,-1.67089 0.18335,-0.0154 -0.60639,1.38854 -0.42377,1.37337 4.8343,-0.69886 9.36106,-1.77173 11.1059,-4.28995 0.40044,-0.57793 -1.92108,3.26712 -2.42793,3.6141 -1.61036,1.81042 -24.30092,3.37902 -26.42131,2.00245 -0.52568,-0.99161 -0.95913,-1.41571 -1.06258,-1.793 -0.17903,-0.66355 0.53911,-6.21958 0.90593,-6.33594 -0.37823,5.04636 0.84877,5.61784 1.95936,6.5138 z" />
                    <path
                        sodipodi:nodetypes="cccc"
                        inkscape:connector-curvature="0"
                        id="rect11121"
                        d="m 373.57415,254.6994 1.53751,-4.49327 0.81818,0.18624 -1.58455,4.42058"
                        style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:0.50700001;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#ffc20e;fill-opacity:1;fill-rule:nonzero;stroke:#fff;stroke-width:0.27313945;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate" />
                    <path
                        style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:0.50700001;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#ffc20e;fill-opacity:1;fill-rule:nonzero;stroke:#fff;stroke-width:0.27313945;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                        d="m 377.00713,255.50772 1.39421,-4.29117 0.81818,0.18624 -1.38066,4.22739"
                        id="use11138"
                        inkscape:connector-curvature="0"
                        sodipodi:nodetypes="cccc" />
                    <path
                        style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:0.50700001;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#ffc20e;fill-opacity:1;fill-rule:nonzero;stroke:#fff;stroke-width:0.27313945;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                        d="m 381.32377,256.74374 0.79569,-4.45368 0.81818,0.18624 -0.84273,4.38099"
                        id="use11140"
                        inkscape:connector-curvature="0"
                        sodipodi:nodetypes="cccc" />
                    <path
                        style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:0.50700001;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#ffc20e;fill-opacity:1;fill-rule:nonzero;stroke:#fff;stroke-width:0.27313945;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                        d="m 385.00835,257.24263 0.35676,-4.3695 0.81818,0.18624 -0.40382,4.29681"
                        id="use11142"
                        inkscape:connector-curvature="0"
                        sodipodi:nodetypes="cccc" />
                    <path
                        style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:0.50700001;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#ffc20e;fill-opacity:1;fill-rule:nonzero;stroke:#fff;stroke-width:0.27313945;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                        d="m 388.72426,257.22006 0.28147,-4.23179 0.81818,0.18624 -0.19259,4.03031"
                        id="use11144"
                        inkscape:connector-curvature="0"
                        sodipodi:nodetypes="cccc" />
                    <path
                        style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:0.50700001;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#ffc20e;fill-opacity:1;fill-rule:nonzero;stroke:#fff;stroke-width:0.27313945;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                        d="m 392.5315,257.56488 0.10707,-4.33187 0.81818,0.18624 0.0203,4.35925"
                        id="path11164"
                        inkscape:connector-curvature="0"
                        sodipodi:nodetypes="cccc" />
                    </g>
                </g>
                <g
                    inkscape:groupmode="layer"
                    id="layer5"
                    inkscape:label="Patterns"
                    style="display:none"
                    transform="translate(11.050001,-11.312195)"
                    sodipodi:insensitive="true">
                    <path
                    sodipodi:nodetypes="cccccc"
                    inkscape:connector-curvature="0"
                    id="rect4311"
                    d="m 428.01422,388.29051 c 0.70537,0.0339 1.06251,-1.41621 1.92291,-1.43 0.80656,0.019 0.8803,1.40985 1.86918,1.43 l 0.002,4.20687 -3.78357,0 z"
                    style="color:#000000;display:inline;overflow:visible;visibility:visible;fill:#339967;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0;marker:none;enable-background:accumulate" />
                    <path
                    sodipodi:nodetypes="cccccc"
                    inkscape:connector-curvature="0"
                    id="rect4311-7"
                    d="m 428.01422,397.97449 c 0.70537,-0.0338 1.06251,1.4162 1.92291,1.43 0.80656,-0.019 0.8803,-1.40985 1.86918,-1.43 l 0.002,-4.20687 -3.78357,0 z"
                    style="color:#000000;display:inline;overflow:visible;visibility:visible;fill:#339967;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0;marker:none;enable-background:accumulate" />
                    <path
                    sodipodi:nodetypes="ccccccccccccc"
                    inkscape:connector-curvature="0"
                    id="rect4451"
                    d="m 427.38769,452.87099 1.21611,0.0101 2.0758,13.50428 0.35641,-13.48431 1.21611,0.0101 -0.5393,16.39858 0.49631,9.9181 -1.20536,0.003 -1.63521,-13.68487 -0.77551,13.68922 -1.20536,0.003 0.68776,-16.86687 z"
                    style="color:#000000;display:inline;overflow:visible;visibility:visible;fill:#d35f5f;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:10;marker:none;enable-background:accumulate" />
                </g>
                <g
                    inkscape:groupmode="layer"
                    id="layer3"
                    inkscape:label="Arrows"
                    style="display:inline"
                    transform="translate(11.050001,-11.312195)">
                    <path
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;marker-end:url(#marker10718);color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                    d="m 194.21257,273.47511 c 21.00864,0.18503 47.60072,-46.95225 77.96142,-89.88399"
                    id="polyline237"
                    inkscape:connector-curvature="0"
                    sodipodi:nodetypes="cc" />
                    <path
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;marker-end:url(#marker10770);color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                    d="m 401.78721,196.30524 c -41.91047,3.50698 -60.21484,94.30819 -95.9493,96.10987"
                    id="polyline247"
                    inkscape:connector-curvature="0"
                    sodipodi:nodetypes="cc" />
                    <path
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;marker-end:url(#marker10809);color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                    d="m 450.72875,445.09427 c -32.4037,-0.39618 -53.42756,11.75935 -75.74594,19.99888"
                    id="polyline283"
                    inkscape:connector-curvature="0"
                    sodipodi:nodetypes="cc" />
                    <path
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;marker-end:url(#marker10822);color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                    d="m 161.7666,431.95608 c 41.54976,3.33281 49.2219,0.56604 76.00279,24.76918"
                    id="polyline285"
                    inkscape:connector-curvature="0"
                    sodipodi:nodetypes="cc" />
                    <path
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;marker-end:url(#marker10835);color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                    d="m 159.97253,471.05436 c 34.73779,2.92242 50.89262,9.33303 83.24805,24.16723"
                    id="polyline287"
                    inkscape:connector-curvature="0"
                    sodipodi:nodetypes="cc" />
                    <path
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;marker-end:url(#marker10796);color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                    d="m 465.15777,506.34065 c -66.4929,2.21283 -138.67861,34.39264 -171.74881,47.89873"
                    id="polyline289"
                    inkscape:connector-curvature="0"
                    sodipodi:nodetypes="cc" />
                    <path
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;marker-end:url(#marker33455);color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                    d="m 162.87241,604.56036 c 41.42983,-2.92726 85.56805,-32.24419 90.44314,-52.1157"
                    id="polyline291"
                    inkscape:connector-curvature="0"
                    sodipodi:nodetypes="cc" />
                    <path
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;marker-end:url(#marker20298);color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                    d="m 219.3311,745.02044 39.20554,-5.72495"
                    id="line293"
                    inkscape:connector-curvature="0"
                    sodipodi:nodetypes="cc" />
                    <path
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;marker-end:url(#marker10913);color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                    d="M 453.64535,671.76836 C 367.54914,671.99224 319.3225,697.41911 247.35289,706.6187"
                    id="line295"
                    inkscape:connector-curvature="0"
                    sodipodi:nodetypes="cc" />
                    <path
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;marker-end:url(#marker10952);color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                    d="m 159.88917,654.98984 c 42.95022,32.57752 69.56239,41.66437 121.45255,40.87419"
                    id="line305"
                    inkscape:connector-curvature="0"
                    sodipodi:nodetypes="cc" />
                    <path
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;marker-end:url(#marker10874);color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                    d="M 456.04547,601.92339 301.01548,595.75733"
                    id="line307"
                    inkscape:connector-curvature="0"
                    sodipodi:nodetypes="cc" 
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;marker-end:url(#marker10887);color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                    d="M 454.48235,637.58273 222.56087,670.92651"
                    id="line309"
                    inkscape:connector-curvature="0"
                    sodipodi:nodetypes="cc" />
                    <path
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;marker-end:url(#marker10900);color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                    d="M 452.4085,703.4572 C 425,702.36219 416.2958,707.31617 404.72789,690.30579"
                    id="line311"
                    inkscape:connector-curvature="0"
                    sodipodi:nodetypes="cc" />
                    <path
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;marker-end:url(#marker10783);color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                    d="m 449.80975,472.53852 c -72.75269,4.65199 -125.59285,14.49997 -157.65224,65.38685"
                    id="polyline321"
                    inkscape:connector-curvature="0"
                    sodipodi:nodetypes="cc" />
                    <path
                    sodipodi:nodetypes="cc"
                    inkscape:connector-curvature="0"
                    id="path11294"
                    d="m 160.24068,513.69699 c 52.18435,14.07956 74.90747,11.9115 112.10041,39.79708"
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;marker-end:url(#marker11296);color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate" />
                    <path
                    sodipodi:nodetypes="cc"
                    inkscape:connector-curvature="0"
                    id="path12806"
                    d="m 161.32001,630.61115 c 44.07004,0.2447 174.21563,-51.80579 179.09072,-71.6773"
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;marker-end:url(#marker33603);color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate" />
                    <path
                    sodipodi:nodetypes="cc"
                    inkscape:connector-curvature="0"
                    id="path16148"
                    d="M 451.18428,783.50925 C 397.18804,780.43907 347.13127,777.31617 308.1338,762.97095"
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;marker-end:url(#marker16152);color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate" />
                    <path
                    sodipodi:nodetypes="cc"
                    inkscape:connector-curvature="0"
                    id="path19156"
                    d="m 163.89649,128.87443 c 37.39931,8.44174 77.39931,18.44174 99.34146,22.18402"
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;marker-end:url(#marker19070);color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate" />
                    <foreignObject
                        id="text225"
                        style="color:#ffffff;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:17.5px;-inkscape-font-specification:'Liberation Sans, Normal';text-indent:0;text-align:end;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000000;letter-spacing:normal;word-spacing:normal;text-transform:none;direction:ltr;block-progression:tb;writing-mode:lr-tb;baseline-shift:baseline;text-anchor:end;white-space:normal;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#fff;fill-opacity:1;fill-rule:nonzero;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                        x="-19.18042"
                        y="164.53131">
                        <div class="mainquesdiv" id="md22q1" style="height: 150px !important;">
                            <div class="contentques">
                                <div class="pointer"></div>
                                <header>Zunge</header>
                                <p>Was zählt nicht als Geschmackssinn?</p><!--32-->
                                <input id="schrf chbx" style="margin-right: 3px;" name="scharf"type="checkbox" placeholder="Scharf"><!-- c -->
                                <label for="scharf" style="margin-right: 10px;">scharf</label>
                                <input id="sar chbx" style="margin-right: 3px;" name="sauer" type="checkbox" placeholder="Sauer">
                                <label for="sauer">sauer</label>
                                <br>
                                <input id="slzg chbx" style="margin-right: 3px;" name="salzig" type="checkbox" placeholder="Salzig">
                                <label for="salzig" style="margin-right: 10px;">salzig</label>
                                <input id="suss chbx" style="margin-right: 3px;" name="suess" type="checkbox" placeholder="Süß">
                                <label for="suess">süß</label>
                                <br>
                                <input style="margin-top: 15px;" type="submit" value="Schicken">
                            </div>
                        </div>
                    </foreignObject>
                    <path
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;marker-end:url(#marker20714);color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                    d="m 163.06218,153.48661 c 38.23362,-1.17044 54.48509,0.0752 69.72341,1.7434"
                    id="path20712"
                    inkscape:connector-curvature="0"
                    sodipodi:nodetypes="cc" />
                    <foreignObject
                        id="text226"
                        style="overflow: visible;"
                        x="-355.18042"
                        y="-110.53131">
                            <?php 
                                if(isset($_COOKIE["_gafg1"])){
                                    if(isset($_COOKIE["_gafigch"])){
                                        echo '<svg class="figuresel completedzm" style="opacity:1; height:50px !important;width:initial !important; color: #fff;cursor:pointer;opacity:0;z-index:1000000;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50"><path d="M 25 0 C 22.792969 0 21 1.792969 21 4 C 21 4.613281 21.160156 5.199219 21.40625 5.71875 C 21.296875 5.808594 21.183594 5.902344 21.0625 6.03125 C 18.992188 8.082031 15 12.535156 15 16.40625 C 15 16.855469 15.046875 17.289063 15.09375 17.71875 C 15.105469 17.804688 15.113281 17.882813 15.125 17.96875 C 15.402344 20.007813 16.214844 21.804688 17.59375 23.3125 C 17.214844 23.789063 17 24.363281 17 25 C 17 26.699219 18.601563 28 20.5 28 L 29.5 28 C 31.398438 28 33 26.699219 33 25 C 33 24.382813 32.796875 23.8125 32.4375 23.34375 C 32.472656 23.316406 32.5 23.3125 32.53125 23.28125 C 33.804688 21.90625 34.601563 20.097656 34.875 18.0625 C 34.886719 17.980469 34.898438 17.894531 34.90625 17.8125 C 34.957031 17.386719 35 16.941406 35 16.5 C 35 12.953125 31.757813 8.890625 28.9375 6.03125 C 28.8125 5.90625 28.707031 5.800781 28.59375 5.71875 C 28.847656 5.195313 29 4.621094 29 4 C 29 1.792969 27.207031 0 25 0 Z M 25 2 C 26.101563 2 27 2.898438 27 4 C 27 5.101563 26.101563 6 25 6 C 23.898438 6 23 5.101563 23 4 C 23 2.898438 23.898438 2 25 2 Z M 18.125 29.5 C 17.34375 30.644531 16.476563 31.449219 15.6875 32.1875 C 15.0625 32.769531 14.460938 33.347656 14.03125 34 C 13.648438 34.574219 13.40625 35.21875 13.40625 36 L 12.5 36 C 10.601563 36 9 37.300781 9 39 C 9 40.699219 10.601563 42 12.5 42 L 37.5 42 C 39.398438 42 41 40.699219 41 39 C 41 37.300781 39.398438 36 37.5 36 L 36.59375 36 C 36.59375 35.214844 36.351563 34.574219 35.96875 34 C 35.53125 33.34375 34.914063 32.773438 34.28125 32.1875 C 33.484375 31.453125 32.621094 30.652344 31.84375 29.53125 C 31.128906 29.835938 30.339844 30 29.5 30 L 20.5 30 C 19.644531 30 18.847656 29.816406 18.125 29.5 Z M 9.90625 43.40625 C 8.527344 45.117188 7.558594 47.0625 8.125 48.53125 C 8.335938 49.082031 8.941406 50 10.6875 50 L 39.3125 50 C 40.996094 50 41.601563 49.097656 41.8125 48.5625 C 42.386719 47.109375 41.421875 45.136719 40.0625 43.40625 C 39.292969 43.777344 38.429688 44 37.5 44 L 12.5 44 C 11.558594 44 10.679688 43.789063 9.90625 43.40625 Z"></path></svg>';
                                    }else{
                                        echo '<svg class="figuresel" style="opacity:0; height:50px !important;width:initial !important; color: #fff;cursor:pointer;opacity:0;z-index:1000000;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50"><path d="M 25 0 C 22.792969 0 21 1.792969 21 4 C 21 4.613281 21.160156 5.199219 21.40625 5.71875 C 21.296875 5.808594 21.183594 5.902344 21.0625 6.03125 C 18.992188 8.082031 15 12.535156 15 16.40625 C 15 16.855469 15.046875 17.289063 15.09375 17.71875 C 15.105469 17.804688 15.113281 17.882813 15.125 17.96875 C 15.402344 20.007813 16.214844 21.804688 17.59375 23.3125 C 17.214844 23.789063 17 24.363281 17 25 C 17 26.699219 18.601563 28 20.5 28 L 29.5 28 C 31.398438 28 33 26.699219 33 25 C 33 24.382813 32.796875 23.8125 32.4375 23.34375 C 32.472656 23.316406 32.5 23.3125 32.53125 23.28125 C 33.804688 21.90625 34.601563 20.097656 34.875 18.0625 C 34.886719 17.980469 34.898438 17.894531 34.90625 17.8125 C 34.957031 17.386719 35 16.941406 35 16.5 C 35 12.953125 31.757813 8.890625 28.9375 6.03125 C 28.8125 5.90625 28.707031 5.800781 28.59375 5.71875 C 28.847656 5.195313 29 4.621094 29 4 C 29 1.792969 27.207031 0 25 0 Z M 25 2 C 26.101563 2 27 2.898438 27 4 C 27 5.101563 26.101563 6 25 6 C 23.898438 6 23 5.101563 23 4 C 23 2.898438 23.898438 2 25 2 Z M 18.125 29.5 C 17.34375 30.644531 16.476563 31.449219 15.6875 32.1875 C 15.0625 32.769531 14.460938 33.347656 14.03125 34 C 13.648438 34.574219 13.40625 35.21875 13.40625 36 L 12.5 36 C 10.601563 36 9 37.300781 9 39 C 9 40.699219 10.601563 42 12.5 42 L 37.5 42 C 39.398438 42 41 40.699219 41 39 C 41 37.300781 39.398438 36 37.5 36 L 36.59375 36 C 36.59375 35.214844 36.351563 34.574219 35.96875 34 C 35.53125 33.34375 34.914063 32.773438 34.28125 32.1875 C 33.484375 31.453125 32.621094 30.652344 31.84375 29.53125 C 31.128906 29.835938 30.339844 30 29.5 30 L 20.5 30 C 19.644531 30 18.847656 29.816406 18.125 29.5 Z M 9.90625 43.40625 C 8.527344 45.117188 7.558594 47.0625 8.125 48.53125 C 8.335938 49.082031 8.941406 50 10.6875 50 L 39.3125 50 C 40.996094 50 41.601563 49.097656 41.8125 48.5625 C 42.386719 47.109375 41.421875 45.136719 40.0625 43.40625 C 39.292969 43.777344 38.429688 44 37.5 44 L 12.5 44 C 11.558594 44 10.679688 43.789063 9.90625 43.40625 Z"></path></svg>';
                                    }
                                }else if(isset($_COOKIE["_gafg2"])){
                                    if(isset($_COOKIE["_gafigch"])){
                                        echo '<svg class="figuresel completedzm" style="opacity:1; height:50px !important;width:initial !important; color: #fff;cursor:pointer;opacity:0;z-index:1000000;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50"><path d="M 25 2 C 21.699219 2 19 4.699219 19 8 C 19 11.300781 21.699219 14 25 14 C 28.300781 14 31 11.300781 31 8 C 31 4.699219 28.300781 2 25 2 Z M 19.609375 13.890625 C 12.875 16.15625 8 22.523438 8 30 C 8 31.652344 9.347656 33 11 33 C 12.652344 33 14 31.652344 14 30 C 14 28.773438 14.199219 27.574219 14.589844 26.4375 C 15.015625 28.097656 15.835938 29.636719 17.003906 30.9375 L 17.003906 44.5 C 17.003906 46.429688 18.574219 48 20.503906 48 C 22.4375 48 24.003906 46.429688 24.003906 44.5 L 24.003906 33.453125 C 24.667969 33.515625 25.335938 33.515625 26 33.453125 L 26 44.5 C 26 46.429688 27.566406 48 29.5 48 C 31.429688 48 33 46.429688 33 44.5 L 33 30.925781 C 34.164063 29.632813 34.984375 28.09375 35.410156 26.4375 C 35.800781 27.574219 36 28.773438 36 30 C 36 31.683594 37.316406 33 38.996094 33 C 40.617188 33 41.945313 31.703125 41.996094 30.09375 C 42 30.0625 42 30.03125 42 30 C 42 22.523438 37.125 16.15625 30.390625 13.890625 C 28.96875 15.195313 27.078125 16 25 16 C 22.921875 16 21.03125 15.195313 19.609375 13.890625 Z"></path></svg>';
                                    }else{
                                        echo '<svg class="figuresel" style="opacity:0; height:50px !important;width:initial !important; color: #fff;cursor:pointer;opacity:0;z-index:1000000;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50"><path d="M 25 2 C 21.699219 2 19 4.699219 19 8 C 19 11.300781 21.699219 14 25 14 C 28.300781 14 31 11.300781 31 8 C 31 4.699219 28.300781 2 25 2 Z M 19.609375 13.890625 C 12.875 16.15625 8 22.523438 8 30 C 8 31.652344 9.347656 33 11 33 C 12.652344 33 14 31.652344 14 30 C 14 28.773438 14.199219 27.574219 14.589844 26.4375 C 15.015625 28.097656 15.835938 29.636719 17.003906 30.9375 L 17.003906 44.5 C 17.003906 46.429688 18.574219 48 20.503906 48 C 22.4375 48 24.003906 46.429688 24.003906 44.5 L 24.003906 33.453125 C 24.667969 33.515625 25.335938 33.515625 26 33.453125 L 26 44.5 C 26 46.429688 27.566406 48 29.5 48 C 31.429688 48 33 46.429688 33 44.5 L 33 30.925781 C 34.164063 29.632813 34.984375 28.09375 35.410156 26.4375 C 35.800781 27.574219 36 28.773438 36 30 C 36 31.683594 37.316406 33 38.996094 33 C 40.617188 33 41.945313 31.703125 41.996094 30.09375 C 42 30.0625 42 30.03125 42 30 C 42 22.523438 37.125 16.15625 30.390625 13.890625 C 28.96875 15.195313 27.078125 16 25 16 C 22.921875 16 21.03125 15.195313 19.609375 13.890625 Z"></path></svg>';
                                    }
                                }else if(isset($_COOKIE["_gafg3"])){
                                    if(isset($_COOKIE["_gafigch"])){
                                        echo '<svg class="figuresel completedzm" style="opacity:1; height:50px !important;width:initial !important; color: #fff;cursor:pointer;opacity:0;z-index:1000000;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50"><path d="M 17 3 C 15.894531 3 15 3.894531 15 5 L 15 8 L 35 8 L 35 5 C 35 3.894531 34.105469 3 33 3 Z M 13 10 C 9.132813 10 6 13.132813 6 17 L 6 36 C 6 39.867188 9.132813 43 13 43 L 37 43 C 40.867188 43 44 39.867188 44 36 L 44 17 C 44 13.132813 40.867188 10 37 10 Z M 19 22 C 20.105469 22 21 22.894531 21 24 C 21 25.105469 20.105469 26 19 26 C 17.894531 26 17 25.105469 17 24 C 17 22.894531 17.894531 22 19 22 Z M 31 22 C 32.105469 22 33 22.894531 33 24 C 33 25.105469 32.105469 26 31 26 C 29.894531 26 29 25.105469 29 24 C 29 22.894531 29.894531 22 31 22 Z M 19.21875 31 C 19.472656 30.972656 19.753906 31.046875 19.96875 31.21875 C 21.40625 32.382813 23.144531 33 25 33 C 26.851563 33 28.59375 32.382813 30.03125 31.21875 C 30.460938 30.871094 31.089844 30.945313 31.4375 31.375 C 31.785156 31.804688 31.710938 32.433594 31.28125 32.78125 C 29.511719 34.214844 27.28125 35 25 35 C 22.714844 35 20.492188 34.21875 18.71875 32.78125 C 18.289063 32.433594 18.214844 31.804688 18.5625 31.375 C 18.738281 31.160156 18.964844 31.027344 19.21875 31 Z M 13 45 L 13 47 L 37 47 L 37 45 Z"></path></svg>';
                                    }else{
                                        echo '<svg class="figuresel" style="opacity:0; height:50px !important;width:initial !important; color: #fff;cursor:pointer;opacity:0;z-index:1000000;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50"><path d="M 17 3 C 15.894531 3 15 3.894531 15 5 L 15 8 L 35 8 L 35 5 C 35 3.894531 34.105469 3 33 3 Z M 13 10 C 9.132813 10 6 13.132813 6 17 L 6 36 C 6 39.867188 9.132813 43 13 43 L 37 43 C 40.867188 43 44 39.867188 44 36 L 44 17 C 44 13.132813 40.867188 10 37 10 Z M 19 22 C 20.105469 22 21 22.894531 21 24 C 21 25.105469 20.105469 26 19 26 C 17.894531 26 17 25.105469 17 24 C 17 22.894531 17.894531 22 19 22 Z M 31 22 C 32.105469 22 33 22.894531 33 24 C 33 25.105469 32.105469 26 31 26 C 29.894531 26 29 25.105469 29 24 C 29 22.894531 29.894531 22 31 22 Z M 19.21875 31 C 19.472656 30.972656 19.753906 31.046875 19.96875 31.21875 C 21.40625 32.382813 23.144531 33 25 33 C 26.851563 33 28.59375 32.382813 30.03125 31.21875 C 30.460938 30.871094 31.089844 30.945313 31.4375 31.375 C 31.785156 31.804688 31.710938 32.433594 31.28125 32.78125 C 29.511719 34.214844 27.28125 35 25 35 C 22.714844 35 20.492188 34.21875 18.71875 32.78125 C 18.289063 32.433594 18.214844 31.804688 18.5625 31.375 C 18.738281 31.160156 18.964844 31.027344 19.21875 31 Z M 13 45 L 13 47 L 37 47 L 37 45 Z"></path></svg>';
                                    }
                                }else{
                                    if(isset($_COOKIE["_gafigch"])){
                                        echo "<p style='opacity:0;height:20px !important;width:initial !important;color: #f56353;cursor:pointer;opacity:0;font-size: 10px;z-index:1000000;' class='figuresel completedzm'> Figur_Error_404 <br> Cookies löschen, um fortzufahren! </p>";
                                    }
                                    else{
                                        echo "<p style='opacity:1;height:20px !important;width:initial !important;color: #f56353;cursor:pointer;opacity:0;font-size: 10px;z-index:1000000;' class='figuresel completedzm'> Figur_Error_404 <br> Cookies löschen, um fortzufahren! </p>";
                                    }
                                }
                            ?>
                    </foreignObject>
                    <foreignObject
                        id="text225"
                        style="color:#ffffff;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:17.5px;-inkscape-font-specification:'Liberation Sans, Normal';text-indent:0;text-align:end;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000000;letter-spacing:normal;word-spacing:normal;text-transform:none;direction:ltr;block-progression:tb;writing-mode:lr-tb;baseline-shift:baseline;text-anchor:end;white-space:normal;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#fff;fill-opacity:1;fill-rule:nonzero;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                        x="-49.18042"
                        y="167.53131">
                        <div class="mainquesdiv" id="md11q1">
                            <div class="contentques">
                                <div class="pointer"></div>
                                <header>Zähne</header>
                                <p>Wie viele Zähne hat ein normaler Erwachsener?</p><!--32-->
                                <input type="number" id="qs1aw" placeholder="Antwort...">
                                <input type="submit" id="sendqs1" value="Schicken">
                            </div>
                        </div>
                    </foreignObject>
                    <path
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;marker-end:url(#marker15406);color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                    d="m 235.67447,613.38544 c 41.42983,2.92726 105.62133,6.93073 127.00925,24.15098"
                    id="path15404"
                    inkscape:connector-curvature="0"
                    sodipodi:nodetypes="cc" />
                    <path
                    style="color:#fff;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;marker-end:url(#marker19586);color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
                    d="m 226.55345,581.77146 c 44.07004,0.2447 82.34236,-11.16297 99.85429,-20.78839"
                    id="path19584"
                    inkscape:connector-curvature="0"
                    sodipodi:nodetypes="cc" />
                </g>
                
                </svg> 
            </div>
        </div>
        <footer>
            <div class="upper">
                <a style="padding-right:10px;" href="./quelle">Quelle</a>
                <a href="./cookies">Cookies</a>
            </div>
            <div class="lower">
                <p>Das Verdauungssystem von Luis, Erik, Caspar, Paul</p>
            </div>
        </footer>
        <div class="wrapper">
            <div class="content">
                <header>Cookies</header>
                <p>Wir verwenden Cookies um das Spielerlebnis zu verbessern.</p>
                <div class="buttons">
                    <button class="item">Verstanden</button>
                    <a href="./cookies" class="item">Mehr erfahren</a>
                </div>
            </div>
        </div>
    </section>
    <script src="./script/cookies.js"></script>
    <script>
        $("#accepted").click(function(){
            $(".innermodal").removeClass("modopen");
            $(".overlay").removeClass("modopen");
            $(".zommam").addClass("completedzm");
            $(".figuresel").addClass("completedzm");
            $(".figuresel").css("opacity", "1");
            document.cookie = "_gafigch=GA1.2.442452332.16341655476; max-age="+60*60*24*30;
        });
        $(".fig1").click(function choosefg1(){
            $(this).toggleClass("chosen");
            $("#accepted").click(function(){
                document.cookie = "_gafg1=GA1.2.442452332.163416588.if1; max-age="+60*60*24*30;
                location.reload();
            });
            $(".bntfigsubm").toggleClass("figsel");
            $(".fig2").toggleClass("clckcnc")
            $(".fig3").toggleClass("clckcnc")
        });
        $(".fig2").click(function choosefg1(){
            $(this).toggleClass("chosen");
            $("#accepted").click(function(){
                document.cookie = "_gafg2=GA1.2.442452332.163416588.if2; max-age="+60*60*24*30;
                location.reload();
            });
            $(".bntfigsubm").toggleClass("figsel");
            $(".fig1").toggleClass("clckcnc")
            $(".fig3").toggleClass("clckcnc")
        });
        $(".fig3").click(function choosefg1(){
            $(this).toggleClass("chosen");
            $("#accepted").click(function(){
                document.cookie = "_gafg3=GA1.2.442452332.163416588.if3; max-age="+60*60*24*30;
                location.reload();
            });
            $(".bntfigsubm").toggleClass("figsel");
            $(".fig2").toggleClass("clckcnc")
            $(".fig1").toggleClass("clckcnc")
        });
        
    </script>
    <script>
        $('#dicescel').click(function(){
            $(".chngdcsec").html("Weiter");
            $(".figuresel").addClass("start");
            $("#md11q1").addClass("degga");
        });
    </script>
    <script src="./script/dice.js"></script>
    <script src="./script/game_2.js"></script>
</body>
</html>