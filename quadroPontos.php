<?php
    session_start(); 
    include("connection/connection.php")
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home</title>
    <link rel="stylesheet" href="css/home.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
</head>  

    <body class="body_atualizado--home">
        
    <?php include 'navbar.php'?>    
        <div class="jumbotron">
             <div class="container-fluid" align="center">
                <div class="row">
                    <div class="col">
                        <fieldset>
                             <img class="img-fluid" src="getGraph.php" alt="Pontuação por categoria" title="Pontuação por categoria" />
                         </fieldset>  
                    </div>
                </div>
                <div class="row">
                    <div class="col" style="padding-top: 25px;">
                    <fieldset>
                         <img  class="img-fluid" src="getGraph2.php" alt="Taxa de Monitoramento de Cardíaco por dia" title="Taxa de Monitoramento de Cardíaco por dia" />
                     </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>