    <nav class="navbar navbar-expand-md navbar-dark fixed-top navbar_atualizada">
      <a class="navbar-brand" href="home.php">Heart Rate Monitor</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
          </li>
          
<?php  
                    
                if(isset($_SESSION['idUser']) && isset($_SESSION['nome']) ){   
                    
                $nome = $_SESSION['nome'];    
?> 
               <!-- <li class="nav-item">
                  <a class="nav-link" href="#">Quadro de Pontos</a>
                </li> -->
                <li class="nav-item">
                  <a class="nav-link" href="conquistas.php">Conquistas</a>
                </li>       

              </ul>
              <ul class="nav navbar-nav navbar-right">
                  <li>
                      <a class="nav-link" href="profile.php"><?php echo $nome; ?></a>
                  </li>
                  <li>
                      <a class="nav-link" href="loginAction.php?action=logout">Sair</a>
                  </li>
              </ul>
          
<?php  
                }  
?>           
       <!-- <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> -->
      </div>
    </nav>

 