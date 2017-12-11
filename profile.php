<?php

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Perfil</title>
    <link rel="stylesheet" href="css/home.css"/>
    <link rel="stylesheet" href="css/profile.css"/>    
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
</head>

    <body class="body_atualizado">
        
    <?php include 'navbar.php'?>    
        
        <div class="container">
            <div class="jumbotron_profile">
                        <div class="row">
                            <div class="col-2">
                                <p class="p_profile">Nome: </p>
                            </div>          
                        </div>
                        <div class="row">
                              <div class="col-2">
                                  <p class="p_profile">Idade:</p>
                            </div>

                              <div class="col">
                                <img class="img_profile" src="img/woman.png" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col"><p class="p_profile">Nível: X</p></div>  
                        </div>                       
                            <div class="progress progress_pontuacao">
                                   <div class="progress-bar bg-success"   aria-valuenow="70"
                                   aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                       <p class="p_profile"> 50/100pts </p>
                                   </div>
                           </div>       
                </div>    
        
            </div>
        
        
    </body>
</html>