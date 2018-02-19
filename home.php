 
<?php   
    session_start(); 
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
        <div class="container">
            <div class="row">
                
                        <div style="position: relative;">
                           <img  src="img/medicos.jpg"  style="width: 100%; height: auto; opacity: 0.5;" >
                           <div align="center" style="position: relative; top: -43%;">
                               <h3>Sistema de Monitoramento Cardíaco</h3>
                               <p>Quadro de gerenciamento de dados coletados pelo aplicativo.</p>
                               
<?php                      
                             if(!isset($_SESSION['idUser']) && !isset($_SESSION['nome']) ){   
                              
?>                               
                               <a class="btn btn-success btn-lg" href="login.php"> Entrar</a> 
<?php
                             }
?>
                           </div>
                       </div>
                
            </div>              
        </div>
        
        
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    </body>
</html>