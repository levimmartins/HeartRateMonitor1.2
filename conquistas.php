<?php
    session_start();
<<<<<<< HEAD

    include("connection/connection.php");
        
    $idUser =  $_SESSION['idUser'];
    $querySelecao = "SELECT SUM(ponto) as total FROM pontos WHERE  user_idUser = ".$idUser." ";
    $resultado = mysqli_query($conn, $querySelecao); 
    
    $totalPontosDb = 0;
     
   while($pontos = mysqli_fetch_object($resultado)){      
            $totalPontosDb = $pontos->total; 
             
    }
    
    
    
    
                $nivel = 1;
                $pontosRestante =  100;
                
                if($totalPontosDb >= 100){
                    $nivel = 2;
                    $pontosRestante = 200;
                    
                }
                
                if($totalPontosDb >= 200){
                    $nivel = 3;
                    $pontosRestante = 300;

                }
                
                if($totalPontosDb >= 300){
                    $nivel = 4;
                    $pontosRestante = 400;

                }
                
                if($totalPontosDb >= 400){
                    $nivel = 5;
                    $pontosRestante = 500;

                }
                
                if($totalPontosDb >= 500){
                    $nivel = 6;
                }
                
             
 
    
=======
>>>>>>> fcbf26b08839a8d94c2ac2efaa1781c4f774ef67
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Coquistas</title>
    <link rel="stylesheet" href="css/home.css"/>
    <link rel="stylesheet" href="css/pontos.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
</head>

    <body class="body_atualizado">
        
    <?php include 'navbar.php'?>    
        
        <div class="container">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
<<<<<<< HEAD
                        
                        <img class="<?php if($nivel < 1){ echo "naoConquistado"; } ?>" src="img/1.png" width="90%" />
                    </div>   
                    <div class="col">
                        <img  class="<?php if($nivel < 2){ echo "naoConquistado"; } ?>" src="img/2.png" width="90%"/>
                    </div>   
                    <div class="col">
                        <img  class="<?php if($nivel < 3){ echo "naoConquistado"; } ?>" src="img/3.png" width="90%"/>
                    </div>   
                    <div class="col">
                        <img class="<?php if($nivel < 4){ echo "naoConquistado"; } ?>" src="img/4.png" width="90%"/>
=======
                        <img src="img/1.png" width="90%" />
                    </div>   
                    <div class="col">
                        <img src="img/2.png" width="90%"/>
                    </div>   
                    <div class="col">
                        <img src="img/3.png" width="90%"/>
                    </div>   
                    <div class="col">
                        <img src="img/4.png" width="90%"/>
>>>>>>> fcbf26b08839a8d94c2ac2efaa1781c4f774ef67
                    </div>   
                </div>
                 <div class="row">
                    <div class="col">
<<<<<<< HEAD
                        <img  class="<?php if($nivel < 5){ echo "naoConquistado"; } ?>" src="img/5.png" width="90%"/>
                    </div>   
                    <div class="col">
                        <img class="<?php if($nivel < 6){ echo "naoConquistado"; } ?>" src="img/6.png" width="90%"/>
                    </div>   
                    <div class="col">
                        <img class="<?php if($nivel < 7){ echo "naoConquistado"; } ?>"  src="img/7.png" width="90%"/>
                    </div>   
                    <div class="col">
                        <img class="<?php if($nivel < 8){ echo "naoConquistado"; } ?>" src="img/8.png" width="90%"/>
=======
                        <img src="img/5.png" width="90%"/>
                    </div>   
                    <div class="col">
                        <img class="naoConquistado" src="img/6.png" width="90%"/>
                    </div>   
                    <div class="col">
                        <img class="naoConquistado" src="img/7.png" width="90%"/>
                    </div>   
                    <div class="col">
                        <img class="naoConquistado" src="img/8.png" width="90%"/>
>>>>>>> fcbf26b08839a8d94c2ac2efaa1781c4f774ef67
                    </div>   
                </div>
            </div>
        </div>    
        
        
        
        
    </body>
<<<<<<< HEAD
</html>

=======
</html>
>>>>>>> fcbf26b08839a8d94c2ac2efaa1781c4f774ef67
