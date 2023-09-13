<!DOCTYPE html>
<html>

<head>
    <title>TGV Classique - TSScreen 10.09.23-02</title>
    <link rel="stylesheet" href="/./css/style.css">
    <link rel="stylesheet" href="/./css/styletgvc.css">
    <link rel="icon" type="image/x-icon" href="/./img/tgv.ico">
</head>

<body>

    <!-- Navigation -->
    <div class="aligndiv">
        <img src="/./img/tgv1.png" alt="train-sim-screens logo" class="logoimgrectangle">
        <a class="trainlist" href="/./index.php">Home</a>
    </div>
    
    <!-- Div with class grid has a max of 12 squares next to each other, making 2 rows with 12 squares each. -->
    <!-- Each individual square has a unique ID that the javascript can use to change the image to the correct number. -->

    <div class="grid">
        <div class="square"> <img id="square1" src="/./img/numbers/empty.png"> </div>
        <div class="square"> <img id="square2" src="/./img/numbers/empty.png"> </div>
        <div class="square"> <img id="square3" src="/./img/numbers/empty.png"> </div>
        <div class="square"> <img id="square4" src="/./img/numbers/empty.png"> </div>
        <div class="square"> <img id="square5" src="/./img/numbers/empty.png"> </div>
        <div class="square"> <img id="square6" src="/./img/numbers/empty.png"> </div>
        <div class="square"> <img id="square7" src="/./img/numbers/empty.png"> </div>
        <div class="square"> <img id="square8" src="/./img/numbers/empty.png"> </div>
        <div class="square"> <img id="square9" src="/./img/numbers/empty.png"> </div>
        <div class="square"> <img id="square10" src="/./img/numbers/empty.png"> </div>
        <div class="square"> <img id="square11" src="/./img/numbers/empty.png"> </div>
        <div class="square"> <img id="square12" src="/./img/numbers/empty.png"> </div>
        <div class="square"> <img id="square13" src="/./img/numbers/empty.png"> </div>
        <div class="square"> <img id="square14" src="/./img/numbers/empty.png"> </div>
        <div class="square"> <img id="square15" src="/./img/numbers/empty.png"> </div>
        <div class="square"> <img id="square16" src="/./img/numbers/empty.png"> </div>
        <div class="square"> <img id="square17" src="/./img/numbers/empty.png"> </div>
        <div class="square"> <img id="square18" src="/./img/numbers/empty.png"> </div>
        <div class="square"> <img id="square19" src="/./img/numbers/empty.png"> </div>
        <div class="square"> <img id="square20" src="/./img/numbers/empty.png"> </div>
        <div class="square"> <img id="square21" src="/./img/numbers/empty.png"> </div>
        <div class="square"> <img id="square22" src="/./img/numbers/empty.png"> </div>
        <div class="square"> <img id="square23" src="/./img/numbers/empty.png"> </div>
        <div class="square"> <img id="square24" src="/./img/numbers/empty.png"> </div>
    </div>

    <br>

    <!-- These buttons make the same calls as what the system detecting speeds and tvm speeds will be making -->

    <button onclick="change320G()">Set 320 green</button>
    <button onclick="change300G()">Set 300 green</button>
    <button onclick="change270G()">Set 270 green</button>
    <button onclick="change230G()">Set 230 green</button>
    <button onclick="change200G()">Set 200 green</button>
    <button onclick="change170G()">Set 170 green</button>
    <button onclick="change160G()">Set 160 green</button>
    <button onclick="change130G()">Set 130 green</button>
    <button onclick="change100G()">Set 100 green</button>
    <button onclick="change080G()">Set 080 green</button>

    <br><br>

    <button onclick="change320Gblink()">Set 320 green blink</button>
    <button onclick="change300Gblink()">Set 300 green blink</button>
    <button onclick="change270Gblink()">Set 270 green blink</button>
    <button onclick="change230Gblink()">Set 230 green blink</button>
    <button onclick="change200Gblink()">Set 200 green blink</button>
    <button onclick="change170Gblink()">Set 170 green blink</button>
    <button onclick="change160Gblink()">Set 160 green blink</button>
    <button onclick="change130Gblink()">Set 130 green blink</button>
    <button onclick="change100Gblink()">Set 100 green blink</button>
    <button onclick="change080Gblink()">Set 080 green blink</button>

    <br><br>

    <button onclick="change300B()">Set 300 black</button>
    <button onclick="change270B()">Set 270 black</button>
    <button onclick="change230B()">Set 230 black</button>
    <button onclick="change200B()">Set 200 black</button>
    <button onclick="change170B()">Set 170 black</button>
    <button onclick="change160B()">Set 160 black</button>
    <button onclick="change130B()">Set 130 black</button>
    <button onclick="change100B()">Set 100 black</button>
    <button onclick="change080B()">Set 080 black</button>

    <br><br>

    <button onclick="change300Bblink()">Set 300 black blink</button>
    <button onclick="change270Bblink()">Set 270 black blink</button>
    <button onclick="change230Bblink()">Set 230 black blink</button>
    <button onclick="change200Bblink()">Set 200 black blink</button>
    <button onclick="change170Bblink()">Set 170 black blink</button>
    <button onclick="change160Bblink()">Set 160 black blink</button>
    <button onclick="change130Bblink()">Set 130 black blink</button>
    <button onclick="change100Bblink()">Set 100 black blink</button>
    <button onclick="change080Bblink()">Set 080 black blink</button>

    <br><br>

    <button onclick="change300W()">Set 300 white</button>
    <button onclick="change270W()">Set 270 white</button>
    <button onclick="change230W()">Set 230 white</button>
    <button onclick="change200W()">Set 200 white</button>
    <button onclick="change170W()">Set 170 white</button>
    <button onclick="change160W()">Set 160 white</button>
    <button onclick="change130W()">Set 130 white</button>
    <button onclick="change100W()">Set 100 white</button>
    <button onclick="change080W()">Set 080 white</button>

    <br><br>

    <button onclick="change300Wblink()">Set 300 white blink</button>
    <button onclick="change270Wblink()">Set 270 white blink</button>
    <button onclick="change230Wblink()">Set 230 white blink</button>
    <button onclick="change200Wblink()">Set 200 white blink</button>
    <button onclick="change170Wblink()">Set 170 white blink</button>
    <button onclick="change160Wblink()">Set 160 white blink</button>
    <button onclick="change130Wblink()">Set 130 white blink</button>
    <button onclick="change100Wblink()">Set 100 white blink</button>
    <button onclick="change080Wblink()">Set 080 white blink</button>

    <br><br>

    <button onclick="change0R()">Set stop 0 red</button>

    <button onclick="changeR()">Set stop full red</button>

    <button onclick="clearScreen()">Turn off TVM</button>



</body>

</html>

<!-- Attach javascript file -->
<script src="/./trains-js/TGV Classique.js"> </script>
