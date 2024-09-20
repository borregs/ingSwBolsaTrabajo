<?php

include "./dbconect.php";


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="./scripts.js"></script>
        <link rel="icon" href="./icon.png">
        <link rel="stylesheet" href="./styles.css">
        <title>Captura de Catalogos</title>
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>   
        <div>
            <div class="container">
                <img id="branding" class="inline-block" src="./icon.png"/>
                <h3 class="title inline">   
                    <div class="inline-block formato">Reportes</div>
                </h3>
            </div>
            <nav class="navbar navbar-light fs-4 mb-5 justify-content-center inline">
                <div class="flexbox">
                    <a href="./index.php" ><div class="inline-block nav-itm">Bolsa de Trabajo</div></a>
                    <a href="./report.php"><div class="inline-block nav-itm">Reportes</div></a>
                    <a href="#"> <div class="inline-block nav-itm selected">Captura de Catalogos</div></a>
                    <div class="inline-block nav-itm">Bolsa de Trabajo</div>
                    <div class="inline-block nav-itm">Bolsa de Trabajo</div>
                </div>
            </nav>    
        </div>
    </body>
</html>
