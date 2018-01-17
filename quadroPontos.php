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
        <div class="jumbotron">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Data</th>
                    <th scope="col">Atividade</th>
                    <th scope="col">Pontuação</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                     <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                     <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                     <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
          </table>
        </div>
    </body>
</html>