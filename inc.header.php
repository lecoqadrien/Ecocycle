<?php
    $url = "//src/";
    $path = "/Applications/MAMP/htdocs/" .$url;
    $title = "Accueil";

?>
<DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width,initial-scale=1.0">
            <link rel="stylesheet" href="https://use.typekit.net/kij1fts.css">
            <link rel="stylesheet" href="style.css">
            <link rel="stylesheet" href="../../style.css">
            <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
            <link rel="stylesheet" href="https://use.typekit.net/nqv4hxt.css">


            
            <title>
                <?php if(isset($title)){
                    echo $title;
                }?>
            </title>
        </head>
        <header>
        <nav>
            <a href="index.php"><img src="img/logo_ecocycle.png" id="logo"></a>
            <div class="openMenu">
                <img src="img/burger.png" alt="image">
            </div>
            <ul>
                <li>
                    <a href="index.php" id="service">Notre service</a>
                    <img src="img/trait_service_nav.png" alt="" class="trait_service">
                </li><br>
                <li>
                    <a href="src/pages/team.php">Notre Equipe</a>
                    <img src="img/trait_equipe_nav.png" alt="" class="trait_equipe">
                </li><br>
                <li>
                <a href="src/pages/contact.php">
                    <button>Contactez-nous</button>
                </a>
                </li>
               
                <div class="closeMenu"></div>
            </ul>
        </nav>
        </header>
        
        <body>
       
       