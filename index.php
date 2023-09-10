<!DOCTYPE html>
<html>

<head>
    <title>Train Sim Screen version 10.09.23-01</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="/img/favicon.ico">
</head>

<body>

    
    <div class="aligndiv">
        <img src="img/logo-full.png" alt="train-sim-screens logo" class="logoimg">
        <h1 class="headertext">List of available trains:</h1>
    </div>

    <div class="aligndiv">
        <!-- <a class="trainlist" href="/trains/tgv.php">TGV</a> <br> -->
        <?php

        if ($handle = opendir('trains/')) {

            while (false !== ($entry = readdir($handle))) {

                if ($entry != "." && $entry != "..") {

                    $filenamedisplay = str_replace('.php', ' ', $entry);
                    $filenamedisplay = ucfirst($filenamedisplay);

                    echo "<a class='trainlist' href='/trains/$entry'>$filenamedisplay</a> <br>";
                }
            }
            closedir($handle);
        }

        ?>

    </div>

</body>

</html>