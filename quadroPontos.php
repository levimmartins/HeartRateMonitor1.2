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
<<<<<<< HEAD
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
=======
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Data</th>
                    <th scope="col">Atividade</th>
                    <th scope="col">Pontuação</th>
                  </tr>
                </thead>
                <tbody>
                    <?php 
                        $idUser =  $_SESSION['idUser'];
                        $querySelecao = "SELECT *FROM hrmDB.pontos WHERE user_idUser = ".$idUser." ";
                        $resultado = mysqli_query($conn, $querySelecao); 
                        
                        
                        while($pontos = mysqli_fetch_object($resultado)){
                            ?>
                                    <tr>
                                       <td><?php echo $pontos->ponto; ?></td>
                                       <td><?php echo $pontos->descAtividade; ?></td>                  
                                    </tr>     
                        <?php 
                        
                        }
                        ?>
                    
                     
                  
                  
                </tbody>
          </table>
>>>>>>> fcbf26b08839a8d94c2ac2efaa1781c4f774ef67
        </div>
    </body>
</html>