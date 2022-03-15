<?php
    //includo il database
    require __DIR__ . '/../GENERALI/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Ajax Dischi</title>
    <link rel="stylesheet" href="../GENERALI/style.css">
</head>
<body>
    <div id="app">
        <header>
            <div class="container" id="header-container">
                <div class="header-logo">
                    <img src="http://pluspng.com/img-png/spotify-logo-png-open-2000.png" alt="">
                </div>
            </div>
        </header>

        <main>
            <div class="container">
                <div id="discs-container">

                    <?php
                        //tramite un ciclo FOR di php visualizzo tutte le informazioni dei dischi
                        foreach($database as $disco){
                            echo "<div class='disc'>";
                                echo "<img src=' " .$disco['poster']." '>";
                                echo "<h3>".$disco['title']."</h3>";
                                echo "<p class='author'>" .$disco['author']. "</p>";
                                echo "<p class='year'>" .$disco['year']. "</p>";
                            echo "</div>";
                        }
                    ?>    
                </div>
            </div>
        </main>
    </div>
</body>
</html>