<?php
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Home</title>
    <link rel="stylesheet" href="css/home.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
</head>

    <body class="body_atualizado--home">
        
    <?php include 'navbar.php'?>    
        <div class="container-fluid"> 
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                          <div class="carousel-inner" role="listbox">
                              <div class="carousel-item active">
                                  <img class="d-block img-fluid" src="img/medicos.jpg" alt="First slide">
                                <div class="carousel-caption carousel-caption_home d-none d-md-block ">
                                      <h3>Sistema de Monitoramento Cardíaco</h3>
                                      <p>Quadro de gerenciamento de dados coletados pelo aplicativo.</p>
                                      <button type="button" class="btn btn-success btn-lg">    Entrar   </button>
                                </div>
                              </div>
                              <div class="carousel-item">
                                <img class="d-block img-fluid" src="..." alt="Second slide">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block img-fluid" src="..." alt="Third slide">
                              </div>
                          </div>
                    </div>
            </div>
        
        
        
    </body>
</html>