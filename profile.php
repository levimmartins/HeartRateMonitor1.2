<?php
  include ("connection/connection.php");
  session_start();
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
    <?php 
        
        $idUser = $_SESSION['idUser'];
        $nome = $_SESSION['nome'];
        
                $sqlSelect = "SELECT dataNascimento FROM hrmDB.user where idUser = ".$idUser." ";
                $stmt1 = mysqli_prepare($conn, $sqlSelect);
                mysqli_stmt_bind_result($stmt1, $nascimento);
                mysqli_stmt_execute($stmt1);
               
                
                while(mysqli_stmt_fetch($stmt1)){
                    $nascimentoDb = $nascimento;
                }
                
                mysqli_stmt_close($stmt1);
              
                 $birthDate = explode("-", $nascimentoDb);
                //get age from date or birthdate
                $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[1], $birthDate[2], $birthDate[0]))) > date("md")
                  ? ((date("Y") - $birthDate[0]) - 1)
                  : (date("Y") - $birthDate[0]));
              
        
                
                $sqlSelect2 = "SELECT SUM(ponto) FROM hrmDB.pontos where user_idUser = ".$idUser." ";
                $stmt2 = mysqli_prepare($conn, $sqlSelect2);
                mysqli_stmt_bind_result($stmt2, $totalPontos);
                mysqli_stmt_execute($stmt2);
               
                
                while(mysqli_stmt_fetch($stmt2)){
                    $totalPontosDb = $totalPontos;
                }
                
                mysqli_stmt_close($stmt2);
                
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
                
    ?>    
        <div class="container" style="padding-bottom: 15px; margin-top: -42px;">
            <div class="jumbotron_profile" style="border-radius: 8px;   padding-left: 47px; padding-right: 34px; padding-bottom: 11px; padding-top: 16px;">
                        <div class="row">
                            <div class="col-5">

                                <p class="p_profile">Nome: <?php echo $nome; ?> </p>
                            </div>          
                        </div>
                        <div class="row">
                              <div class="col-3">
                                  <p class="p_profile">Idade: <?php echo $age; ?> </p>
                              </div>
                               
                              <div class="col">
                                <img class="img_profile" src="img/woman.png" />
                             </div>

                        </div>
                        <div class="row">
                            <div class="col"><p class="p_profile">Nível: <?php echo $nivel; ?></p></div>  
                        </div>                       
                            <div class="progress progress_pontuacao">
                                   <div class="progress-bar bg-success"   aria-valuenow="70"
                                   aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                       <p class="p_profile"> <?php echo $totalPontosDb; ?>/<?php echo $pontosRestante; ?>pts </p>
                                   </div>
                           </div>       
                </div>    
        
            </div>
        
        
    </body>
</html>