<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MP3 em php</title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    
    <link rel="stylesheet" href="style.css">

    
    </head>
    <body>
        <div class="container">
            <?php
            include_once 'pages/helpers.php';
            ;
            ?>

            <?php
                if (isset($_GET['page'])){
                   if (file_exists("pages/{$_GET['page']}.php")) {
                        include_once "pages/{$_GET['page']}.php"; 
                    } else {
                        include_once 'pages/404.php';
                    }

                } else {
                    include_once 'pages/albuns.php';
                }
               
                    
                       
            ?>
        </div>
    </body>
</html>